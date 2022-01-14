<?php
require_once("Account.php");
require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Payment.php");
require_once("Efectivo.php");
require_once("PayPal.php");
require_once("Targeta.php");
require_once("User.php");


$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456", "Andres123@gmail.com", "qwerrk190"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765", "Andre@igi.com", "sidjdisvk"), "Dodge", "Attitude");
$uberPool->printDataCar();

$efectivo = new Efectivo("Efectivo");
$efectivo->printDataPayment();

$payPal = new PayPal("PAYPAL","edward@gmail.com","Bancolombia");
$payPal->printDataPayment();

$targeta = new Targeta("Targeta","250XXXXXXXX","12/24", "234");
$targeta->printDataPayment();

$user = new User("Mario Villa", "SDFG676", "mario@gmail.com", "457890");
$user->printDataAccount();


?>
