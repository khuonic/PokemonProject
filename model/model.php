<?php 
// coucou

function dbConnect(){
    try
    {

        $db = new PDO('mysql:host=localhost;dbname=Quizz', 'root', 'toto');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getArticle(){
    $db = dbConnect();

    $req = $db->query('SELECT id, Title, Articles, Picture FROM Article ORDER BY RAND()');
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

function createAnswers($lastId,$answer) {
    $db = dbConnect();
    $i = 0 ;
    foreach($answer as $ans) { 
        $i ++;     
        $req =$db -> prepare ("INSERT INTO Answers (question_id, answer, correct) VALUES (?,?,?)");
        if($i==1) {
            $correct = "True";
        }else {
            $correct = "";
        }
        $create = $req -> execute([$lastId,$ans, $correct]);
    }
}


function createArticles($title, $content, $author, $picture){
    $db = dbConnect();
    $create = $db->prepare("INSERT INTO Article (Title, Articles, Author, Picture) VALUES (?, ?, ?, ?) ");
    $req = $create->execute(array($title, $content, $author, $picture));
    return $req;
}
