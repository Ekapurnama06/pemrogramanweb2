<?php

include "Orang.php";

class OrangInggris extends Orang{

    // Override
    public function ucapSalam()
    {
        "Hello My name is " . $this->nama;
    }
}