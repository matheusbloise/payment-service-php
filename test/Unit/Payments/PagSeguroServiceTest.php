<?php

namespace Test\Unit\Payments;

use Payment\PagSeguroService;
use Payment\PaymentService;
use PHPUnit\Framework\TestCase;

class PagSeguroServiceTest extends TestCase
{

    public function testPayment()
    {
        $mockPagSeguro = $this->createMock(PagSeguroService::class);

        $mockPagSeguro
            ->expects(self::once())
            ->method('payment')
            ->with(1250)
            ->willReturn(1281.875);

        $paymentService = new PaymentService();
        $paymentService->injectPayment($mockPagSeguro);
        $result = $paymentService->payment(1250);

        self::assertIsFloat($result);
        self::assertEquals(1281.875, $result);
    }

}