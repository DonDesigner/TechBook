<?php
require_once 'db/dbConnection.php';

/**
 * Description of mMensagens
 *
 * @author Diego
 */
class mMensagens extends db {
    private $id;
    private $dequem;
    private $paraquem;
    private $datahora;
    private $mensagem;
    private $publico;
    
    function getId() {
        return $this->id;
    }

    function getDeQuem() {
        return $this->dequem;
    }

    function getParaQuem() {
        return $this->paraquem;
    }

    function getDataHora() {
        return $this->datahora;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getPublico() {
        return $this->publico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDeQuem($dequem) {
        $this->dequem = $dequem;
    }

    function setParaQuem($paraquem) {
        $this->paraquem = $paraquem;
    }

    function setDataHora($datahora) {
        $this->datahora = $datahora;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setPublico($publico) {
        $this->publico = $publico;
    }


            
}
