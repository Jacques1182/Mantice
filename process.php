<?php

$mysqli = new mysqli('localhost', 'root', '', 'Mantice') or die(mysqli_error($mysqli));


if (isset($_POST['SignUp'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $Cellnumber = $_POST['Cellnumber'];
    $Email = $_POST['Email'];
    $mysqli->query("INSERT INTO users (name, password, Cellnumber, Email) VALUES('$name', '$password','$Cellnumber','$Email')") or
            die($mysqli->error);
}
if (isset($_POST['login'])) {
    $Username = $_POST ['Username'];
    $password = $_POST['password'];
    $mysqli->query("SELECT * FROM users WHERE Username ='$Username' AND password = '$password'") or
            die($mysqli->error);
}
