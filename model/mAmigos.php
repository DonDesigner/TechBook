<?php
require_once 'db/Connection.php';

/**
 * Description of mAmigos
 *
 * @author Diego
 */
class mAmigos extends db{
    private $quempede;
    private $quemaprova;
    private $status;
    
    function getQuemPede() {
        return $this->quempede;
    }

    function getQuemAprova() {
        return $this->quemaprova;
    }

    function getStatus() {
        return $this->status;
    }

    function setQuemPede($quempede) {
        $this->quempede = $quempede;
    }

    function setQuemAprova($quemaprova) {
        $this->quemaprova = $quemaprova;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
    
}
