<?php

class Orang{
    protected $nama;

    // construktor
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //method
    public function ucapSalam(){
        echo "Hallo nama saya " . $this->nama;
    }
}