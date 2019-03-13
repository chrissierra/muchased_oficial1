<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include '../vendor/autoload.php';
$bag = CertificationBagFactory::integrationWebpayNormal();

$plus = TransbankServiceFactory::normal($bag);

$response = $plus->getTransactionResult();
//If everything goes well (check stock, check amount, etc) you can call acknowledgeTransaction to accept the payment. Otherwise, the transaction is reverted in 30 seconds.
//Si todo está bien, peudes llamar a acknowledgeTransaction. Si no se llama a este método, la transaccion se reversará en 30 segundos.
$plus->acknowledgeTransaction();

//Redirect back to Webpay Flow and then to the thanks page
return RedirectorHelper::redirectBackNormal($response->urlRedirection);