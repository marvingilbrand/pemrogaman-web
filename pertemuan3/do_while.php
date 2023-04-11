<?php

    // perulangan do-while itu mengulang statement awal lalu mengecek statement
    $awal   = 0;
    $akhir  = 10;
    
    do {
        echo "Mahasiswa ke-".$awal."<br>";
        $awal++;
    } while($awal < $akhir);