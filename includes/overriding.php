<?php

class base{
	public $name = "This is the base class";

	public function calc($a,$b)
	{
		return $a+$b;
	}
}

class derived extends base{
	public $name = "This is the derived class";

	public function calc($a,$b)
	{
		return $a/$b;
	}
}


 $obj1 = new derived();
 echo $obj1->calc(5,2);
?>