<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include 'vendor/autoload.php';

//Get a certificationBag with certificates and private key of WebpayNormal for integration environment.
$bag = CertificationBagFactory::production();

$plus = TransbankServiceFactory::normal($bag);

//For normal transactions, you can just add one TransactionDetail
//Para transacciones normales, solo se puede añadir una linea de detalle de transacción.
$plus->addTransactionDetail(990, 'Orden824201'); //Amount and BuyOrder

$response = $plus->initTransaction('http://localhost/transbank/response.php', 'http://localhost/transbank/gracias.php');

echo  $response->token;

echo RedirectorHelper::redirectHTML($response->url, $response->token);
