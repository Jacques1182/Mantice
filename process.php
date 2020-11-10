<?php

$mysqli = new mysqli('localhost', 'root', '', 'Mantice') or die (mysqli_error($mysqli));


if (isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $mysqli->query("INSERT INTO users (name, password) VALUES('$name', '$password')") or 
            die($mysqli->error);
}
