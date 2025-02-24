<?php
    $mysqli=mysqli_connect('localhost','root','','db_aplikasi_todolist');
    mysqli_select_db($mysqli,'db_aplikasi_todolist') or die("database tidak ditemukan");
?> 