<?php
  class abc{
    private $name;
    public function show(){
        echo $this->name;
    }
    public function __get($property){
       echo "You are trying to access private or non existing properties";
    }
    public function __set($property,$value){
        if(property_exists($this,$property))
        {
            $this->$property = $value;
        }
        else "Property doesnot exist($property)";
     }
  }

  $obj = new abc();
 $obj->name ="Himel";
 $obj->show()
?>