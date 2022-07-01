<?php
interface parent1{
      
      function sum($a,$b);
}

interface parent2{
	function sub($c,$d);
}

class child implements parent1,parent2{

  public function sum($a,$b)
  {
  	echo $a+$b;
  }
  public function sub($c,$d)
  {
  	echo $c-$d;
  }
}

$obj1 = new child();
$obj1->sum(12,4);

echo "<br>";


$obj1->sub(12,45);

?>