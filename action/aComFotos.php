<?php
require_once 'model/mComFotos.php';
/**
 * Description of aComFotos
 *
 * @author developer
 */
class aComFotos extends mComFotos{
    
    protected $sqlInsert = "INSERT INTO comfotos (datahora, foto, autorcom, comentario) VALUES ('%s', '%s', '%s', '%s' )";
    protected $sqlUpdate = "UPDATE comfotos SET datahora='%s', foto='%s', autorcom='%s', comentario='%s' WHERE id='%s' ";
    protected $sqlDelete = "DELETE FROM amigos WHERE id='%s' ";
    protected $sqlSelect = "SELECT * FROM comfotos WHERE id='%s' ";
    
    //*************************************************************************************
    public function Insert(){
        $sql = sprintf($this->sqlInsert, $this->getDataHora(), $this->getFoto(), $this->getAutorCom(), $this->getComentario());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Update(){
        $sql = sprintf($this->sqlUpdate, $this->getDataHora(), $this->getFoto(), $this->getAutorCom(), $this->getComentario(), $this->getId());
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
        $rs = $this->Select(sprintf(" and id ='%s' ", $this->getId()));
        $this->setDataHora($rs[0]['datahora']);
        $this->setFoto($rs[0]['foto']);
        $this->setAutorCom($rs[0]['autorcom']);
        $this->setComentario($rs[0]['comentario']);        
        return $this;
    }
}
