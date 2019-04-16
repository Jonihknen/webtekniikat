<?php

abstract class material {

    private $material = "";

    public function isAlive(){

    }
}

class Dice extends material{
    private  $faces;
    private  $freqs = array();
    private  $tulos;
    private  $keskiarvo;
    private  $asd;
    private  $laskuri = 0;
    private  $huijjaus = 0;

    
    // Constructor
    public function __construct($faces, $huijjaus) {
        $this->faces = $faces;
        $this->huijjaus = $huijjaus;
    }

    public function average(){

        $this->asd = $this->asd + $this->tulos;
        $this->laskuri++;
        $this->keskiarvo = $this->asd/$this->laskuri;
        return $this->keskiarvo;
    }
    
    public function cast() {
        $res = rand(1,$this->faces);
        $this->freqs[$res]++;
        $randomi = rand(1,10);
        if ($this->huijjaus > 1){
            if ($randomi <= $this->huijjaus){
                $res = 6;
                $this->tulos = $res;
                return $res;
            }
            $this->tulos = $res;
            return $res;
        }
        $this->tulos = $res;
        return $res;
    }
    
    public function getFreq($eyes) {
        $freq = $this->freqs[$eyes];
        if ($freq=="")
            $freq = 0;
        return $freq;
    }
}

?>