<?php

namespace Payment;

use Application\Contracts\PaymentContract;

class PaymentService
{
    /**
     * @var PaymentContract
     */
    protected $payment;

    /**
     * @param PaymentContract $payment
     */
    public function injectPayment(PaymentContract $payment) {
        $this->payment = $payment;
    }

    /**
     * @param $value
     * @return float|int
     */
    public function payment($value)
    {
        return $this->payment->payment($value);
    }
    
}