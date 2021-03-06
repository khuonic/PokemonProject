<?php
require('controller/controller.php');

// Récupération des fonctions du controller pour afficher les différentes vues
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
    if(is_connected()){
        newArticleForm();
    }else {
        header('location:index.php?pop-culture');
    }

}
elseif(isset($_GET['newQuestions'])){
    if(is_connected()){
        newQuestions();
    }
    else {
        header('location:index.php?quizz');
    }    
}
  
// appel des fonctions du controller pour les actions (résultat du quizz, création d'articles, questions, réponses,  bouton de déconnection)
elseif (isset($_GET['action'])) {       
  
    if($_GET['action'] == 'quizResult') {
        quizAnswer();       // appel de la fonction qui envoit sur la page du résultat du quizz
    }  
    elseif($_GET['action'] === 'create'){
        if(is_connected()){
            newArticleSave();
            header('location:index.php?pop-culture');
        }
        else {
            header('location:index.php?pop-culture');
        }
    }
    
    elseif($_GET['action'] === 'questionCreated') {
        if(is_connected()){
            $question_id =  questionCreated();  // Stockage de l'id de la dernière question créée dans une variable
            newAnswers($question_id);       // Envoi sur la page de création de questions, avec l'id de la dernière question créée en paramètre
        }
        else {
            header('location:index.php?quizz');
        }    
    }
    elseif($_GET['action'] === 'answersCreated') {
        if(is_connected()){
            answersCreated();       // Appel de la fonction qui récupère les information du formulaire de création de questions
            header('location:index.php?quiz'); // Renvoi vers la page de quiz
        }
        else {
            header('location:index.php?quiz');
        }
    }
    elseif($_GET['action'] == 'edit' ){
        if(is_connected()){
            edit();
        }
        else{
            header('location:index.php?pop-culture');
        }
    }
    elseif($_GET['action'] == 'articleEdited'){
        if(is_connected()){
            updateArticle();
            header('location:index.php?pop-culture');
        }
        else {
            header('location:index.php?pop-culture');
        }
           
    }
    elseif($_GET['action'] == 'delete'){
        if(is_connected()){
            eraseArticle();
        }
        else{
            header('location:index.php?pop-culture');
        }
        
    }
    elseif($_GET['action'] === 'logout'){
        logout();       // Appel de la fonction qui permet de se déconnecter (en tant qu'Admin)
    } 
}

else {
    home(); // N'importe quelle autre condition renvoie vers la page d'accueil
}
