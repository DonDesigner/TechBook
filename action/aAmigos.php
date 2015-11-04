<?php
require_once 'model/mAmigos.php';
/**
 * Description of aAmigos
 *
 * @author developer
 */
class aAmigos extends mAmigos{
    protected $sqlInsert = "INSERT INTO amigos (quempede, quemaprova, status) VALUES ('%s', '%s', '%s')";
    protected $sqlUpdate = "UPDATE amigos SET status='%s' WHERE quempede='%s', quemaprova='%s'";
    protected $sqlDelete = "DELETE FROM amigos WHERE quempede='%s' and quemaprova='%s' ";
    protected $sqlSelect = "SELECT * FROM amigos WHERE 1=1 %s %s";
    
    //*************************************************************************************
    public function Insert(){
        $sql = sprintf($this->sqlInsert, $this->getQuemPede(), $this->getQuemAprova(), $this->getStatus());
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Update(){
        $sql = sprintf($this->sqlUpdate, $this->getStatus(), $this->getQuemPede(), $this->getQuemAprova() );
        return $this->RunQuery($sql);
    }
    
    //*************************************************************************************
    public function Delete(){
        $sql = sprintf($this->sqlDelete, $this->getQuemPede(), $this->getQuemAprova());
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
        $rs = $this->Select(sprintf(" and quempede='%s' and quemaprova='%s' ", $this->getQuemPede(), $this->getQuemAprova() ));
        $this->setQuemPede($rs[0]['quempede']);
        $this->setQuemPede($rs[0]['quemaprova']);
        $this->setStatus($rs[0]['status']);       
        
        return $this;
    }
}
