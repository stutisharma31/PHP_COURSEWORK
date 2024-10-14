<?php
class MyExample
{
  function __construct()
  {
    print "In constructor<br>";
  }
  function __destruct()
  {
    print "Destroying".__CLASS__."<br>";
  }
}
$obj=new MyExample();
?>