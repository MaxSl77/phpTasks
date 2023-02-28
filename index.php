<?php
// easy level 1 (try to find sum of keys values and divide it by the sum of the values)
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sum = array_sum(array_keys($arr)) / array_sum(array_values($arr));
echo $sum;
print "</br>";

// easy level 2 (write keys of general array into the first array and values of general array into the second array)
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arr_keys = [];
$arr_values = [];
foreach($arr as $key => $value) {
    array_push($arr_keys, $key);
    array_push($arr_values, $value);
}
print_r($arr_keys);
print_r($arr_values);
print "</br>";

// hard level 3 (Create an array of n (random number) elements - write an algorithm that would rearrange the elements 
// of the array in reverse order - i.e. the first element would move to the last one, 
// the second element would move to the penultimate one, and so on.)
$arr_rand = range(1, 11);
for ($i = count($arr_rand) - 1; $i >= 0; $i--) {
    echo $arr_rand[$i].' ';
}
?>