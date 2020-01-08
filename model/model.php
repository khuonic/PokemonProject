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

function getQuestions() {

    $db = dbConnect();
    $req = $db-> query('SELECT id, Question FROM Questions ORDER BY RAND() LIMIT 8 ') ;  
    return $req;
}

function getQuestion($questionId){
	
    $db = dbConnect();

    $req = $db->prepare('SELECT id, Question  FROM Questions WHERE id = ?');
    $req->execute(array($questionId));
    $question = $req->fetch();

    return $question;
}

function getAnswers($questionId){
	
    $db = dbConnect();

    $answers = $db->prepare('SELECT id_answer, answer  FROM comments WHERE question_id = ? ');
    $answers->execute(array($questionId));

    return $answers;
}