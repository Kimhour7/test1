<?php
    $con = mysqli_connect('localhost', 'root', '', 'cambodia');
    if(mysqli_connect_error()){
        echo "Connection Error." .mysqli_connect_error();
    }
?>