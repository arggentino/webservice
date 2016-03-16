<?php

require_once('nusoap/lib/nusoap.php');   
require_once "Class/Suma.php";

$namespace = "http://localhost/webservices/servicio.php";
$wsdlUrl = "http://localhost/webservices/servicio.php?wsdl";


$server = new soap_server();
$server->configureWSDL("Calcular Suma", $namespace, $wsdlUrl);
$server->wsdl->schemaTargetNamespace = $namespace;

$server->register("Suma.calcularSuma"                       
                 ,array('numero1'=>'xsd:int','numero2'=>'xsd:int')
                 ,array('return'=>'xsd:int')
                 ,$namespace,false
                 ,'rpc'
                 ,'encoded'
                 ,'Obtener suma' 
                                );
        
$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) 
                ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
                  
$server->service($POST_DATA);                