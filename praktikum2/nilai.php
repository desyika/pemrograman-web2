<?php
// nilai.php

class nilai{
    private $tugas =0;
    private$uts = 0;
    private$uas = 0;

    //setter
    public function setTugas ($tugas){
        if($tugas <=100 && $tugas >=0){
            $tis->tugas =$tugas;
        }else{
            $tis->tugas =0;
        }
    }

    public function setUts($uts){
        if($uts <=100 && $uts >=0){
            $this->uts = $uts;
        }else{
            $tis-.uts =0;

        }
    }

    public function setUas ($uas){
        if (uas <=100 && $uas <=0){
            $this->uas = $uts;
        }else{
            $tis-.uas =0;
        }
    }

    //getter
    public function getTugas(){
        return $THIS->tugas;

    }

    public function getUts(){
        return $THIS->uts;

    }

    public function getUas(){
        return $THIS->uas;
    }

    //method
    public function hitungTotal(){
        $nilai total 
    }
}