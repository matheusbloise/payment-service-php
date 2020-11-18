<?php

namespace Payment;

use Application\Contracts\PaymentContract;

class PagSeguroService implements PaymentContract
{
    const RATE = 2.55;

    /**
     * @param $value
     * @return float|int
     */
    public function payment($value)
    {
        return $value + $value * (self::RATE / 100);
    }
}