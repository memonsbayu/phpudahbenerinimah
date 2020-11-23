<?php

define("HOST",'localhost'); //namahost
define("user",'admin');     //nama user
define('password', 'root'); //pasworduser
define('db', 'phpsiswa'); //nama database

$con = mysqli_connect(HOST,user,password,db);

if(!$con){
    print ("gagal terhubung ke database");
}

?>
