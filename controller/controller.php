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


function popCulture () {
    $articles = getArticle();
    require('view/pop-culture.php');
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
        $message = "Vous n\'êtes pas à la hauteur" ;
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
                $_SESSION['connected'] =1;           
            }else{
                $erreur = 'coucou';
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

function newArticleForm() {
    require('view/newArticle.php');
}
function newArticleSave(){
    $create = createArticles($_POST['title'], $_POST['text'], $_POST['author']);
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

