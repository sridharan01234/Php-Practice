<?php 
// Inputs
$input_array1 = array("Sridharan" => 30, "Vasanth" => 25, "Aspire Systems" => 20);
$input_array2 = array("Sridharan", "Vasanth", "Aspire Systems");

// array_change_key_case() - Changes the case of all keys in an array
echo "<h1>array_change_key_case()</h1>";
echo "Array with keys in lowercase: ";
print_r(array_change_key_case($input_array1, CASE_LOWER));
echo "<br>";

// array_chunk() - Split an array into chunks
echo "<h1>array_chunk()</h1>";
echo "Chunked array: ";
print_r(array_chunk($input_array2, 2));
echo "<br>";

// array_column() - Return the values from a single column in the input array
echo "<h1>array_column()</h1>";
echo "Values from the 'age' column: ";
print_r(array_column($input_array1, 'age'));
echo "<br>";

// array_combine() - Creates an array by using one array for keys and another for its values
echo "<h1>array_combine()</h1>";
$keys = array("Name1", "Name2", "Name3");
$values = array("Sridharan", "Vasanth", "Aspire Systems");
echo "Combined array: ";
print_r(array_combine($keys, $values));
echo "<br>";

// array_count_values() - Counts the occurrences of each distinct value in an array
echo "<h1>array_count_values()</h1>";
echo "Value counts: ";
print_r(array_count_values($input_array2));
echo "<br>";

// array_diff_assoc() - Computes the difference of arrays with additional index check
echo "<h1>array_diff_assoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
echo "Array difference with additional index check: ";
print_r(array_diff_assoc($array1, $array2));
echo "<br>";

// array_diff_key() - Computes the difference of arrays using keys for comparison
echo "<h1>array_diff_key()</h1>";
$array1 = array("blue" => 1, "red" => 2, "green" => 3, "purple" => 4);
$array2 = array("green" => 5, "blue" => 6, "yellow" => 7, "cyan" => 8);
echo "Array difference using keys for comparison: ";
print_r(array_diff_key($array1, $array2));
echo "<br>";

// array_diff_uassoc() - Computes the difference of arrays with additional index check performed by a user supplied callback function
echo "<h1>array_diff_uassoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Array difference with additional index check using callback function: ";
print_r(array_diff_uassoc($array1, $array2, "strcasecmp"));
echo "<br>";

// array_diff_ukey() - Computes the difference of arrays using a callback function on the keys for comparison
echo "<h1>array_diff_ukey()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "yellow", "red");
echo "Array difference using a callback function on keys for comparison: ";
print_r(array_diff_ukey($array1, $array2, "strcasecmp"));
echo "<br>";

// array_diff() - Computes the difference of arrays
echo "<h1>array_diff()</h1>";
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
echo "Array difference: ";
print_r(array_diff($array1, $array2));
echo "<br>";

// array_fill_keys() - Fill an array with values, specifying keys
echo "<h1>array_fill_keys()</h1>";
$keys = array("a", "b", "c", "d");
echo "Filled array: ";
print_r(array_fill_keys($keys, "hello"));
echo "<br>";

// array_fill() - Fill an array with values
echo "<h1>array_fill()</h1>";
echo "Filled array: ";
print_r(array_fill(3, 4, "blue"));
echo "<br>";

// array_filter() - Filters elements of an array using a callback function
echo "<h1>array_filter()</h1>";
$input_array = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
echo "Filtered array: ";
print_r(array_filter($input_array, function($value) {
    return $value % 2 == 0;
}));
echo "<br>";

// array_flip() - Exchanges all keys with their associated values in an array
echo "<h1>array_flip()</h1>";
echo "Flipped array: ";
print_r(array_flip($input_array1));
echo "<br>";

// array_intersect_assoc() - Computes the intersection of arrays with additional index check
echo "<h1>array_intersect_assoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Intersection with additional index check: ";
print_r(array_intersect_assoc($array1, $array2));
echo "<br>";

// array_intersect_key() - Computes the intersection of arrays using keys for comparison
echo "<h1>array_intersect_key()</h1>";
$array1 = array("blue" => 1, "red" => 2, "green" => 3, "purple" => 4);
$array2 = array("green" => 5, "blue" => 6, "yellow" => 7, "cyan" => 8);
echo "Intersection using keys for comparison: ";
print_r(array_intersect_key($array1, $array2));
echo "<br>";

// array_intersect_uassoc() - Computes the intersection of arrays with additional index check, compares indexes by a callback function
echo "<h1>array_intersect_uassoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Intersection with additional index check using callback function: ";
print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
echo "<br>";

// array_intersect_ukey() - Computes the intersection of arrays using a callback function on the keys for comparison
echo "<h1>array_intersect_ukey()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "yellow", "red");
echo "Intersection using a callback function on keys for comparison: ";
print_r(array_intersect_ukey($array1, $array2, "strcasecmp"));
echo "<br>";

// array_intersect() - Computes the intersection of arrays
echo "<h1>array_intersect()</h1>";
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
echo "Intersection: ";
print_r(array_intersect($array1, $array2));
echo "<br>";

// array_is_list() - Checks whether a given array is a list
echo "<h1>array_is_list()</h1>";
$list_array = array(1, 2, 3, 4, 5);
$assoc_array = array("a" => 1, "b" => 2, "c" => 3);
echo "Is list array? " . (array_is_list($list_array) ? "Yes" : "No") . "<br>";
echo "Is associative array? " . (array_is_list($assoc_array) ? "Yes" : "No") . "<br>";

// array_key_exists() - Checks if the given key or index exists in the array
echo "<h1>array_key_exists()</h1>";
$key_to_check = "b";
echo "Key '$key_to_check' exists? " . (array_key_exists($key_to_check, $input_array1) ? "Yes" : "No") . "<br>";

// array_key_first() - Gets the first key of an array
echo "<h1>array_key_first()</h1>";
echo "First key of the array: " . array_key_first($input_array1) . "<br>";

// array_key_last() - Gets the last key of an array
echo "<h1>array_key_last()</h1>";
echo "Last key of the array: " . array_key_last($input_array1) . "<br>";

// array_keys() - Return all the keys or a subset of the keys of an array
echo "<h1>array_keys()</h1>";
echo "Keys of the array: ";
print_r(array_keys($input_array1));
echo "<br>";

// array_map() - Applies the callback to the elements of the given arrays
echo "<h1>array_map()</h1>";
$numbers = array(1, 2, 3, 4, 5);
echo "Array after applying 'sqrt' function: ";
print_r(array_map('sqrt', $numbers));
echo "<br>";

// array_merge_recursive() - Merge one or more arrays recursively
echo "<h1>array_merge_recursive()</h1>";
$array1 = array("color" => array("favorite" => "red"), 5);
$array2 = array(10, "color" => array("favorite" => "green", "blue"));
echo "Merged arrays: ";
print_r(array_merge_recursive($array1, $array2));
echo "<br>";

// array_merge() - Merge one or more arrays
echo "<h1>array_merge()</h1>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo "Merged arrays: ";
print_r(array_merge($array1, $array2));
echo "<br>";

// array_multisort() - Sort multiple or multi-dimensional arrays
echo "<h1>array_multisort()</h1>";
$names = array("Vasanth", "Sridharan", "Aspire Systems");
$ages = array(25, 30, 20);
array_multisort($ages, $names);
echo "Sorted array: ";
print_r($names);
echo "<br>";

// array_pad() - Pad array to the specified length with a value
echo "<h1>array_pad()</h1>";
$array = array(1, 2, 3);
echo "Padded array: ";
print_r(array_pad($array, 5, 0));
echo "<br>";

// array_pop() - Pop the element off the end of array
echo "<h1>array_pop()</h1>";
echo "Popped element: " . array_pop($input_array1) . "<br>";

// array_product() - Calculate the product of values in an array
echo "<h1>array_product()</h1>";
$numbers = array(1, 2, 3, 4, 5);
echo "Product of array values: " . array_product($numbers) . "<br>";

// array_push() - Push one or more elements onto the end of array
echo "<h1>array_push()</h1>";
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
echo "Pushed array: ";
print_r($stack);
echo "<br>";

// array_rand() - Pick one or more random keys out of an array
echo "<h1>array_rand()</h1>";
$random_keys = array_rand($input_array1, 2);
echo "Random keys: ";
print_r($random_keys);
echo "<br>";

// array_reduce() - Iteratively reduce the array to a single value using a callback function
echo "<h1>array_reduce()</h1>";
$numbers = array(1, 2, 3, 4, 5);
echo "Reduced array: " . array_reduce($numbers, function($carry, $item) {
    $carry += $item;
    return $carry;
}, 0);
echo "<br>";

// array_replace_recursive() - Replaces elements from passed arrays into the first array recursively
echo "<h1>array_replace_recursive()</h1>";
$array1 = array("color" => array("favorite" => "red"), 5);
$array2 = array(10, "color" => array("favorite" => "green", "blue"));
echo "Replaced array: ";
print_r(array_replace_recursive($array1, $array2));
echo "<br>";

// array_replace() - Replaces elements from passed arrays into the first array
echo "<h1>array_replace()</h1>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo "Replaced array: ";
print_r(array_replace($array1, $array2));
echo "<br>";

// array_reverse() - Return an array with elements in reverse order
echo "<h1>array_reverse()</h1>";
$array = array("Vasanth", "Sridharan", "Aspire Systems");
echo "Reversed array: ";
print_r(array_reverse($array));
echo "<br>";

// array_search() - Searches the array for
echo "<h1>array_intersect_ukey()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Intersection using callback function on keys for comparison: ";
print_r(array_intersect_ukey($array1, $array2, "strcasecmp"));
echo "<br>";

// array_intersect() - Computes the intersection of arrays
echo "<h1>array_intersect()</h1>";
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
echo "Intersection: ";
print_r(array_intersect($array1, $array2));
echo "<br>";

// array_is_list() - Checks whether a given array is a list
echo "<h1>array_is_list()</h1>";
$list_array = array(1, 2, 3, 4, 5);
$assoc_array = array("a" => 1, "b" => 2, "c" => 3);
echo "Is list array? " . (array_is_list($list_array) ? "Yes" : "No") . "<br>";
echo "Is assoc array? " . (array_is_list($assoc_array) ? "Yes" : "No") . "<br>";

// array_key_exists() - Checks if the given key or index exists in the array
echo "<h1>array_key_exists()</h1>";
echo "Does key 'Vasanth' exist? " . (array_key_exists('Vasanth', $input_array1) ? "Yes" : "No") . "<br>";
echo "Does key 'John' exist? " . (array_key_exists('John', $input_array1) ? "Yes" : "No") . "<br>";

// array_key_first() - Gets the first key of an array
echo "<h1>array_key_first()</h1>";
echo "First key of the array: " . array_key_first($input_array1) . "<br>";

// array_key_last() - Gets the last key of an array
echo "<h1>array_key_last()</h1>";
echo "Last key of the array: " . array_key_last($input_array1) . "<br>";

// array_keys() - Return all the keys or a subset of the keys of an array
echo "<h1>array_keys()</h1>";
echo "Keys of the array: ";
print_r(array_keys($input_array1));
echo "<br>";

// array_map() - Applies the callback to the elements of the given arrays
echo "<h1>array_map()</h1>";
function my_callback($value) {
    return $value * 2;
}
$array = array(1, 2, 3, 4, 5);
echo "Mapped array: ";
print_r(array_map("my_callback", $array));
echo "<br>";

// array_merge_recursive() - Merge one or more arrays recursively
echo "<h1>array_merge_recursive()</h1>";
$array1 = array("color" => array("favorite" => "red"), 5);
$array2 = array(10, "color" => array("favorite" => "green", "blue"));
echo "Merged array (recursive): ";
print_r(array_merge_recursive($array1, $array2));
echo "<br>";

// array_merge() - Merge one or more arrays
echo "<h1>array_merge()</h1>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo "Merged array: ";
print_r(array_merge($array1, $array2));
echo "<br>";

// array_multisort() - Sort multiple or multi-dimensional arrays
echo "<h1>array_multisort()</h1>";
$array = array(
    array("age", "name", "points"),
    array(1, "John", 10),
    array(2, "Jane", 20),
    array(3, "Doe", 30)
);
array_multisort($array[0], SORT_ASC, SORT_STRING,
                $array[1], SORT_ASC, SORT_STRING);
echo "Sorted array: ";
print_r($array);
echo "<br>";

// array_pad() - Pad array to the specified length with a value
echo "<h1>array_pad()</h1>";
$input = array(12, 10, 9);
echo "Padded array: ";
print_r(array_pad($input, 5, 0));
echo "<br>";

// array_pop() - Pop the element off the end of array
echo "<h1>array_pop()</h1>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
echo "Popped fruit: " . $fruit . "<br>";

// array_product() - Calculate the product of values in an array
echo "<h1>array_product()</h1>";
$array = array(2, 4, 6, 8);
echo "Product of values: " . array_product($array) . "<br>";

// array_push() - Push one or more elements onto the end of array
echo "<h1>array_push()</h1>";
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
echo "Updated array: ";
print_r($stack);
echo "<br>";

// array_rand() - Pick one or more random keys out of an array
echo "<h1>array_rand()</h1>";
$random_keys = array_rand($input_array1, 2);
echo "Random keys: ";
print_r($random_keys);
echo "<br>";

// array_reduce() - Iteratively reduce the array to a single value using a callback function
echo "<h1>array_reduce()</h1>";
$array = array(1, 2, 3, 4, 5);
echo "Reduced value: ";
echo array_reduce($array, function($carry, $item) {
    return $carry * $item;
}, 1);
echo "<br>";

// array_replace_recursive() - Replaces elements from passed arrays into the first array recursively
echo "<h1>array_replace_recursive()</h1>";
$array1 = array("color" => array("favorite" => "red"), 5);
$array2 = array(10, "color" => array("favorite" => "green", "blue"));
echo "Replaced array (recursive): ";
print_r(array_replace_recursive($array1, $array2));
echo "<br>";

// array_replace() - Replaces elements from passed arrays into the first array
echo "<h1>array_replace()</h1>";
$array1 = array("a" => "apple", "b" => "banana", "p" => "pear", "o" => "orange");
$array2 = array("b" => "blackberry", "p" => "peach");
echo "Replaced array: ";
print_r(array_replace($array1, $array2));
echo "<br>";

// array_reverse() - Return an array with elements in reverse order
echo "<h1>array_reverse()</h1>";
$input = array("php", 4.0, "green", "red");
$reversed = array_reverse($input);
echo "Reversed array: ";
print_r($reversed);
echo "<br>";

// array_search() - Searches the array for a given value and returns the first corresponding key if successful
echo "<h1>array_search()</h1>";
$index = array_search("Vasanth", $input_array1);
echo "Key of 'Vasanth': " . $index . "<br>";

// array_shift() - Shift an element off the beginning of array
echo "<h1>array_shift()</h1>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
echo "Shifted fruit: " . $fruit . "<br>";

// array_slice() - Extract a slice of the array
echo "<h1>array_slice()</h1>";
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 2); // returns "c", "d", and "e"
echo "Slice of the array: ";
print_r($output);
echo "<br>";

// array_splice() - Remove a portion of the array and replace it with something else
echo "<h1>array_splice()</h1>";
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
echo "Array after splice: ";
print_r($input);
echo "<br>";

// array_sum() - Calculate the sum of values in an array
echo "<h1>array_sum()</h1>";
$array = array(2, 4, 6, 8);
echo "Sum of values: " . array_sum($array) . "<br>";

// array_udiff_assoc() - Computes the difference of arrays with additional index check, compares data by a callback function
echo "<h1>array_udiff_assoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Array difference with additional index check using callback function: ";
print_r(array_udiff_assoc($array1, $array2, "strcasecmp"));
echo "<br>";

// array_udiff_uassoc() - Computes the difference of arrays with additional index check, compares data and indexes by a callback function
echo "<h1>array_udiff_uassoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Array difference with additional index check using callback functions: ";
print_r(array_udiff_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
echo "<br>";

// array_udiff() - Computes the difference of arrays by using a callback function for data comparison
echo "<h1>array_udiff()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "yellow", "red");
echo "Array difference using callback function for data comparison: ";
print_r(array_udiff($array1, $array2, "strcasecmp"));
echo "<br>";

// array_uintersect_assoc() - Computes the intersection of arrays with additional index check, compares data by a callback function
echo "<h1>array_uintersect_assoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "yellow", "red");
echo "Intersection with additional index check using callback function: ";
print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));
echo "<br>";

// array_uintersect_uassoc() - Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
echo "<h1>array_uintersect_uassoc()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "b" => "yellow", "blue");
echo "Intersection with additional index check using callback functions: ";
print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
echo "<br>";

// array_uintersect() - Computes the intersection of arrays, compares data by a callback function
echo "<h1>array_uintersect()</h1>";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "green", "yellow", "red");
echo "Intersection using callback function for data comparison: ";
print_r(array_uintersect($array1, $array2, "strcasecmp"));
echo "<br>";

// array_unique() - Removes duplicate values from an array
echo "<h1>array_unique()</h1>";
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
echo "Unique values array: ";
print_r(array_unique($input));
echo "<br>";

// array_unshift() - Prepend one or more elements to the beginning of an array
echo "<h1>array_unshift()</h1>";
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
echo "Updated array: ";
print_r($queue);
echo "<br>";

// array_values() - Return all the values of an array
echo "<h1>array_values()</h1>";
$array = array("size" => "XL", "color" => "gold");
echo "Array values: ";
print_r(array_values($array));
echo "<br>";

// array_walk_recursive() - Apply a user function recursively to every member of an array
echo "<h1>array_walk_recursive()</h1>";
$input = array("a" => "apple", "b" => "banana", array("mango", "pineapple"));
echo "Modified array: ";
array_walk_recursive($input, function(&$value, $key) {
    $value = strtoupper($value);
});
print_r($input);
echo "<br>";

// array_walk() - Apply a user-supplied function to every member of an array
echo "<h1>array_walk()</h1>";
$input = array("a" => "apple", "b" => "banana");
array_walk($input, function(&$value, $key) {
    $value = $key . ":" . $value;
});
echo "Modified array: ";
print_r($input);
echo "<br>";

// array() - Create an array
echo "<h1>array()</h1>";
$array = array("foo", "bar", "hello", "world");
echo "Created array: ";
print_r($array);
echo "<br>";

// arsort() - Sort an array in descending order and maintain index association
echo "<h1>arsort()</h1>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
echo "Sorted array (descending order): ";
print_r($fruits);
echo "<br>";

// asort() - Sort an array in ascending order and maintain index association
echo "<h1>asort()</h1>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
echo "Sorted array (ascending order): ";
print_r($fruits);
echo "<br>";

// compact() - Create array containing variables and their values
echo "<h1>compact()</h1>";
$name = "John";
$age = 30;
$result = compact("name", "age");
echo "Compact array: ";
print_r($result);
echo "<br>";

// count() - Counts all elements in an array or in a Countable object
echo "<h1>count()</h1>";
$array = array(1, 2, 3, 4, 5);
echo "Number of elements in the array: " . count($array) . "<br>";

// current() - Return the current element in an array
echo "<h1>current()</h1>";
$array = array(1, 2, 3, 4, 5);
echo "Current element in the array: " . current($array) . "<br>";

// end() - Set the internal pointer of an array to its last element
echo "<h1>end()</h1>";
$fruits = array("apple", "banana", "cherry");
echo "Last element: " . end($fruits) . "<br>";

// extract() - Import variables into the current symbol table from an array
echo "<h1>extract()</h1>";
$vars = array("name" => "John", "age" => 30);
extract($vars);
echo "Name: " . $name . ", Age: " . $age . "<br>";

// in_array() - Checks if a value exists in an array
echo "<h1>in_array()</h1>";
$array = array("a", "b", "c");
echo "'b' exists in the array? " . (in_array("b", $array) ? "Yes" : "No") . "<br>";

// key_exists() - Alias of array_key_exists
echo "<h1>key_exists()</h1>";
$array = array("a" => "apple", "b" => "banana");
echo "Does key 'a' exist? " . (key_exists('a', $array) ? "Yes" : "No") . "<br>";

// key() - Fetch a key from an array
echo "<h1>key()</h1>";
$array = array(0 => 100, "color" => "red");
echo "First key of the array: " . key($array) . "<br>";

// krsort() - Sort an array by key in descending order
echo "<h1>krsort()</h1>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
krsort($fruits);
echo "Sorted array by key (descending order): ";
print_r($fruits);
echo "<br>";

// ksort() - Sort an array by key in ascending order
echo "<h1>ksort()</h1>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
echo "Sorted array by key (ascending order): ";
print_r($fruits);
echo "<br>";

// list() - Assign variables as if they were an array
echo "<h1>list()</h1>";
$info = array('coffee', 'brown', 'caffeine');
list($drink, $color, $power) = $info;
echo "Drink: $drink, Color: $color, Power: $power <br>";

// natcasesort() - Sort an array using a case-insensitive "natural order" algorithm
echo "<h1>natcasesort()</h1>";
$array = array("IMG0.png", "img12.png", "img10.png", "img2.png", "img1.png", "IMG3.png");
natcasesort($array);
echo "Sorted array: ";
print_r($array);
echo "<br>";

// natsort() - Sort an array using a "natural order" algorithm
echo "<h1>natsort()</h1>";
$array = array("img12.png", "img10.png", "img2.png", "img1.png", "IMG3.png");
natsort($array);
echo "Sorted array: ";
print_r($array);
echo "<br>";

// next() - Advance the internal pointer of an array
echo "<h1>next()</h1>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo "First element after current: " . next($people) . "<br>";

// pos() - Alias of current
echo "<h1>pos()</h1>";
$array = array(1, 2, 3, 4, 5);
echo "Current element: " . pos($array) . "<br>";

// prev() - Rewind the internal array pointer
echo "<h1>prev()</h1>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo "First element before current: " . prev($people) . "<br>";

// range() - Create an array containing a range of elements
echo "<h1>range()</h1>";
$numbers = range(0, 10, 2);
echo "Range of numbers: ";
print_r($numbers);
echo "<br>";

// reset() - Set the internal pointer of an array to its first element
echo "<h1>reset()</h1>";
$fruits = array("apple", "banana", "cherry");
echo "First element: " . reset($fruits) . "<br>";

// rsort() - Sort an array in descending order
echo "<h1>rsort()</h1>";
$fruits = array("apple", "banana", "cherry");
rsort($fruits);
echo "Sorted array (descending order): ";
print_r($fruits);
echo "<br>";

// shuffle() - Shuffle an array
echo "<h1>shuffle()</h1>";
$numbers = range(1, 10);
shuffle($numbers);
echo "Shuffled array: ";
print_r($numbers);
echo "<br>";

// sizeof() - Alias of count
echo "<h1>sizeof()</h1>";
$array = array(1, 2, 3, 4, 5);
echo "Number of elements in the array: " . sizeof($array) . "<br>";

// sort() - Sort an array in ascending order
echo "<h1>sort()</h1>";
$fruits = array("apple", "banana", "cherry");
sort($fruits);
echo "Sorted array (ascending order): ";
print_r($fruits);
echo "<br>";

// uasort() - Sort an array with a user-defined comparison function and maintain index association
echo "<h1>uasort()</h1>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
function cmp($a, $b) {
    return $a <=> $b;
}
uasort($age, "cmp");
echo "Sorted array with index association: ";
print_r($age);
echo "<br>";

// uksort() - Sort an array by keys using a user-defined comparison function
echo "<h1>uksort()</h1>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
function key_compare_func($a, $b) {
    return strcmp($a, $b);
}
uksort($age, "key_compare_func");
echo "Sorted array by keys: ";
print_r($age);
echo "<br>";

// usort() - Sort an array by values using a user-defined comparison function
echo "<h1>usort()</h1>";
$numbers = array(4, 2, 6, 1, 3, 5);
function cmp_values($a, $b) {
    return $a <=> $b;
}
usort($numbers, "cmp_values");
echo "Sorted array by values: ";
print_r($numbers);
echo "<br>";