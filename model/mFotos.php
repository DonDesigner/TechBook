<?php
require_once 'db/Connection.php';

/**
 * Description of mFotos
 *
 * @author Diego
 */
class mFotos extends db{
    
    private $id;
    private $datahora;
    private $foto;
    private $autorcom;
    private $comentario;
    
    function getId() {
        return $this->id;
    }

    function getDataHora() {
        return $this->datahora;
    }

    function getFoto() {
        return $this->foto;
    }

    function getAutorCom() {
        return $this->autorcom;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDataHora($datahora) {
        $this->datahora = $datahora;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setAutorCom($autorcom) {
        $this->autorcom = $autorcom;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }


}
