<?php

namespace Test\Unit\Payments;

use Payment\CieloService;
use PHPUnit\Framework\TestCase;

class CieloServiceTest extends TestCase
{
    /**
     * @test
     */
    public function test_payment()
    {
        $cieloService = new CieloService();
        $result = $cieloService->payment(1000);
        $this->assertIsNumeric($result);
    }

};