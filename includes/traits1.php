<?php 
trait hello
{
	public function hlw()
	{
		echo "Hello to our website\n";
	}
}

trait bye
{
	public function bye()
	{
		echo "Bye bye";
	}
}

class A{
	use hello;
	use bye;
}

$obj = new A;
$obj->hlw();
$obj->bye();
?>