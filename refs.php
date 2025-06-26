<?php
$client = "John";
$Customer = &$client;

echo $client . "\n";
echo $Customer;

$Customer = "Paul";

echo $client . "\n";
echo $Customer;

$client = "Peter";

echo $client . "\n";
echo $Customer;

