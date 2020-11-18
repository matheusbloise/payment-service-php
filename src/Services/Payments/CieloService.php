<?php

namespace Payment;

use Application\Contracts\PaymentContract;

class CieloService implements PaymentContract
{
    const RATE = 1.77;

    /**
     * @param $value
     * @return float|int
     */
    public function payment($value)
    {
        return $value + $value * (self::RATE / 100);
    }
}