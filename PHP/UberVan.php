<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAcceted;
    public $seatsMaterial;

    public fuction __construct($license,$driver,$typeCarAcceted,$seatsMaterial){
        parent::__construct($license,$driver);
        $this->typeCarAcceted = $typeCarAcceted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
?>