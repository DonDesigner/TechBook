<?php

class cfTrabalhos {
    

    public function dateToBR($dataAmericana){
        //2015-02-21 ano-mes-dia para 21/02/2015
        $d = explode('-', $dataAmericana);
        $ok = $d[2] . '/' . $d[1] . '/'. $d[0];
        return $ok;                
    }
    
    
    public function dateToUS($dataBrasil) {
        //21/02/2015 dia/mes/ano para 2015-02-21
        $d = explode('/', $dataBrasil);
        $ok = $d[2].'-'.$d[1].'-'.$d[0];
        return $ok;
    }
    
  
    public function dateTimeToBR($data_hora_americana) {
        $d = explode(' ', $data_hora_americana);
        $ok = $this->dateToBR($d[0]) . ' ' . $d[1];
        return $ok;
    }
    
   
    public  function dateTimeToUS($data_hora_brasil) {
        $d = explode(' ', $data_hora_brasil);
        $ok = $this->dateToUS($d[0]) . ' ' . $d[1];
        return $ok;
    }
}
