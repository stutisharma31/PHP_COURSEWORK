<?php
$test=2;
if ($test>=1) 
{
  trigger_error("Value must be 1 or below");
}
?>

<?php
 function calcDivision($dividend, $divisor)
{ 
return($dividend / $divisor); 
} 
echo calcDivision(10, 0); 
?>
