<?php
class abc{

    public function __toString()
    {
        return "Cant print a objrct as string:".get_class($this);
    }

}

$obj = new abc();
echo $obj;

?>