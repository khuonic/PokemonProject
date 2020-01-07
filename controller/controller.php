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
    require('view/pop-culture.php');
}
function quizz () {

    $questions = getQuestions();   
    require('view/quizz.php');
}

function question()
{
    $question = getQuestion($_GET['id']);    
    $answers = getAnswers($_GET['question_id']);

}

function quizzAnswer() {
    require('view/quizzAnswer.php');
}