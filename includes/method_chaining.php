<?php
class abc{

    public function first()
    {
        echo "This is the first function<br>";
        return $this;
    }
    public function second(){
        echo "This is the second function<br>";
        return $this;
    }
    public function third(){
        echo "This is the third function";
        return $this;
    }

}

$obj1 = new abc();
$obj1->first()->second()->third();

?>