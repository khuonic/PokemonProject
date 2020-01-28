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
elseif(isset($_GET['pop-culture'])){
    popCulture();
}
elseif(isset($_GET['quiz'])){
    quiz();
}
elseif(isset($_GET['newArticle'])){
    newArticleForm();
}
elseif(isset($_GET['newQuestions'])){
    newQuestions();
}
elseif (isset($_GET['action'])) {
    if($_GET['action'] == 'quizResult') {
        quizAnswer();
    }  
    elseif($_GET['action'] === 'create'){
        newArticleSave();
        header('location:index.php?pop-culture');
    }
    
    elseif($_GET['action'] === 'questionCreated') {
        $question_id =  questionCreated();  
        newAnswers($question_id);  
    }
    elseif($_GET['action'] === 'answersCreated') {
        answersCreated();
        header('location:index.php?quiz');
    }
    elseif($_GET['action'] === 'logout'){
        logout();
    } 
}

else {
    home();
}
