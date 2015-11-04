<?php
require_once 'db/dbConnection';
/**
 * Description of mPessoas
 *
 * @author Diego
 */
class mPessoas  extends db {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $fotoperfil;
    private $ativoem;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getFotoPerfil() {
        return $this->fotoperfil;
    }

    function getAtivoEm() {
        return $this->ativoem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setFotoPerfil($fotoperfil) {
        $this->fotoperfil = $fotoperfil;
    }

    function setAtivoEm($ativoem) {
        $this->ativoem = $ativoem;
    }


}
