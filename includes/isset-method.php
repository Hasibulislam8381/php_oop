<?php

class abc{
    public $course;
    private $fname;
    private $lname;

    public function student($fname,$lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function __isset($property){
        echo isset($this->$property);
    }
}
$obj  = new abc();
$obj ->student("Hasibul","Islam");
echo isset($obj->fname);

?>