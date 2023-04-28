<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbUser(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(100),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
    echo "SQL: ".$s_db."<br>";

    //koneksi ke DBMS MYSQL
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS, DBNAME, DBPORT);
    if($cnn){
        echo "Koneksi ke DBSM Mysql Sukses<br>";
        $hsl = mysqli_query($cnn, $s_db);
        if($hsl){
            echo "Membuat Table tbUser sukses<br>";
        }else{
            echo "Membuat Table tbUser gagal<br>";
        }
    }else{
        echo "Koneksi ke DBSM Mysql gagal<br>";
    }