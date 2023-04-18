<?php
global $con;
$con = new mysqli("localhost", "root", "Mspace54#", "dbMSpace");

if (mysqli_connect_errno()) {

    $error = mysqli_connect_error();

    // echo '<script>alert("Falied to connect to database!")</script>';

    echo "<script type='text/javascript'>alert('Falied to connect to database! -- ({$error})');</script>";


    // print_r($error);

}

?>