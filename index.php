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
    newArticleForm();
}
elseif(isset($_GET['newQuestions'])){
    newQuestions();
}
  
// appel des fonctions du controller pour les actions (résultat du quizz, création d'articles, questions, réponses,  bouton de déconnection)
elseif (isset($_GET['action'])) {       
  
    if($_GET['action'] == 'quizResult') {
        quizAnswer();       // appel de la fonction qui envoit sur la page du résultat du quizz
    }  
    elseif($_GET['action'] === 'create'){
        newArticleSave();
        header('location:index.php?pop-culture');
    }
    
    elseif($_GET['action'] === 'questionCreated') {
        $question_id =  questionCreated();  // Stockage de l'id de la dernière question créée dans une variable
        newAnswers($question_id);       // Envoi sur la page de création de questions, avec l'id de la dernière question créée en paramètre
    }
    elseif($_GET['action'] === 'answersCreated') {
        answersCreated();       // Appel de la fonction qui récupère les information du formulaire de création de questions
        header('location:index.php?quiz'); // Renvoi vers la page de quiz
    }
    elseif($_GET['action'] === 'logout'){
        logout();       // Appel de la fonction qui permet de se déconnecter (en tant qu'Admin)
    } 
}

else {
    home(); // N'importe quelle autre condition renvoie vers la page d'accueil
}
