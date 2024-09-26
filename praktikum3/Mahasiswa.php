<?php

include  "Orang.php";

class Mahasiswa extends Orang{
    protected string$nim;
    protected string$prodi;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setprodi($prodi){
        $this->prodi = $prodi;
    }

    public function setNilai($Nilai) {
        $this->nilai = $Nilai; 
    }


    public function tampilkanData(){
        echo "Nama : " . $this->nama;
        echo "NIM : " . $this->nim;
        echo "prodi : " . $this->prodi;
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUTS() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUAS() . "<br>";
    }
   
}