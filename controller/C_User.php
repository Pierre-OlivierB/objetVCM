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
            case 'add':
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
            default:
                $this->index();
                break;
        }
    }
    public function index()
    {
        this->data = $this->model->getAllUser();
        this->videw = "user";
    } 
}