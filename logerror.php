<?php
function calDivision($dividend, $divisor)
{
    if($divisor == 0)
    {
        trigger_error("calDivision(): The divisor cannot be zero", E_USER_WARNING);
        return false;
    }
    else
    {
        return ($dividend / $divisor);
    }
}
function customError($errno, $errstr, $errfile, $errline)
{
    $logDir = 'logs';
    if (!file_exists($logDir)) {
        mkdir($logDir, 0777, true); 
    }
    $message = date("Y-m-d H:i:s - ");
    $message .= "Error: [".$errno."], ".$errstr." in ".$errfile." on line ".$errline.", ";
    error_log($message, 3, "logs/app_errors.log");
    die("There was a problem, please try again.");
}
set_error_handler("customError");
echo calDivision(10, 0);
echo "This will never be printed";
?>
