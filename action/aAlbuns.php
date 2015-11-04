<?php

require_once 'model/mAlbuns.php';
class aAlbuns extends mAlbuns {
    
    protected $sqlInsert = "INSERT INTO albuns (dono, titulo) VALUES ('%s', '%s')" ;
    protected $sqlUpdate = "UPDATE albuns SET dono='%s', titulo='%s' WHERER id='%s' ";
    protected $sqlDelete = "DELETE FROM albuns WHERE id='%s' ";
    protected $sqlSelect = "SELECT * FROM albuns WHERE 1=1 %s %s ";
    protected $sqlSelectInner = "SELETEC albuns.*, pessoas.nome FROM albuns 
                                INNER JOIN pessoas ON (pessoas.id = albuns.dono)
                                WHERE 1=1 %s %s";
    
    
    public function Insert(){
        try {
            $sql = sprintf($this->sqlInsert, $this->getDono(), $this->getTitulo());
            return $this->RunQuery($sql);
        } catch (Exception $ex) {
            echo "Albuns - exception:  "  . $ex->getMessage() . "\n";
        }
    }
    
    public function Update(){
        try{
            $sql = sprintf($this->sqlUpdate, $this->getDono(), $this->getTitulo(), $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $ex) {
            echo "Albuns - exception:  "  . $ex->getMessage() . "\n";
        }
    }
    
    public function Delete(){
        try{
            $sql = sprinf($this->sqlDelete, $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $ex) {
            echo "Albuns - exception:  "  . $ex->getMessage() . "\n";
        }
    }
    
    public function Select($where='', $order='', $rquery=false){
        try{
            $sql = sprintf($this->Select(), $where, $order);
            if(!$rquery){
                return $sql;
            } else {
                return $this->RunSelect($sql);
            }
        } catch (Exception $ex) {
            echo "Albuns - exception:  "  . $ex->getMessage() . "\n";
        }
    }
    
    public function SelectInner($where='', $order='', $rquery=false){
        try{
            $sql = sprintf($this->sqlSelectInner, $where, $order);
            if(!$rquery){
                return $sql;;
            } else {
                return $this->RunSelect($sql);
            }
        } catch (Exception $ex) {
            echo "Albuns - exception:  "  . $ex->getMessage() . "\n";
        }
    }
    
    public function load(){
        try{
            $rs = $this->Select(sprintf(" and id = '%s' ", $this->getId()));
            $this->setId($r[0]['id']);
            $this->setDono($r[0]['dono']);
            $this->setTitulo($r[0]['titulo']);
            return $this;
                    
        } catch (Exception $ex) {
            echo "Albuns - exception:  "  . $ex->getMessage() . "\n";
        }
    }
}
