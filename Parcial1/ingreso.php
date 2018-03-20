<?php

session_start();

$mysqli = new mysqli('localhost','root','uniminuto','parcial1') or die("Problemas con el servidor");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$user =$_POST['user'];
$pass =$_POST['pass'];

$res =$mysqli->query("SELECT Usuario, Pass FROM usuario WHERE Usuario='$user' AND Pass='$pass'");

$_SESSION['username']=$user;

if ($res->num_rows > 0) {
    // output data of each row
    header('Location: Dashboard.php');
} else {
     print_r("Usuario o clave incorrecta");
    header('Location: index.php');

}

$mysqli->close();



?>