<?php
class SwapNumbers {
    private $num1;
    private $num2;

    // Parameterized Constructor
    public function __construct($a, $b) {
        $this->num1 = $a;
        $this->num2 = $b;
    }

    // Function to swap numbers without using a third variable
    public function swap() {
        echo "Before Swap: num1 = $this->num1, num2 = $this->num2\n";
        $this->num1 = $this->num1 + $this->num2;
        $this->num2 = $this->num1 - $this->num2;
        $this->num1 = $this->num1 - $this->num2;
        echo "After Swap: num1 = $this->num1, num2 = $this->num2\n";
    }
}

// Example usage
$swap = new SwapNumbers(10, 20);
$swap->swap();
?>
