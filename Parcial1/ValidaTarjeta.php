<?php 
           $tipo = $_POST['tipo']; 
           $numero = $_POST['numerot']; 
           $client = new SoapClient("http://www.webservicex.net/CreditCard.asmx?WSDL");
           $parametro =array("cardType"=>$tipo, "cardNumber"=>$numero);
             
            $result = $client->ValidateCardNumber($parametro);

            $xml = $result->ValidateCardNumberResult;

            
            


           
    print_r($xml);

    
    


            ?>