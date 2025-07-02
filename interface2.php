<?php
interface PaymentGateway {
    public function pay(float $amount): string;
}

class Mpesa implements PaymentGateway {
    public function pay(float $amount): string {
        return "Paid $amount using Mpesa.";
    }
}

class Card implements PaymentGateway {
    public function pay(float $amount): string {
        return "Paid $amount using Credit Card.";
    }
}

function processPayment(PaymentGateway $gateway) {
    echo $gateway->pay(1000) . "\n";
}

processPayment(new Mpesa());
processPayment(new Card());
