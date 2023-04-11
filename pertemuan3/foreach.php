<?php

    // perulangan foreach itu adalah perulangan berbentuk array
    $buah   = ['salak', 'duku', 'rambutan', 'apel'];
    echo "<ol>";

        foreach($buah as $b) {
            echo "<li> ".$b."</li><br>";
        }

    echo "</ol>";