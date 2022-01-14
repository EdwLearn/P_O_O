<?php
require_once('Payment.php');

class Targeta extends Payment{
    public $franquicia;
    public $fechaVencimiento;
    public $cvv;

    public function __construct($id, $franquicia, $fechaVencimiento, $cvv){
        parent::__construct($id);
        $this->franquicia = $franquicia;
        $this->fechaVencimiento = $fechaVencimiento;
        $this->cvv = $cvv;
    }
}
?>