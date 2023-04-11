<?php

    $cars[0] = "BMW";
    $cars[1] = "Ferari";
    $cars[2] = "Civic";
    $cars[3] = "Supra";

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($cars);


    // associative array
    $mahasiswa  = [
                    "Nama"=>"Kadek Sri Dwi Wijayanti", 
                    "Prodi"=>"Teknik Informatika", 
                    "Matkul"=>"Pemrograman Web"
                  ];
    foreach($mahasiswa as $mhs => $value) {
        echo $mhs." : ". $value. "<br>";
    }
