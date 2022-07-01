<?php

class abc{
    public $course = "php";
    private $fname;
    private $lname;

    public function sum($first_name,$last_name){
        $this->fname = $first_name;
        $this->lname = $last_name;
    }
    public function __sleep(){
        return array("course","fname");

    }
}

$obj = new abc();
$obj->sum("Hasibul","Islam");
$srl=serialize($obj);
echo $srl;

?>