<?php

include "C_Core.php";
include "model/M_User.php";

class C_User extends C_Core {
    function __construct($action=null)
    {
        //utilisation du model user
        $this->model=new M_User();
        //action demandée et faite sur l'objet, possible grâce au model
        switch($action){
            case 'create':
                $this->create();
                break;
            case 'delete':
                $this->delete();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'read':
                $this->read();
                break;
            case 'newAdd':
                $this->newAdd();
                break;
            default:
                $this->index();
                break;
        }
    }
    public function index()
    {
        $this->data = $this->model->getAllUser();
        $this->view = "user";
    }
    public function create()
    {
        $this->view="create";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { //on initialise nos messages d'erreurs; 
            include ('c_add.php');
            $result = $this->model->insertUser($name, $firstname, $age, $tel, $email, $pays, $comment, $metier, $url);
            if($result){
                $this->data=$result;
                $this->view="user";
            }
            else{
                $this->view="error";
            }
        } else{
            echo "aucune données envoyées";
        }
    }
    public function newAdd(){
        $this->view="create";
        include "c_add.php";
    }
    public function delete()
    {
        //...
    }
    public function edit()
    {
        //...
    }
    public function read()
    {
        //...
    }
}