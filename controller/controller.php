<?php 
// récupération du model
require('model/model.php');

//recupération de la vue pour la page d'accueil
function home() {
    require('view/home.php');
}

//récupération de la partie histoire
function histoire() {
    require('view/histoireView.php');
}

//récupération de la partie histoire
function generations () {
    require('view/generations.php');
}

//fonctionnement de la pagination pourla vue Popculture
function paginArticles(){
    $currentPage =($_GET['pop-culture'] ?? 1) ?: 1;

    //mettre pop-culture '=1' lorqu'on arrive sur la première page
    if($_GET['pop-culture'] === 0 || $_GET['pop-culture'] === ''){
        (int)$_GET['pop-culture'] = 1;
    }

    //Empêcher le fais de pouvoir ajouter d'autre lettres/chiffre après le numéro de page dans l'url
   if(!filter_var($currentPage, FILTER_VALIDATE_INT)){
    throw new Exception('Numéro de page invalide');
    }
    
    //si la page actuel est en-dessous ou égal à 0 lancé l'erreur
    if($currentPage <= 0){
        throw new Exception('Numéro de page invalide');
    }

    //on récupère le nombre d'article puis on le divise par le nombre d'article max que l'on veut par page
    $paging = getPaging();
    $maxArticle = 2;
    $count = $paging->fetch(PDO::FETCH_NUM);
    $pages = ceil($count[0]/$maxArticle);

    //si le numéro de la page actuel est supérieur au nombre de page existant on lance une erreur
    if($currentPage > $pages){
        throw new Exception("Cette page n'existe pase");
    }

    //offset pour savoir à partir de quel article dans la base de donnée on récupère en fonction des pages
    $offset = $maxArticle * ($currentPage - 1);

    /*on retourne les variables contenant le nombre max d'article par page,
    l'offset et le nobre de page pour les opération suivantes*/
    $returnData = array($maxArticle, $offset, $pages);
    return $returnData;
}
function popCulture () {
    //on recupère les variable retourné dans la fonction précédente
    $returnData = paginArticles();
    //on récupère les articles
    $articles = getArticle($returnData[0], $returnData[1]);
    require('view/pop-culture.php');
    //on renvoi une nouvelles fois l'array de variable car nous en aurons encore besoin d'une pour la vue
    return $returnData;
}
//formulaire pour la création d'article
function newArticleForm() {
    require('view/newArticle.php');
}
//fonctionnement pour le formulaire de création d'article
function newArticleSave(){
    //on récupère la fonction au-dessus qui nous permet de récupérer les fichiers enregistré
    $fileName = getArticleFile();
    //insért du nouvel article dans la base de donnée
    if(isset($_POST['title'])){
        $create = createArticles($_POST['title'], $_POST['text'], $_POST['author'], $fileName);
    }
}
//récupération du fichier inséré lors de la création d'article
function getArticleFile(){
    //si on à cliqué sur le bouton valider du formulaire
    if(isset($_POST['submit'])){
        $fileName = $_FILES['userfile']['name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileError = $_FILES['userfile']['error'];
        $fileTmpName = $_FILES['userfile']['tmp_name'];

        //on sépare le nom du fichier et celui de l'extension
        $fileEXT = explode('.', $fileName);
        //on récupére uniquement l'extension
        $fileActualEXT = strtolower(end($fileEXT));
        $extAllowed = array('jpg', 'jpeg', 'png', 'pdf');

        //si le nom de l'extension du fichier uploadé correspond aux extension que l'on autorise
        if(in_array($fileActualEXT, $extAllowed)){
            //s'il n'y a pas d'erreur
            if($fileError === 0){
                // et si la taille du fichier n'excéde pas cette valeur
                if($fileSize < 10000000){
                    //on renome le fichier enregistré pour éviter les doublons
                    $fileNameNew = uniqid('', true).".".$fileActualEXT;
                    $fileDestination = 'ressources/'.$fileNameNew;
                    //puis on déplace le fichier des fichier temporaires à notre dossier ressource
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

//on récupère les questions et la vue du quiz
function quiz () {
    $questions = getQuestions();
    require('view/quiz.php');

}

//on récupère les réponses en mettant l'id des questions aux réponses qui correspondent en paramétre
function quizMatchAnswers($questionId){
    $answers = getAnswers($questionId);
    return $answers;
}

/*on récupère les réponses désigné par l'utilisateur et on les compares avec les bonnes réponses,
on envoie ensuite le résultat sous forme de note*/
function quizResult() {
    $note = 0 ;
    //dans la base de donné les réponses correcte ont un 1 dans leur colonnes sinon elles sont vide
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

