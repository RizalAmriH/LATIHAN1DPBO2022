<?php

class Mahasiswa{
    private $nama;
    private $nim;
    private $genders;
    private $prodi;
    private $semester;

    public function __construct($nama = 0, $nim = 0, $genders = 0, $prodi = 0, $semester = 0) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->genders = $genders;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setGenders($genders){
        $this->genders = $genders;
    }
    public function getGenders(){
        return $this->genders;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function getProdi(){
        return $this->prodi;
    }
    public function setSemester($semester){
        $this->semester = $semester;
    }

    public function getSemester(){
        return $this->semester;
    }
}

?>