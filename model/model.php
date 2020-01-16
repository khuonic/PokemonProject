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
    return $req;
}

function getAnswers($questionId){
	
    $db = dbConnect();

    $req = $db->prepare('SELECT question_id, id_answer, answer, correct  FROM Answers WHERE question_id = ? ORDER BY RAND() ');
    $req->execute(array($questionId));
    return $req;
};

function getUsers($username){
    $db = dbConnect();
    $req = $db-> prepare('SELECT id, Mdp FROM Authentification WHERE Username = ? ');
        $req->execute(array($username));
    return $req;
  
}

function createQuestion($question) {

    $db = dbConnect();
    $req =$db -> prepare ("INSERT INTO Questions (Question) VALUES (?)");
    $req -> execute([$question]);
    $req2=$db->lastInsertId($question);
    return $req2;
}

function createAnswers($answer,$correct) {
    $db = dbConnect();
    $req =$db -> prepare ("INSERT INTO Answers (question_id, answer, correct) VALUES (?,?,?)");
    $create = $req -> execute([$lastid,$answer, $correct]); 
}


function createArticles($title, $content, $author){
    $db = dbConnect();
    $create = $db->prepare("INSERT INTO Article (Title, Articles, Author) VALUES (?, ?, ?) ");
    $req = $create->execute(array($title, $content, $author));
    return $req;
}
