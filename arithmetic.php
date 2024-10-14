<!-- task1->Perform arithmetic operations using parametrized constructor -->


<?php
class ArithmeticOperations {
    private $num1;
    private $num2;

    // Parameterized Constructor
    public function __construct($a, $b) {
        $this->num1 = $a;
        $this->num2 = $b;
    }

    // Function to perform and display arithmetic operations
    public function performOperations() {
        echo "Addition: " . ($this->num1 + $this->num2) . "\n";
        echo "Subtraction: " . ($this->num1 - $this->num2) . "\n";
        echo "Multiplication: " . ($this->num1 * $this->num2) . "\n";
        if ($this->num2 != 0) {
            echo "Division: " . ($this->num1 / $this->num2) . "\n";
        } else {
            echo "Division: Division by zero error!\n";
        }
    }
}

// Example usage
$operation = new ArithmeticOperations(10, 5);
$operation->performOperations();
?>
