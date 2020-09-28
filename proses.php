<?php
    $angka1 = $_GET['angka1'];
    $angka2 = $_GET['angka2'];
    $operasi = $_GET['operasi'];

    echo "Bilangan 1 adalah $angka1 <br>";
    echo "Bilangan 2 adalah $angka2 <br>";

    if ($operasi == 'tambah') {
        $hasil = $angka1 + $angka2;
        echo "Hasil pertambahan adalah $hasil";
    }
    
    elseif ($operasi == 'kurang') {
        $hasil = $angka1 - $angka2;
        echo "Hasil pengurangan adalah $hasil";
    }
    
    elseif ($operasi == 'bagi') {
        $hasil = $angka1 / $angka2;
        echo "Hasil perkalian adalah $hasil";
    }
    
    elseif ($operasi == 'kali') {
        $hasil = $angka1  * $angka2;
        echo "Hasil pembagian adalah $hasil";
    }
    ?>
