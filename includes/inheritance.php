<?php
 
 class employee
 {
 	public $f_name = "Hasibul Islam";
 	protected $l_name = "Himel";
 	protected $salary = "20000";
 }

 class salary extends employee
 {
 	public function bonus()
 	{
 		$a = $this->f_name;
 		$b = $this->salary;
 		$c = $b+2000;
 		return $a ."\n". $c;
 	}
 }

 $obj = new salary();
 echo $obj->bonus();

 $obj2 = new employee();
 echo $obj2->f_name;



?>