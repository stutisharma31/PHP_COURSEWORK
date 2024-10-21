<?php
function divide($num, $den) {
    if ($den == 0) {
        throw new Exception("Division by zero is not allowed");
    }
    return $num / $den;
}

try {
    $result = divide(10, 0);
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>


