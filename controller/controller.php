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
    require('view/quizz.php');
}
function quizzAnswer() {
    require('view/quizzAnswer.php');
}