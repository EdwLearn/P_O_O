<?php 
class Account{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name, $document, $email, $password) {
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
        $this->password = $password;
    }
    public function printDataAccount(){
        echo "Name: $this->name Document: $this->document E-mail $this->email Password: $this->password";
        echo "<br>";
    }
}
?>