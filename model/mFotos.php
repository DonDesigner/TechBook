<?php
require_once 'db/dbConnection.php';

/**
 * Description of mFotos
 *
 * @author Diego
 */
class mFotos extends db{
    
    private $id;
    private $album;
    private $titulo;
    private $foto;
    private $ordemfoto;
    
    function getId() {
        return $this->id;
    }

    function getAlbum() {
        return $this->album;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getFoto() {
        return $this->foto;
    }

    function getOrdemFoto() {
        return $this->ordemfoto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAlbum($album) {
        $this->album = $album;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setOrdemFoto($ordemfoto) {
        $this->ordemfoto = $ordemfoto;
    }



}
