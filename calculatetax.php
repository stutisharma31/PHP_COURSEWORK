<?php
require 'employeedetails.php';
function calculateTotalTax($employees) {
    $total_tax = 0;
    foreach ($employees as $employee) {
        $tax = ($employee["salary"] * $employee["tax_percentage"]) / 100;
        $total_tax += $tax;
    }
    return $total_tax;
}
$total_tax = calculateTotalTax($employee_details);
echo "Total tax is: ₹" . number_format($total_tax, 2);
?>
