<?php

$mysqli = new mysqli('localhost', 'root', '', 'Mantice') or die (mysqli_error($mysqli));


if (isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $Cellnumber = $_POST['Cellnumber'];
    $Email = $_POST['Email'];
    $mysqli->query("INSERT INTO users (name, password, Cellnumber, Email) VALUES('$name', '$password','$Cellnumber','$Email')") or 
            die($mysqli->error);
}
