<?php
function mostFrequentElement($array) {
  //count function
    $count = array_count_values($array);
    $mostFrequent = null;
    $maxCount = 0;
  //loop through count as element 
    foreach ($count as $element => $frequency) {
        if ($frequency > $maxCount) {
            $maxCount = $frequency; 
            $mostFrequent = $element; 
        }
    }
    return $mostFrequent; 
}
$array = [1, 2, 3, 1, 2, 1, 3, 3, 3, 1, 2];
echo mostFrequentElement($array); 
?>  
