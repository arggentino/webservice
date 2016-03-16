<?php

require_once('Class/Cliente.php');   

$cliente = new Cliente();

echo $cliente->getData($_REQUEST['numero1'],$_REQUEST['numero2']);