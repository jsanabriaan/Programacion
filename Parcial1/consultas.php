<?php
session_start();

$mysqli = new mysqli('localhost','root','uniminuto','parcial1') or die("Problemas con el servidor");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$user=$_SESSION['username'];

$res =$mysqli->query("SELECT CTM1,CTM2,CTM3 FROM usuario WHERE Usuario='$user'");


if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
        $ctm =$row['CTM1'];
        $ctm2 =$row['CTM2'];
        $ctm3 =$row['CTM3'];
      

        
    }
} else {
    echo "0 results";
}

$consulta ="https://api.hitbtc.com/api/2/public/currency/";
$consulta .=$ctm;

$consulta1 ="https://api.hitbtc.com/api/2/public/ticker/";
$consulta1 .=$ctm."USD";

$consulta2 ="https://api.hitbtc.com/api/2/public/currency/";
$consulta2 .=$ctm2;

$consulta3 ="https://api.hitbtc.com/api/2/public/ticker/";
$consulta3 .=$ctm2."USD";

$consulta4 ="https://api.hitbtc.com/api/2/public/currency/";
$consulta4 .=$ctm3;

$consulta5 ="https://api.hitbtc.com/api/2/public/ticker/";
$consulta5 .=$ctm3."USD";


$data = json_decode( file_get_contents($consulta), true );

$data1 = json_decode( file_get_contents($consulta1), true );

$data2 = json_decode( file_get_contents($consulta2), true );

$data3 = json_decode( file_get_contents($consulta3), true );

$data4 = json_decode( file_get_contents($consulta4), true );

$data5 = json_decode( file_get_contents($consulta5), true );

$mysqli->close();



?>