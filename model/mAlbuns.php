<?php

require_once 'db/dbConnection.php';
class mAlbuns extends db{
    private $id;
    private $dono;
    private $titulo;
    
    function getId() {
        return $this->id;
    }

    function getDono() {
        return $this->dono;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }


    
    
    
}
        