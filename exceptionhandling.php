<?php
try
{
    $firstValue = 10;
    $secondValue = 0;
    if ($secondValue == 0) throw new Exception("Divide by Zero exception occurred");
    $result = $firstValue / $secondValue;
    printf("Result is : %d", $result);
}
catch(Exception $e)
{
    printf("Exception: %s", $e->getMessage());
}
?>
