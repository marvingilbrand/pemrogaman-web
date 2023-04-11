<?php

    // multidimensi array
    $mahasiswa = array(
        array("Srik", 18, "INSTIKI"),
        array("Sudi", 18, "INSTIKI"),
        array("Anjas", 19, "INSTIKI"),
        array("Apri", 20, "INSTIKI")
    );

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($mahasiswa);
