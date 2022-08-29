<?php
        $nama = ($_POST["nama"]);
        $nim = (int)($_POST["nim"]);
        $tinggi = (float)$_POST["tinggi"];
        $berat = (float)$_POST["berat"];

        echo "Nama = " . $nama. "<br>";
        echo "Nim = " . $nim . "<br>";
        echo "tinggi = " . $tinggi . "<br>";
        echo "berat = " . $berat . "<br>";
        ?>