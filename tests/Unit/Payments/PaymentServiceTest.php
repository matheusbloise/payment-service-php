<?php

namespace Test\Unit\Payments;

use Application\Contracts\PaymentContract;
use Payment\CieloService;
use Payment\PagSeguroService;
use Payment\PaymentService;
use PHPUnit\Framework\TestCase;

class PaymentServiceTest extends TestCase
{
    /**
     * @test
     */
    public function test_pagseguro_inject_payment()
    {
        $paymentService = new PaymentService();
        $pagseguroServiceMock = $this->createMock(PagSeguroService::class);
        $paymentService->injectPayment($pagseguroServiceMock);

        $this->assertTrue($pagseguroServiceMock instanceof PaymentContract);
    }

    /**
     * @test
     */
    public function test_cielo_inject_payment()
    {
        $paymentService = new PaymentService();
        $cieloServiceMock = $this->createMock(CieloService::class);
        $paymentService->injectPayment($cieloServiceMock);

        $this->assertTrue($cieloServiceMock instanceof PaymentContract);
    }

    /**
     * @test
     */
    public function test_cielo_payment()
    {
        $cieloServiceMock = $this
            ->getMockBuilder(CieloService::class)
            ->enableProxyingToOriginalMethods()
            ->getMock();

        $paymentService = new PaymentService();
        $paymentService->injectPayment($cieloServiceMock);

        $result = $paymentService->payment(1250);
        $this->assertIsNumeric($result);
    }

    /**
     * @test
     */
    public function test_pagseguro_payment()
    {
        $pagseguroServiceMock = $this
            ->getMockBuilder(PagSeguroService::class)
            ->enableProxyingToOriginalMethods()
            ->getMock();

        $paymentService = new PaymentService();
        $paymentService->injectPayment($pagseguroServiceMock);

        $result = $paymentService->payment(850);
        $this->assertIsNumeric($result);
    }
}