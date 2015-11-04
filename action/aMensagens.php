<?php

require_once 'model/mMensagens.php';

/**
 * Description of aMensagens
 *
 * @author developer
 */
class aMensagens extends mMensagens{
    protected $sqlInsert = "INSERT INTO mensagens (dequem, paraquem, datahora, mensagem, publico) VALUES ('%s', '%s', '%s', '%s', '%s') ";
    protected $sqlUpdate = "UPDATE mensagens SET dequem='%s', paraquem='%s', datahora='%s', mensagem='%s', publico='%s' WHERE id='%s' ";
    protected $sqlDelete = "DELETE FROM mensagens WHERE id='%s' ";
    protected $sqlSelect = "SELECT * FROM mensagens WHERE 1=1 %s %s";
    
    //*************************************************************************************
    public function Insert(){
        $sql = sprintf($this->sqlInsert);
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Update(){
        $sql = sprintf($this->sqlUpdate, $this->getDeQuem(), $this->getParaQuem(), $this->getDataHora(), $this->getMensagem(), $this->getPublico(), $this->getId());
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
        $rs = $this->Select(sprintf(" and id='%s' ", $this->getId()  ));
        $this->setDeQuem($rs[0]['dequem']);
        $this->setParaQuem($rs[0]['paraquem']);
        $this->setMensagem(($rs[0]['mensagem']));
        $this->setPublico($rs[0]['publico']);        
        return $this;
    }
}
