<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hi>Konsep Pewarisan</h1>
    <div class="">
        <?php
        include "OrangBiasa.php";
        include "OrangInggris.php";
        include "Mawasiswa.php";

        $jamet = new OrangBiasa("jamet");
        $jamet->ucapSalam();
        echo "<br>";

        $Ena = new OrangInggris("Ena");
        $Ena->ucapSalam(); //override
        echo "<br>";

        $Eka = new Mahasiswa("Eka");
        $Eka->ucapSalam();
        echo "<br>";
        $Eka->setNim("701230069");
        $Eka->setProdi("Sistem informasi");

        $nilaiEka = new Nilai();
        $nilaiEka->setTugas(90);
        $nilaiEka->setTugas(80);
        $nilaiEka->setUts(90);
        $nilaiEka->setUas(95);

        $Eka->setNilai($nilaiEka);
        $Eka->tampilkanData();
    ?>
    </div>
</body>
</html>