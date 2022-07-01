<?php 
trait hi{
	public function hello()
	{
		echo "Welcome";
	}
}

class a{
	public function hello()
	{
		echo "Hello Everyone";
	}
}

class child extends a{
	use hi;
	public function hello(){
		echo "Hello All";

	}
}

$obj = new child();
$obj->hello();

?>