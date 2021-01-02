<?php
include __DIR__ . '/../vendor/autoload.php';

use Payment\PaymentService;
use Payment\PagSeguroService;
use Payment\CieloService;

$paymentService = new PaymentService();

$paymentService->injectPayment(new PagSeguroService());
echo "PagSeguro {$paymentService->payment(300)} ";

$paymentService->injectPayment(new CieloService());
echo "Cielo {$paymentService->payment(300)}";