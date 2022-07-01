<?php
class abc{
  public $data = ["name"=>"Himel","course"=>"php","fee"=>"2000"];

    public function __get($property){
       if(array_key_exists($property,$this->data)){
        return $this->data[$property];
       }
       else{
        return "This Property($property) is undefined";
       }

    }

}
$obj = new abc();
echo $obj->sum;



?>