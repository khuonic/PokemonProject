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
function quizAnswer() {
    require('view/quizAnswer.php');
}
function checkUser(){
    
   if(!empty($_POST['username']) && !empty($_POST['password'])){
        $erreur = null;
        $dataUser = getUsers($_POST['username']);
        $User = $dataUser->fetch();
            if($_POST['password'] === $User['Mdp']){
                session_start();
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
    require('view/logout.php');
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
<<<<<<< HEAD

    $answerCreated = createAnswers($_POST['idQuestion'],$_POST['answer']);
}
=======
    $answerCreated = createAnswers($_POST['answer'],$_POST['vrai']);
}
>>>>>>> 3c346bb2e14f3aa620635c87bf42c8a2e3b5610a
