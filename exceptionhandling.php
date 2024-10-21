<?php
try
{
    $p = 10;
    $q = 0;
    if ($q == 0) 
    throw new Exception("Division by zero is not allowed");
    $a = $p / $q;
    printf("Result is : %d", $a);
}
catch(Exception $e)
{
    printf("Error: %s", $e->getMessage());
}
?>
