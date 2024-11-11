<?php

require_once "orag.php";

class orangInggris extends orang{

    //override
    public function ucapsalam(){
        echo "hallo my name is" . $this->nama . "<br>";
    }
}