<?php

class TimBola{
    private $namaTim;
    private $negara;
    private $tahunBerdiri;
    private $pemain = array();
   

    public function __construct($namaTim = 0, $negara = 0, $tahunBerdiri = 0, $pemain = 0) {
        $this->namaTim = $namaTim;
        $this->negara = $negara;
        $this->tahunBerdiri = $tahunBerdiri;
        $this->pemain = $pemain;
        

    }

    public function setNamaTim($namaTim) { //
        $this->namaTim = $namaTim;
    }
    public function getNamaTim(){ 
        return $this->namaTim;
    }

    public function setNegara($negara) { //
        $this->negara = $negara;
    }

    public function getNegara(){ 
        return $this->negara;
    }

    public function setTahunBerdiri($tahunBerdiri){
        $this->tahunBerdiri = $tahunBerdiri;
    }
    public function getTahunBerdiri(){
        return $this->tahunBerdiri;
    }

    public function setPemain($pemain){
        $this->pemain = $pemain;
    }

    public function getPemain(){
        return $this->pemain;
    }

    
} 




?>