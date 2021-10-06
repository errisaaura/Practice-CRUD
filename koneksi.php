<?php

$conn = mysqli_connect('127.0.0.1','root','','kelas');

if(mysqli_connect_errno()){
    printf("Connection failed: ".mysqli_connect_errno());
    exit();
}
//ini untuk koneksinya
?>