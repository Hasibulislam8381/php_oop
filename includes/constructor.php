<?php

class person{
	public $name;
	public $age;
	public $salary;


	public function __construct($name,$age,$salary){
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
		
	}
	function show()
	{
		echo $this->name."-".$this->age."-".$this->salary."<br>";
	}		
}



$obj1 = new person("Himel",18,19000);
 $obj1->show();

$obj2 = new person("Anik",18,19000);
 $obj2->show();

 class doctor{
 	public $name;
 	public $age;
 	public $salary;


 	public function __construct($name,$age,$salary)
 	{
 		$this->name = $name;
 		$this->age = $age;
 		$this->salary = $salary;

 	}
 	public function __destruct()
 	{
 		echo "Doctor name is {$this->name} <br> Salary is {$this->salary}";

 	}
    public static $workExperience;
 	public static function setExperience($work_ex){
 		self::$workExperience=$work_ex;
 	}

}
 $p = new doctor("Ashik",18,26000);

 doctor::setExperience(34);
 echo doctor::$workExperience;


?>