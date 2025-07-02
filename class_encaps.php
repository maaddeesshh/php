<?php
class BankAccount {
    private float $balance = 0;//encapsulation

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): void {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(1000);
// $account->balance = 5000; ❌ Not allowed (private)
$account->withdraw(300);

echo $account->getBalance(); // ✅ Allowed: 700
