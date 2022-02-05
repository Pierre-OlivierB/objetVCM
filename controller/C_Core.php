<?php
//Commun à tous les controlleurs
//protected pour donner uniquement en héritage
//après instanciation le user peut get les méthodes associées

abstract class C_Core
{
    protected $data;
    protected $view;

    public function getView(){
        return $this->view;
    }
    public function getData(){
        return $this->data;
    }
}