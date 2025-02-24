<?php
$connection = mysqli_connect('localhost', 'root', '', 'db_aplikasi_todolist');
if(!$connection){
    die("Koneksi database gagal!".mysqli_connect_error());
}
?>