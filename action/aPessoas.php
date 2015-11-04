<?php
require_once 'model/mPessoas.php';

/**
 * Description of aPessoas
 *
 * @author developer
 */
class aPessoas extends mPessoas{
    protected $sqlInsert = "INSERT INTO pessoas (nome, email, senha, fotoperfil, ativoem) VALUES ('%s', '%s', '%s', '%s', '%s')";
    protected $sqlUpdate = "UPDATE pessoas SET nome='%s', email='%s', senha='%s', fotoperfil='%s', ativoem='%s' WHERE id='%s' ";
    protected $sqlDelete = "DELETE FROM mensagens WHERE id='%s'";
    protected $sqlSelect = "SELECT * FROM mensagens WHERE 1=1 %s %s";
    
    //*************************************************************************************
    public function Insert(){
        $sql = sprintf($this->sqlInsert, $this->getNome(), $this->getEmail(), $this->getSenha(), $this->getFotoPerfil(), $this->getAtivoEm());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Update(){
        $sql = sprintf($this->sqlUpdate,$this->getNome(), $this->getEmail(), $this->getSenha(), $this->getFotoPerfil(), $this->getAtivoEm(), $this->getId() );
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Delete(){
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************   
    public function Select($where='', $order='', $rquery=false){
        $sql = sprintf($this->sqlSelect);
        return $this->RunSelect($sql);
    }
    
    //*************************************************************************************
    public function SelectInner($where='', $order='', $rquery=false){
        $sql = sprintf($this->Select(), $where, $order);
        if($rquery){
            return $sql; 
        } else  {
            return $this->RunSelect($sql);  
        }
    }
    
    //*************************************************************************************
    public function load(){
        $rs = $this->Select(sprintf(" and id='%s' ", $this->getId() ));
        $this->setNome($rs[0]['nome']);
        $this->setEmail($rs[0]['email']);
        $this->setSenha($rs[0]['senha']);
        $this->setFotoPerfil($rs[0]['fotoperfil']);
        $this->setAtivoEm($rs[0]['ativoem']);        
        return $this;
    }
}
