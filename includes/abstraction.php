<?php

abstract class parentclass{
	
  abstract protected function calc($a,$b);
}

class childClass extends parentclass{
	public function calc($a,$b)
	{
		echo $a*$b;
	}
}

$obj = new childClass();
$obj->calc(5,6);

?>
