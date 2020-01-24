<?php 

// Connection en PDO à la base de données
function dbConnect(){ 
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=Quiz_Pokemon', 'root', 'kevinkevin');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

// Récupération des articles dans la base de données
function getArticle($maxArticle, $offset){ 
    $db = dbConnect();

    $req = $db->query("SELECT id, Title, Articles, Picture FROM Article ORDER BY RAND() LIMIT $maxArticle OFFSET $offset");
    return $req;
}

// Retourne le nombre total d'articles dans la base de données
function getPaging(){   
    $db = dbConnect();

    $req = $db->query('SELECT COUNT(id) FROM Article');
    return $req;
}

// Récupération aléatoire de 8 questions dans la base de données
function getQuestions() {  

    $db = dbConnect();
    $req = $db-> query('SELECT id, Question FROM Questions ORDER BY RAND() LIMIT 8 ') ;
    return $req;  
}

// Récupération des réponses aux questions dans la base de données
function getAnswers($questionId){  
	
    $db = dbConnect();
    $req = $db->prepare('SELECT question_id, id_answer, answer, correct  FROM Answers WHERE question_id = ? ORDER BY RAND() ');
    $req->execute(array($questionId));
    return $req;
};

// Récupération du nom et mop de passe d'authentification dans la base de données, pour l'administrateur
function getUsers($username){   
    $db = dbConnect();
    $req = $db-> prepare('SELECT id, Mdp FROM Authentification WHERE Username = ? ');
        $req->execute(array($username));
    return $req;
  
}

// Pour l'interface Admin, Création de nouvelle question pour le quizz, retourne l'ID de la dernière question créée
function createQuestion($question) {    

    $db = dbConnect();
    $req =$db -> prepare ("INSERT INTO Questions (Question) VALUES (?)");
    $req -> execute([$question]);
    $req2=$db->lastInsertId($question);
   return $req2;
}

// Pour l'interface Admin, Création de réponses avec récupération de l'ID de la dernière question créée
function createAnswers($lastId,$answer) { 
    $db = dbConnect();
    $i = 0 ;
    foreach($answer as $ans) { 
        $i ++;     
        $req =$db -> prepare ("INSERT INTO Answers (question_id, answer, correct) VALUES (?,?,?)");
        if($i==1) {
            $correct = "True";  // Passe la valeur true pour la réponse 1 créée
        }else {
            $correct = "";
        }
        $create = $req -> execute([$lastId,$ans, $correct]);
    }
}

 // Pour l'interface admin, création d'articles, avec insertion d'image possible
function createArticles($title, $content, $author, $picture){
    $db = dbConnect();
    $create = $db->prepare("INSERT INTO Article (Title, Articles, Author, Picture) VALUES (?, ?, ?, ?) ");
    $req = $create->execute(array($title, $content, $author, $picture));
    return $req;
}
