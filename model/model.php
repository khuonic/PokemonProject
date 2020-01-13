<?php 
// coucou

function dbConnect(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=Quizz_Pokemon;charset=utf8', 'root', 'kevinkevin');
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
<<<<<<< HEAD
    $req = $db-> query('SELECT id, Question FROM Questions ORDER BY RAND() LIMIT 8 ') ;
=======
    $req = $db-> query('SELECT id, Question FROM Questions ORDER BY RAND() LIMIT 8 ') ;  
>>>>>>> bf5f5599a086af7513400d8fbaada0764a0a39ca
    return $req;
}

function getAnswers($questionId){
	
    $db = dbConnect();

    $req = $db->prepare('SELECT question_id, id_answer, answer, correct  FROM Answers WHERE question_id = ? ');
    $req->execute(array($questionId));
    return $req;
};

function getUsers(){
    $db = dbConnect();
    $req = $db-> prepare('SELECT id, Username, Mdp, compte FROM Authentification WHERE id = ? ') ;  
    $req->execute(array('1,2'));
    return $req;
}