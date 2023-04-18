<?php
global $con;
$con = new mysqli("localhost", "rot", "Mspace54#", "dbMSpace");

if (mysqli_connect_errno()) {

    $error = mysqli_connect_error();

    // echo '<script>alert("The server requested authentication method unknown to the client!")</script>';

    echo "<script type='text/javascript'>alert('{$error}');</script>";


    // print_r($error);

}


?>
<html>

</html>