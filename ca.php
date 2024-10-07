<!-- write a function mostFrequentElement that takes an array and returns the element that occurs most frequently.if there is a tie return the first element that reaches the maximum count in php -->

<?php
function mostFrequentElement($array) {
    $count = []; 
    $maxCount = 0; 
    $mostFrequent = null; 

    foreach ($array as $element) {
        if (isset($count[$element])) {
            $count[$element]++;
        } else {
            $count[$element] = 1;
        }

        if ($count[$element] > $maxCount) {
            $maxCount = $count[$element];
            $mostFrequent = $element;
        } elseif ($count[$element] == $maxCount ) {
            $mostFrequent = $element;
        }
    }

    return $mostFrequent; 
  }
// Example usage:
$array = [1, 2, 3, 1, 2, 1, 3, 3, 3, 2];
echo mostFrequentElement($array); 
?>
