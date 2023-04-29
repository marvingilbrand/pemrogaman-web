



<?php
     include_once("konfigurasi01.php");

    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];


        // echo " DEBUG: username: " .$user;
        // echo " PASSWORD:  password: " .$pwd;

        $sql = "SELECT * FROM tbuser WHERE username='".$user."';";
        $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke dbms");
        $hasil = mysqli_query($cnn, $sql);
        $jdata =  mysqli_num_rows($hasil);

        $h =  mysqli_fetch_assoc($hasil);

        //echo " DEBUG:<br>nama: ". $h["nama"];
        if(md5($pwd) == $h["passkey"]){
            echo "DEBUG: password sama";
        }else{
            echo "Akses ditolak";

        }
        
       
        } 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
</head>
<body>

<form action="formlogin.php" method="POST">
    <div>
        User name 
        <input type="text" name="txUSER">
    </div>
    <div>
        Password
        <input type="text" name="txPASS"> 
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
    
</body>
</html>