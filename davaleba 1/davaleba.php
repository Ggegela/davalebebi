<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "USERS";
    $sql = "SELECT * FROM USERS";
    $conn = new mysqli($servername,$username,$password,$dbname);
?>