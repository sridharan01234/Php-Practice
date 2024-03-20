<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions Example</title>
</head>
<body>

<?php
$input_array = ["vasanth", "sridharan", "aspire systems"];

// array_change_key_case() - Changes the case of all keys in an array
echo "<h1>array_change_key_case()</h1>";
$lowercase_keys = array_change_key_case(['Name' => 'Vasanth', 'Company' => 'Aspire Systems'], CASE_LOWER);
print_r($lowercase_keys);
echo "<br>";

// array_chunk() - Split an array into chunks
echo "<h1>array_chunk()</h1>";
$chunks = array_chunk($input_array, 2);
print_r($chunks);
echo "<br>";

// array_column() - Return the values from a single column in the input array
echo "<h1>array_column()</h1>";
$employees = [
    ['name' => 'Vasanth', 'age' => 30],
    ['name' => 'Sridharan', 'age' => 35],
    ['name' => 'John', 'age' => 40]
];
$names = array_column($employees, 'name');
print_r($names);
echo "<br>";

// array_combine() - Creates an array by using one array for keys and another for its values
echo "<h1>array_combine()</h1>";
$keys = ['Name', 'Company'];
$values = ['Vasanth', 'Aspire Systems'];
$combined = array_combine($keys, $values);
print_r($combined);
echo "<br>";

// array_count_values() - Counts the occurrences of each distinct value in an array
echo "<h1>array_count_values()</h1>";
$counts = array_count_values($input_array);
print_r($counts);
echo "<br>";

// array_diff_assoc() - Computes the difference of arrays with additional index check
echo "<h1>array_diff_assoc()</h1>";
$array1 = ['Name' => 'Vasanth', 'Company' => 'Aspire Systems'];
$array2 = ['Name' => 'Sridharan', 'Company' => 'Aspire Systems'];
$diff = array_diff_assoc($array1, $array2);
print_r($diff);
echo "<br>";

// array_diff_key() - Computes the difference of arrays using keys for comparison
echo "<h1>array_diff_key()</h1>";
$array1 = ['Name' => 'Vasanth', 'Company' => 'Aspire Systems'];
$array2 = ['Company' => 'Aspire Systems'];
$diff = array_diff_key($array1, $array2);
print_r($diff);
echo "<br>";

// array_diff_uassoc() - Computes the difference of arrays with additional index check using a callback function
// Example usage:
// $diff = array_diff_uassoc($array1, $array2, 'callback_function');

// array_diff_ukey() - Computes the difference of arrays using a callback function on the keys for comparison
// Example usage:
// $diff = array_diff_ukey($array1, $array2, 'callback_function');

// array_diff() - Computes the difference of arrays
echo "<h1>array_diff()</h1>";
$array1 = ['Vasanth', 'Sridharan', 'Aspire Systems'];
$array2 = ['Sridharan'];
$diff = array_diff($array1, $array2);
print_r($diff);
echo "<br>";

// array_fill_keys() - Fill an array with values, specifying keys
echo "<h1>array_fill_keys()</h1>";
$keys = ['Name', 'Company'];
$value = 'Aspire Systems';
$filled_array = array_fill_keys($keys, $value);
print_r($filled_array);
echo "<br>";

// array_fill() - Fill an array with values
echo "<h1>array_fill()</h1>";
$start_index = 0;
$num_elements = 3;
$value = 'Vasanth';
$filled_array = array_fill($start_index, $num_elements, $value);
print_r($filled_array);
echo "<br>";

// array_filter() - Filters elements of an array using a callback function
echo "<h1>array_filter()</h1>";
$filtered_array = array_filter($input_array, function($value) {
    return strlen($value) > 6;
});
print_r($filtered_array);
echo "<br>";

// array_flip() - Exchanges all keys with their associated values in an array
echo "<h1>array_flip()</h1>";
$flipped_array = array_flip($input_array);
print_r($flipped_array);
echo "<br>";

// array_intersect_assoc() - Computes the intersection of arrays with additional index check
// Example usage:
// $intersection = array_intersect_assoc($array1, $array2);

// array_intersect_key() - Computes the intersection of arrays using keys for comparison
// Example usage:
// $intersection = array_intersect_key($array1, $array2);

// array_intersect_uassoc() - Computes the intersection of arrays with additional index check, compares indexes by a callback function
// Example usage:
// $intersection = array_intersect_uassoc($array1, $array2, 'callback_function');

// array_intersect_ukey() - Computes the intersection of arrays using a callback function on the keys for comparison
// Example usage:
// $intersection = array_intersect_ukey($array1, $array2, 'callback_function');

// array_intersect() - Computes the intersection of arrays
echo "<h1>array_intersect()</h1>";
$array1 = ['Vasanth', 'Sridharan', 'Aspire Systems'];
$array2 = ['Sridharan'];
$intersection = array_intersect($array1, $array2);
print_r($intersection);
echo "<br>";

// array_is_list() - Checks whether a given array is a list
// Example usage:
// var_dump(array_is_list($input_array));

// array_key_exists() - Checks if the given key or index exists in the array
echo "<h1>array_key_exists()</h1>";
$key = 'Name';
if (array_key_exists($key, $flipped_array)) {
    echo "Key '$key' exists in the array";
} else {
    echo "Key '$key' does not exist in the array";
}
echo "<br>";

// array_key_first() - Gets the first key of an array
// Example usage:
// echo array_key_first($input_array);

// array_key_last() - Gets the last key of an array
// Example usage:
// echo array_key_last($input_array);

// array_keys() - Return all the keys or a subset of the keys of an array
echo "<h1>array_keys()</h1>";
$keys = array_keys($flipped_array);
print_r($keys);
echo "<br>";

// array_map() - Applies the callback to the elements of the given arrays
echo "<h1>array_map()</h1>";
$lengths = array_map('strlen', $input_array);
print_r($lengths);
echo "<br>";

// array_merge_recursive() - Merge one or more arrays recursively
// Example usage:
// $merged = array_merge_recursive($array1, $array2);


$input_array = ["vasanth", "sridharan", "aspire systems"];

// array_fill() - Fill an array with values
echo "<h1>array_fill()</h1>";
$start_index = 0;
$num_elements = 5;
$value = "example";
$filled_array = array_fill($start_index, $num_elements, $value);
print_r($filled_array);
echo "<br>";

// array_filter() - Filters elements of an array using a callback function
echo "<h1>array_filter()</h1>";
$filtered_array = array_filter($input_array, function($value) {
    return strlen($value) > 10;
});
print_r($filtered_array);
echo "<br>";

// array_flip() - Exchanges all keys with their associated values in an array
echo "<h1>array_flip()</h1>";
$flipped_array = array_flip($input_array);
print_r($flipped_array);
echo "<br>";

// array_intersect_assoc() - Computes the intersection of arrays with additional index check
echo "<h1>array_intersect_assoc()</h1>";
$array1 = ['Name' => 'vasanth', 'Age' => 30, 'Company' => 'Aspire Systems'];
$array2 = ['Name' => 'sridharan', 'Age' => 35, 'Company' => 'Infosys'];
$intersect = array_intersect_assoc($array1, $array2);
print_r($intersect);
echo "<br>";

// array_intersect_key() - Computes the intersection of arrays using keys for comparison
echo "<h1>array_intersect_key()</h1>";
$array1 = ['Name' => 'vasanth', 'Age' => 30, 'Company' => 'Aspire Systems'];
$array2 = ['Company' => 'Aspire Systems'];
$intersect = array_intersect_key($array1, $array2);
print_r($intersect);
echo "<br>";

// array_intersect() - Computes the intersection of arrays
echo "<h1>array_intersect()</h1>";
$array1 = ['vasanth', 'sridharan', 'aspire systems'];
$array2 = ['sridharan', 'infosys'];
$intersect = array_intersect($array1, $array2);
print_r($intersect);
echo "<br>";

// array_key_exists() - Checks if the given key or index exists in the array
echo "<h1>array_key_exists()</h1>";
$key = 'Age';
if (array_key_exists($key, $array1)) {
    echo "Key '$key' exists in the array";
} else {
    echo "Key '$key' does not exist in the array";
}
echo "<br>";

// array_keys() - Return all the keys or a subset of the keys of an array
echo "<h1>array_keys()</h1>";
$keys = array_keys($array1);
print_r($keys);
echo "<br>";

// array_map() - Applies the callback to the elements of the given arrays
echo "<h1>array_map()</h1>";
$lengths = array_map('strlen', $input_array);
print_r($lengths);
echo "<br>";

// array_merge() - Merge one or more arrays
echo "<h1>array_merge()</h1>";
$array1 = ['Name' => 'vasanth', 'Company' => 'Aspire Systems'];
$array2 = ['Age' => 30];
$merged = array_merge($array1, $array2);
print_r($merged);
echo "<br>";

// array_multisort() - Sort multiple or multi-dimensional arrays
echo "<h1>array_multisort()</h1>";
$array = array(
    array("Name" => "vasanth", "Age" => 30),
    array("Name" => "sridharan", "Age" => 35),
    array("Name" => "john", "Age" => 25),
);
array_multisort(array_column($array, 'Age'), SORT_ASC, $array);
print_r($array);
echo "<br>";

// array_pad() - Pad array to the specified length with a value
echo "<h1>array_pad()</h1>";
$padded_array = array_pad($input_array, 5, "extra");
print_r($padded_array);
echo "<br>";

// array_pop() - Pop the element off the end of array
echo "<h1>array_pop()</h1>";
$last_element = array_pop($input_array);
echo "Popped element: " . $last_element . "<br>";

// array_product() - Calculate the product of values in an array
echo "<h1>array_product()</h1>";
$values = [1, 2, 3, 4, 5];
$product = array_product($values);
echo "Product of values: " . $product . "<br>";

