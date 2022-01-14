<?php
require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->printDataCar();

$payment = new Payment("PAYMENT");
$payment->printDataPayment();

$efectivo = new Efectivo("Efectivo");
$efectivo->printDataPayment();

$payPal = new PayPal("PAYPAL","edward@gmail.com","Bancolombia");
$payPal->printDataPayment();

$targeta = new Targeta("Targeta","250XXXXXXXX","12/24", "234");
$targeta->printDataPayment();


?>
