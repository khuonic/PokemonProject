<?php 
// coucou

function dbConnect(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=Quizz;charset=utf8', 'root', 'toto');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getArticle(){
    $db = dbConnect();

    $req = $db->query('SELECT id, Title, Articles FROM Article ORDER BY RAND()');
    return $req;
}

function getQuestions() {

    $db = dbConnect();
    $req = $db-> query('SELECT id, Question FROM Questions ORDER BY RAND() LIMIT 8 ') ;
    $eq = $req->fetch();
    return $eq;
}

function getAnswers($questionId){
	
    $db = dbConnect();

    $req = $db->prepare('SELECT question_id, id_answer, answer, correct  FROM Answers WHERE question_id = ? ');
    $req->execute(array($questionId));
    return $req;
};

<<<<<<< HEAD
print_r(getQuestions());
=======
function getUsers(){
    $db = dbConnect();
    $req = $db-> query('SELECT Username, Mdp FROM Authentification') ;  
    return $req;
}

>>>>>>> 908357662b42042fafa3760ea002e7f5b8e73a77
