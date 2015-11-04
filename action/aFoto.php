<?php
require_once 'model/mFotos.php';
/**
 * Description of aFoto
 *
 * @author developer
 */
class aFoto extends mFotos{
    protected $sqlInsert = "INSERT INTO fotos (album, titulo, foto, ordemfoto) VALUES ('%s', '%s', '%s', '%s' " ;
    protected $sqlUpdate = "UPDATE fotos SET album='%s', titulo='%s', foto='%s', ordemfoto='%s' WHERE id='%s' ";
    protected $sqlDelete = "DELTE FROM fotos WHERE id='%s' ";
    protected $sqlSelect = "SELECT * FROM fotos WHERE 1=1 %s %s";
    
    //*************************************************************************************
    public function Insert(){
        $sql = sprintf($this->sqlInsert, $this->getAlbum(), $this->getTitulo(), $this->getFoto(), $this->getOrdemFoto());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Update(){
        $sql = sprintf($this->sqlUpdate, $this->getAlbum(), $this->getTitulo(), $this->getFoto(), $this->getOrdemFoto(), $this->getId());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Delete(){
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************   
    public function Select(){
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
        $rs = $this->Select(sprintf(" and id='%s' ", $this->getId()   ));
        $this->setAlbum($rs[0]['album']);
        $this->setTitulo($rs[0]['titulo']);
        $this->setFoto($rs[0]['foto']);
        $this->setOrdemFoto($rs[0]['ordemfoto']);
        return $this;
    }
}
