<?php 
trait one{

	private function sum(){
		echo "Yes! tarit is SUccessfull";
	}
}

class a{
   use one{
   one::sum as public;
   	}
}
$obj = new a();
$obj->sum();

?>