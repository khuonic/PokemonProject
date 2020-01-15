<?php
require('controller/controller.php');


if (isset($_GET['histoire'])){
    histoire();
}
elseif(isset($_GET['home'])){
    home();
}
elseif(isset($_GET['Generations'])){
    generations();
}
elseif(isset($_GET['series_et_films'])){
    seriesAndFilms();
}
elseif(isset($_GET['cartes'])){
    cards();
}
elseif(isset($_GET['mangas'])){
    mangas();
}
elseif(isset($_GET['pop-culture'])){
    popCulture();
}
elseif(isset($_GET['quizz'])){
    quizz();
}
elseif ($_GET['action'] == 'quizzResult') {
    quizzAnswer();
}
elseif(isset($_GET['newArticle'])){
    newArticleForm();
}
elseif($_GET['action'] == 'create'){
    newArticleSave();
    popCulture();
}
elseif(isset($_GET['newQuestions'])){
    newQuestions();
}
elseif($_GET['action'] == 'questionCreated') {
    questionCreated();
    newAnswers();
}
elseif($_GET['action'] == 'answersCreated') {
    answersCreated();
   quizz();
}
elseif($_GET['action'] === 'logout'){
    logout();
}
else {
    home();
}
