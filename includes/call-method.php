<?php

class student{
    private $fname;
    private $lname;

    private function setName($first_name,$last_name){
        $this->fname = $first_name;
        $this->lname = $last_name;
    }
    public function __call($method,$arguments)
    {
        echo "This a Private or non existing method";
        

    }
}

$obj = new student();
$obj->setName("Hanif","Laskar");

?>
