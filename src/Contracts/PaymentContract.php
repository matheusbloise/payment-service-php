<?php

namespace Application\Contracts;

interface PaymentContract
{
    /**
     * @param $value
     * @return float|int
     */
    public function payment($value);
}