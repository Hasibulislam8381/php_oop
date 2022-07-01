<?php
  class student{
    private static function cal($name){
        echo " Hi...$name";
    }
    public static function __callstatic($method,$args){
       if(method_exists(__class__,$method)){
        call_user_func_array([__CLASS__,$method],$args);
       }else{
        echo "Method does not exist:$method";
       }
    }
  }

  student::cal("Himel");

?>