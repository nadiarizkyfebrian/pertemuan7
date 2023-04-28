<?php
    include("konfigurasi.php");
    include("fungsiuser.php");
    $psn = "";
    if(isset($_POST["tNAMA"])){
        if($_POST["tPASS1"] == $_POST["tPASS2"]){
            $nama = $_POST["tNAMA"];
            $email = $_POST["tEMAIL"];
            $user = $_POST["tUSER"];
            $pass = $_POST["tPASS1"];
            $psn = registeruser($nama, $email, $user, $pass);
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    
    <form method="POST" action="registrasi.php">
        
        <div>
            Nama Lengkap
            <input type="text" name="tNAMA">
        </div>

        <div>
            Email
            <input type="email" name="tEMAIL">
        </div>

        <div>
            User Name
            <input type="text" name="tUSER">
        </div>

        <div>
            Password
            <input type="password" name="tPASS1">
        </div>

        <div>
            Verifikasi Password
            <input type="password" name="tPASS2">
        </div>
        <div>
            <button type="submit"> Registrasi </button>
        </div>
    </form>

</body>
</html>