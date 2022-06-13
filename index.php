<?php
interface Car{
    public function Myname();
}

class Toyota implements Car{
    public function Myname(){
        echo 'Toyota <br>';
    }
}

class BMW implements Car{
    public function Myname(){
        echo 'BMW';
    }
}

$bmw=new BMW();
$toyota=new Toyota();
$toyota->Myname();
$bmw->Myname();

?>