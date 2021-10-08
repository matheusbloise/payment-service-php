<?php

namespace Test\Unit\Payments;

use Payment\CieloService;
use Payment\PaymentService;
use PHPUnit\Framework\TestCase;

class CieloServiceTest extends TestCase
{

    public function testPayment()
    {
        $mockCielo = $this->createMock(CieloService::class);

        $mockCielo
            ->expects(self::once())
            ->method('payment')
            ->with(self::equalTo(1000))
            ->willReturn(1017.7);

        $paymentService = new PaymentService();
        $paymentService->injectPayment($mockCielo);
        $result = $paymentService->payment(1000);

        self::assertIsFloat($result);
        self::assertGreaterThan(1000, $result);
        self::assertEquals(1017.7, $result);
    }

}