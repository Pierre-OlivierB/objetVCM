<?php

include_once "Database.php";


//la class M_User permet la connection en objet

class M_User extends Database
{
    public function getAllUser()
    {
        //le resultat sera un tableau
        $result=[];
        try{
            $pdo = $this->getConnection();
            $query = $pdo->prepare('SELECT * FROM user');
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
        Database::disconnect();
    }
    public function insertUser($name, $firstname, $age, $tel, $email, $pays, $comment, $metier, $url)
    {
        $result = false;
        
        try{
            $pdo = $this->getConnection();
            $query = $pdo->prepare ('INSERT INTO user (name,firstname,age,tel, email, pays,comment, metier,url) values(:name, :firstname, :age, :tel, :email, :pays, :comment, :metier, :url)');
            $query->bindParam(":name",$name);
            $query->bindParam(":firstname",$firstname);
            $query->bindParam(":age",$age);
            $query->bindParam(":tel",$tel);
            $query->bindParam(":email",$email);
            $query->bindParam(":pays",$pays);
            $query->bindParam(":comment",$comment);
            $query->bindParam(":metier",$metier);
            $query->bindParam(":url",$url);
            $result=$query->execute();
            Database::disconnect();
            header("Location: index.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    public function deleteUser()
    {
        include('c_delete.php');
    }

}