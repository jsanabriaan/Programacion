<?php
$mysqli = new mysqli('localhost','root','uniminuto','parcial1') or die("Problemas con el servidor");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$pais =$_POST['pais'];
$email =$_POST['email'];
$ttarjeta =$_POST['tarjeta'];
$ntarjeta =$_POST['ntarjeta'];
$CountryCode ="";
$CurrencyCode ="";
$Currency ="";
$code="";
$GMT="";
$usuario =$_POST['user'];
$pass =$_POST['pass'];

$client1 = new SoapClient("http://www.webservicex.net/country.asmx?WSDL");
           $parametro =array("CountryName"=>$pais);
             
            $result1 = $client1->GetCurrencyByCountry($parametro);

            $xml1 = $result1->GetCurrencyByCountryResult;

            $xml1 = simplexml_load_string($xml1);


            foreach ($xml1->Table as $table1) {
        $CountryCode .="$table1->CountryCode";
        $CurrencyCode .="$table1->CurrencyCode";
        $Currency .="$table1->Currency";
        break;
        
    }

$result2 = $client1->GetISD($parametro);
		$xml2 = $result2->GetISDResult;
		$xml2 = simplexml_load_string($xml2);

 		foreach ($xml2->Table as $table2) {
        $code .="$table2->code";
        break;
        
    }

    $result3 = $client1->GetGMTbyCountry($parametro);
		$xml3 = $result3->GetGMTbyCountryResult;
		$xml3 = simplexml_load_string($xml3);

 		foreach ($xml3->Table as $table3) {
        $GMT .="$table3->GMT";
        break;
        
    }



$res ="INSERT INTO usuario(Nombre,Apellido,Pais,Email,Tipo_Tarjeta,Num_tarjeta,CountryCode,CurrencyCode,Currency,Code,GMT,Usuario,Pass,CTM1,CTM2,CTM3) VALUES ('$nombre','$apellido','$pais','$email','$ttarjeta','$ntarjeta','$CountryCode','$CurrencyCode','$Currency','$code','$GMT','$usuario','$pass','BTC','ETH','DASH')";

if ($mysqli->query($res) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $res . "<br>" . $mysqli->error;
}

$mysqli->close();

 header('Location: index.php');

?>