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


function quizz () {
    $questions = getQuestions();
    require('view/quizz.php');
}
function quizzMatchAnswers($questionId){
    $answers = getAnswers($questionId);
    return $answers;
}
function quizzAnswer() {
    require('view/quizzAnswer.php');
}
function checkUser(){
   if(isset($_POST['username'])){
        $erreur = null;
        $dataUser = getUsers($_POST['username']);
        while( $User = $dataUser->fetch()){ 
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                if($_POST['password'] === $User['Mdp']){
                    session_start();
                    $_SESSION['connected'] = 1;
                
                }else{
                    $erreur = 'coucou';
                    echo $erreur ;
                }
            }
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

function newArticle() {

    require('view/newArticle.php');
}
function newQuestions() {

    require('view/newQuestions.php');
}
function newAnswers(){
    require('view/newAnswers.php');
}

function questionCreated(){
    $questionCreated = createQuestion($_POST['question']);
}
// function answersCreated(){
//     $answerCreated = createAnswers($_POST[]);
// }