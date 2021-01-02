<?php

namespace Test\Unit\Payments;

use Payment\PagSeguroService;
use PHPUnit\Framework\TestCase;

class PagSeguroServiceTest extends TestCase
{
    /**
     * @test
     */
    public function test_payment()
    {
        $pagSeguroService = new PagSeguroService();
        $result = $pagSeguroService->payment(1250);
        $this->assertIsNumeric($result);
    }

};