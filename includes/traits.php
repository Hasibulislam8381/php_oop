<?php 
trait one{
	public function cal()
	{
		echo "This is trait";
	}
}

class A{
	use one;
}
class B{
	use one;
}

$obj = new A();

$obj->cal();

echo "<br>";
$obj1 = new B();

$obj1->cal();


?>