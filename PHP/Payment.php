<?php
class Payment {
    public $id;

    public fuction __construct($id) {
        $this->id = $id;
    }

    public function printDataPayment(){
        echo "ID Payment: " . $this->id;
    }
}

?>