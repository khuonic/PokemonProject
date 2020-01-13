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
    $erreur = null;
    $dataUser = getUsers();
    while($User = $dataUser->fetch()){
        $User['Username'] . $User['Mdp'];
    }
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        if($_POST['username'] === 'Username' && $_POST['password'] === 'Mdp'){
            session_start();
            $_SESSION['connected'] = 1;
        }else{
            $erreur = "Champs Vide";
        }
    }
    $dataUser->closeCursor();
}

function is_connected(){
    checkUser();
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connected']);
}

