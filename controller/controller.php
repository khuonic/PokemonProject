<?php 

require('model/model.php');

function home() {
    require('view/home.php');
}

function histoire() {
    require('view/histoireView.php');
}


function generations () {
    require('view/generations.php');
}


function seriesAndFilms() {
    require('view/series_et_films.php');
}


function cards () {
    require('view/cartes.php');
}


function mangas() {
    require('view/mangas.php');
}

function paginArticles(){

    $currentPage =($_GET['pop-culture'] ?? 1) ?: 1;
    if($_GET['pop-culture'] === 0 || $_GET['pop-culture'] === ''){
        (int)$_GET['pop-culture'] = 1;
   }
   if(!filter_var($currentPage, FILTER_VALIDATE_INT)){
    throw new Exception('Numéro de page invalide');
}
    
    if($currentPage <= 0){
        throw new Exception('Numéro de page invalide');
    }

    $paging = getPaging();
    $maxArticle = 2;
    $count = $paging->fetch(PDO::FETCH_NUM);
    $pages = ceil($count[0]/$maxArticle);
    if($currentPage > $pages){
        throw new Exception("Cette page n'existe pase");
    }
    $offset = $maxArticle * ($currentPage - 1);
    $returnData = array($maxArticle, $offset, $pages);
    return $returnData;
}
function popCulture () {
    $returnData = paginArticles();
    $articles = getArticle($returnData[0], $returnData[1]);
    require('view/pop-culture.php');
    return $returnData;
}

function newArticleForm() {
    require('view/newArticle.php');
}

function newArticleSave(){
    $fileName = getArticleFile();
    if(isset($_POST['title'])){
        $create = createArticles($_POST['title'], $_POST['text'], $_POST['author'], $fileName);
    }
}
function getArticleFile(){
    if(isset($_POST['submit'])){
        $fileName = $_FILES['userfile']['name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileError = $_FILES['userfile']['error'];
        $fileTmpName = $_FILES['userfile']['tmp_name'];

        $fileEXT = explode('.', $fileName);
        $fileActualEXT = strtolower(end($fileEXT));
        $extAllowed = array('jpg', 'jpeg', 'png', 'pdf');

        if(in_array($fileActualEXT, $extAllowed)){
            if($fileError === 0){
                if($fileSize < 10000000){
                    $fileNameNew = uniqid('', true).".".$fileActualEXT;
                    $fileDestination = 'ressources/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    return $fileNameNew;
                }else{
                    echo "L'image est trop lourde.";
                }
            }else{
                echo "Il y a eu une erreur lors de l'enregistrement de l'image.";
            }
        }else{
            echo "Ce type d'image n'est pas autorisé.";
        }

    }
}


function quiz () {
    $questions = getQuestions();
    require('view/quiz.php');

}
function quizMatchAnswers($questionId){
    $answers = getAnswers($questionId);
    return $answers;
}
function quizResult() {
    $note = 0 ;
    foreach($_POST as $id_question => $correct) {
        if(!empty($correct)) {
            $note+=1;
        }
    }
    echo "<h3> Votre Score : </h3>";
    echo $note . "/8<br><br /><br />";
    if($note <= 2) {
        $type_alert = "danger";
        $message = "Retournez vous entraîner dans les hautes herbes" ;
    }

    elseif($note >2 && $note <=4) {
        $type_alert = "danger";
        $message = "Vous n'êtes pas à la hauteur" ;
    }
    elseif($note >4 && $note <=6) {
        $type_alert = "warning";
        $message = "Vous pouvez mieux faire ! ";
        
    }
    elseif($note >6 && $note <8) {
        $type_alert = "success";
        $message = "Encore un petit effort pour être le meilleur ! " ;
       
    }
    elseif($note == 8) {
        $type_alert = "success";
        $message = "Vous êtes le meilleur dresseur !" ;
    }
    echo "<span class='alert alert-{$type_alert}'> $message</span><br /><br />";
}
function quizAnswer() {
    require('view/quizAnswer.php');
}
function checkUser(){   
   if(!empty($_POST['username']) && !empty($_POST['password'])){
        $erreur = null;
        $dataUser = getUsers($_POST['username']);
        $User = $dataUser->fetch();
            if($_POST['password'] === $User['Mdp']){
                if (session_status() === PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['connected'] =1;           
            }else{
                $erreur = 'Identifiants incorrects';
                echo $erreur ;
            }                 
        $dataUser->closeCursor();        
    }  
}

function is_connected(){
    checkUser();
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connected']);
}
function logout(){
    session_start();
    session_destroy();
    header('location:index.php?home');  
}




function newQuestions() {
    require('view/newQuestions.php');
}
function newAnswers($lastId){
    require('view/newAnswers.php');
}

function questionCreated(){
    $questionCreated = createQuestion($_POST['question']);
    return $questionCreated;
}
function answersCreated(){
    $answerCreated = createAnswers($_POST['idQuestion'],$_POST['answer']);
}

