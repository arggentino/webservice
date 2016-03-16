<?php

require_once('./nusoap/lib/nusoap.php');   

class Cliente{

	 private $_wsdlUrl = "http://www.monstercreativo.com/webservices/servicio.php?wsdl";

	 public function __construct(){

     }

     public function getData($numero1,$numero2){

		$client = new nusoap_client($this->_wsdlUrl, true);
		$error  = $client->getError();
		 
		if($error){

		    echo "<h2>Error</h2><pre>".$error."</pre>";
		}
		 
		$result = $client->call("Suma.calcularSuma", array("numero1" => $numero1,"numero2" => $numero2));
		 
		if($client->fault){

		    echo "<h2>Fault</h2><pre>";
		    print_r($result);
		    echo "</pre>";

		}else{

	   		$error = $client->getError();

		    if($error){

		        echo "<h2>Error</h2><pre>" . $error . "</pre>";

		    }else{

		        return $result;
		    }
		}             
 	}
}