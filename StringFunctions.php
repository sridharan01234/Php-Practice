<?php

$input_string1 = "Vasanth";
$input_string2 = "Sridharan";
$input_string3 = "Aspire Systems";
$csv_string = "apple,orange,banana,grape";
$quoted_string = "Hello, \\'world\\'!";
$html_string = "<p>Hello, <b>Vasanth</b>, welcome to <i>PHP</i> world!</p>";
$utf8_string = "Ãºtf8 DÃ©cÃ´dÃ©";
$iso_string = "utf8 Décodé";

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head><title>PHP String Functions</title></head>";
echo "<body>";
echo "<div>";

// addslashes() - Quote string with slashes
echo "<h1>addslashes()</h1>";
echo "Quoted string: " . addslashes($input_string1) . "<br>";

// bin2hex() - Convert binary data into hexadecimal representation
echo "<h1>bin2hex()</h1>";
echo "Hexadecimal representation of 'hello': " . bin2hex("hello") . "<br>";

// chop() - Alias of rtrim
echo "<h1>chop()</h1>";
echo "Chopped version of '$input_string1': " . chop($input_string1, "nth") . "<br>";

// chr() - Generate a single-byte string from a number
echo "<h1>chr()</h1>";
echo "Character for ASCII value 65: " . chr(65) . "<br>";

// chunk_split() - Split a string into smaller chunks
echo "<h1>chunk_split()</h1>";
echo "Splitting '$input_string1' into chunks: " . chunk_split($input_string1, 2, "-") . "<br>";

// convert_uudecode() - Decode a uuencoded string
echo "<h1>convert_uudecode()</h1>";
echo "Decoded uuencoded string: " . convert_uudecode("+22!L;W9E(%!(4\"$`\n`") . "<br>";

// convert_uuencode() - Uuencode a string
echo "<h1>convert_uuencode()</h1>";
echo "Uuencoded string: " . convert_uuencode("Hello, world!") . "<br>";

// count_chars() - Return information about characters used in a string
echo "<h1>count_chars()</h1>";
$char_counts = count_chars($input_string1, 1);
foreach ($char_counts as $char => $count) {
    echo "Character '$char' appears $count times.<br>";
}

// crc32() - Calculates the crc32 polynomial of a string
echo "<h1>crc32()</h1>";
echo "CRC32 checksum of '$input_string1': " . crc32($input_string1) . "<br>";

// crypt() - One-way string hashing
echo "<h1>crypt()</h1>";
$hashed_string = crypt($input_string1, 'secret_salt');
echo "Hashed string: $hashed_string<br>";

// echo - Output one or more strings
echo "<h1>echo</h1>";
echo "Hello, world!<br>";

// explode() - Split a string by a string
echo "<h1>explode()</h1>";
$string_array = explode(",", $csv_string);
print_r($string_array);
echo "<br>";

// fprintf() - Write a formatted string to a stream
echo "<h1>fprintf()</h1>";
$file_handle = fopen("output.txt", "w");
fprintf($file_handle, "Hello, %s!", "world");
fclose($file_handle);
echo "Formatted string written to file 'output.txt'.<br>";

// get_html_translation_table() - Returns the translation table used by htmlspecialchars and htmlentities
echo "<h1>get_html_translation_table()</h1>";
$html_translation_table = get_html_translation_table(HTML_ENTITIES);
print_r($html_translation_table);
echo "<br>";

// hebrev() - Convert logical Hebrew text to visual text
echo "<h1>hebrev()</h1>";
$hebrew_text = "הקלד בעברית";
echo "Visual Hebrew text: " . hebrev($hebrew_text) . "<br>";


// hex2bin() - Decodes a hexadecimally encoded binary string
echo "<h1>hex2bin()</h1>";
echo "Decoded hexadecimal string: " . hex2bin("48656c6c6f2c20776f726c6421") . "<br>";

// html_entity_decode() - Convert HTML entities to their corresponding characters
echo "<h1>html_entity_decode()</h1>";
echo "Decoded HTML entity: " . html_entity_decode("&copy;") . "<br>";

// htmlentities() - Convert all applicable characters to HTML entities
echo "<h1>htmlentities()</h1>";
echo "Encoded HTML entity: " . htmlentities("©") . "<br>";

// htmlspecialchars_decode() - Convert special HTML entities back to characters
echo "<h1>htmlspecialchars_decode()</h1>";
echo "Decoded HTML special entity: " . htmlspecialchars_decode("&lt;p&gt;Hello&lt;/p&gt;") . "<br>";

// htmlspecialchars() - Convert special characters to HTML entities
echo "<h1>htmlspecialchars()</h1>";
echo "Encoded HTML special characters: " . htmlspecialchars("<p>Hello</p>") . "<br>";

// implode() - Join array elements with a string
echo "<h1>implode()</h1>";
$imploded_string = implode(", ", $string_array);
echo "Imploded string: $imploded_string<br>";

// join() - Alias of implode
echo "<h1>join()</h1>";
$joined_string = join(", ", $string_array);
echo "Joined string: $joined_string<br>";

// lcfirst() - Make a string's first character lowercase
echo "<h1>lcfirst()</h1>";
echo "First character lowercase of '$input_string1': " . lcfirst($input_string1) . "<br>";

// levenshtein() - Calculate Levenshtein distance between two strings
echo "<h1>levenshtein()</h1>";
echo "Levenshtein distance between '$input_string1' and '$input_string2': " . levenshtein($input_string1, $input_string2) . "<br>";

// localeconv() - Get numeric formatting information
echo "<h1>localeconv()</h1>";
$numeric_info = localeconv();
print_r($numeric_info);
echo "<br>";

// ltrim() - Strip whitespace (or other characters) from the beginning of a string
echo "<h1>ltrim()</h1>";
echo "Trimmed version of '$input_string1': " . ltrim($input_string1, "V") . "<br>";

// md5_file() - Calculates the md5 hash of a given file
echo "<h1>md5_file()</h1>";
$file_path = "example.txt";
echo "MD5 hash of file '$file_path': " . md5_file($file_path) . "<br>";

// md5() - Calculate the md5 hash of a string
echo "<h1>md5()</h1>";
echo "MD5 hash of '$input_string1': " . md5($input_string1) . "<br>";

// metaphone() - Calculate the metaphone key of a string
echo "<h1>metaphone()</h1>";
echo "Metaphone key of '$input_string1': " . metaphone($input_string1) . "<br>";

// nl2br() - Inserts HTML line breaks before all newlines in a string
echo "<h1>nl2br()</h1>";
echo "With line breaks:<br>" . nl2br("Hello\nWorld!") . "<br>";

// number_format() - Format a number with grouped thousands
echo "<h1>number_format()</h1>";
echo "Formatted number: " . number_format(1234567.891234, 2) . "<br>";

// ord() - Convert the first byte of a string to a value between 0 and 255
echo "<h1>ord()</h1>";
echo "ASCII value of first character in '$input_string1': " . ord($input_string1) . "<br>";

// parse_str() - Parses the string into variables
echo "<h1>parse_str()</h1>";
parse_str("name=Vasanth&age=25", $output);
echo "Parsed string:<br>";
print_r($output);
echo "<br>";

// print() - Output a string
echo "<h1>print()</h1>";
print("Hello, world!<br>");

// printf() - Output a formatted string
echo "<h1>printf()</h1>";
printf("Hello, %s!<br>", "world");

// quoted_printable_decode() - Convert a quoted-printable string to an 8 bit string
echo "<h1>quoted_printable_decode()</h1>";
echo "Decoded quoted-printable string: " . quoted_printable_decode("Hello=0AWorld!") . "<br>";

// quoted_printable_encode() - Convert a 8 bit string to a quoted-printable string
echo "<h1>quoted_printable_encode()</h1>";
echo "Encoded quoted-printable string: " . quoted_printable_encode("Hello\nWorld!") . "<br>";

// quotemeta() - Quote meta characters
echo "<h1>quotemeta()</h1>";
echo "Quoted string: " . quotemeta("Hello.world!") . "<br>";

// rtrim() - Strip whitespace (or other characters) from the end of a string
echo "<h1>rtrim()</h1>";
echo "Trimmed version of '$input_string1': " . rtrim($input_string1, "th") . "<br>";

// setlocale() - Set locale information
echo "<h1>setlocale()</h1>";
echo "Current locale: " . setlocale(LC_ALL, 0) . "<br>";

// sha1_file() - Calculate the sha1 hash of a file
echo "<h1>sha1_file()</h1>";
echo "SHA1 hash of file '$file_path': " . sha1_file($file_path) . "<br>";

// sha1() - Calculate the sha1 hash of a string
echo "<h1>sha1()</h1>";
echo "SHA1 hash of '$input_string1': " . sha1($input_string1) . "<br>";

// similar_text() - Calculate the similarity between two strings
echo "<h1>similar_text()</h1>";
similar_text($input_string1, $input_string2, $percent);
echo "Similarity between '$input_string1' and '$input_string2': $percent%<br>";

// soundex() - Calculate the soundex key of a string
echo "<h1>soundex()</h1>";
echo "Soundex key of '$input_string1': " . soundex($input_string1) . "<br>";

// sprintf() - Return a formatted string
echo "<h1>sprintf()</h1>";
echo "Formatted string: " . sprintf("%s is %d years old", "Vasanth", 25) . "<br>";

// sscanf() - Parses input from a string according to a format
echo "<h1>sscanf()</h1>";
$input = "Name: Vasanth Age: 25";
sscanf($input, "Name: %s Age: %d", $name, $age);
echo "Parsed values: Name - $name, Age - $age<br>";

// str_contains() - Determine if a string contains a given substring
echo "<h1>str_contains()</h1>";
echo "Does '$input_string2' contain 'sid'? " . (str_contains($input_string2, 'sid') ? 'Yes' : 'No') . "<br>";

// str_ends_with() - Checks if a string ends with a given substring
echo "<h1>str_ends_with()</h1>";
echo "Does '$input_string1' end with 'santh'? " . (str_ends_with($input_string1, 'santh') ? 'Yes' : 'No') . "<br>";

// str_getcsv() - Parse a CSV string into an array
echo "<h1>str_getcsv()</h1>";
print_r(str_getcsv($csv_string));
echo "<br>";

// str_ireplace() - Case-insensitive version of str_replace
echo "<h1>str_ireplace()</h1>";
echo "Replaced 'World' with 'PHP' in '$input_string1': " . str_ireplace("World", "PHP", $input_string1) . "<br>";

// str_pad() - Pad a string to a certain length with another string
echo "<h1>str_pad()</h1>";
echo "Padded '$input_string1' to length 10 with '-' on the right: " . str_pad($input_string1, 10, "-", STR_PAD_RIGHT) . "<br>";

// str_repeat() - Repeat a string
echo "<h1>str_repeat()</h1>";
echo "Repeated '$input_string1' 3 times: " . str_repeat($input_string1, 3) . "<br>";

// str_replace() - Replace all occurrences of the search string with the replacement string
echo "<h1>str_replace()</h1>";
echo "Replaced 'santh' with 'SANTH' in '$input_string1': " . str_replace("santh", "SANTH", $input_string1) . "<br>";

// str_rot13() - Perform the rot13 transform on a string
echo "<h1>str_rot13()</h1>";
echo "ROT13 transformation of 'Hello': " . str_rot13("Hello") . "<br>";

// str_shuffle() - Randomly shuffles a string
echo "<h1>str_shuffle()</h1>";
echo "Shuffled version of '$input_string1': " . str_shuffle($input_string1) . "<br>";

// str_split() - Convert a string to an array
echo "<h1>str_split()</h1>";
$array_of_characters = str_split($input_string1);
echo "Characters in '$input_string1': ";
print_r($array_of_characters);
echo "<br>";

// str_starts_with() - Checks if a string starts with a given substring
echo "<h1>str_starts_with()</h1>";
echo "Does '$input_string1' start with 'Vas'? " . (str_starts_with($input_string1, 'Vas') ? 'Yes' : 'No') . "<br>";

// str_word_count() - Return information about words used in a string
echo "<h1>str_word_count()</h1>";
echo "Word count in '$input_string1': " . str_word_count($input_string1) . "<br>";

// strcasecmp() - Binary safe case-insensitive string comparison
echo "<h1>strcasecmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2': " . strcasecmp($input_string1, $input_string2) . "<br>";

// strchr() - Alias of strstr
echo "<h1>strchr()</h1>";
echo "Substring starting from 's' in '$input_string1': " . strchr($input_string1, 's') . "<br>";

// strcmp() - Binary safe string comparison
echo "<h1>strcmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2': " . strcmp($input_string1, $input_string2) . "<br>";

// strcoll() - Locale based string comparison
echo "<h1>strcoll()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' (locale-based): " . strcoll($input_string1, $input_string2) . "<br>";

// strcspn() - Find length of initial segment not matching mask
echo "<h1>strcspn()</h1>";
echo "Length of initial segment not matching 'Vasanth': " . strcspn($input_string1, 'Vasanth') . "<br>";

// strip_tags() - Strip HTML and PHP tags from a string
echo "<h1>strip_tags()</h1>";
echo "Stripped HTML tags from '$html_string': " . strip_tags($html_string) . "<br>";

// stripcslashes() - Un-quote string quoted with addcslashes
echo "<h1>stripcslashes()</h1>";
echo "Unquoted string: " . stripcslashes($quoted_string) . "<br>";

// stripos() - Find the position of the first occurrence of a case-insensitive substring in a string
echo "<h1>stripos()</h1>";
echo "Position of 'san' in '$input_string1': " . stripos($input_string1, 'san') . "<br>";

// stripslashes() - Un-quotes a quoted string
echo "<h1>stripslashes()</h1>";
echo "Unquoted string: " . stripslashes($quoted_string) . "<br>";

// stristr() - Case-insensitive strstr
echo "<h1>stristr()</h1>";
echo "Substring starting from 'San' in '$input_string1': " . stristr($input_string1, 'San') . "<br>";

// strlen() - Get string length
echo "<h1>strlen()</h1>";
echo "Length of '$input_string1': " . strlen($input_string1) . "<br>";

// strnatcasecmp() - Case insensitive string comparisons using a "natural order" algorithm
echo "<h1>strnatcasecmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' (natural order): " . strnatcasecmp($input_string1, $input_string2) . "<br>";

// strnatcmp() - String comparisons using a "natural order" algorithm
echo "<h1>strnatcmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' (natural order): " . strnatcmp($input_string1, $input_string2) . "<br>";

// strncasecmp() - Binary safe case-insensitive string comparison of the first n characters
echo "<h1>strncasecmp()</h1>";
echo "Comparison result of first 3 characters of '$input_string1' and '$input_string2': " . strncasecmp($input_string1, $input_string2, 3) . "<br>";

// strncmp() - Binary safe string comparison of the first n characters
echo "<h1>strncmp()</h1>";
echo "Comparison result of first 3 characters of '$input_string1' and '$input_string2': " . strncmp($input_string1, $input_string2, 3) . "<br>";

// strpbrk() - Search a string for any of a set of characters
echo "<h1>strpbrk()</h1>";
echo "Substring starting from first matching character in '$input_string1': " . strpbrk($input_string1, 'sth') . "<br>";

// strpos() - Find the position of the first occurrence of a substring in a string
echo "<h1>strpos()</h1>";
echo "Position of 'santh' in '$input_string1': " . strpos($input_string1, 'santh') . "<br>";

// strrchr() - Find the last occurrence of a character in a string
echo "<h1>strrchr()</h1>";
echo "Substring from last 's' in '$input_string1': " . strrchr($input_string1, 's') . "<br>";

// strrev() - Reverse a string
echo "<h1>strrev()</h1>";
echo "Reversed '$input_string1': " . strrev($input_string1) . "<br>";

// strripos() - Find the position of the last occurrence of a case-insensitive substring in a string
echo "<h1>strripos()</h1>";
echo "Position of last 'a' in '$input_string1': " . strripos($input_string1, 'a') . "<br>";

// str_repeat() - Repeat a string
echo "<h1>str_repeat()</h1>";
echo "Repeated '$input_string1' 3 times: " . str_repeat($input_string1, 3) . "<br>";

// str_replace() - Replace all occurrences of the search string with the replacement string
echo "<h1>str_replace()</h1>";
echo "Replaced 'santh' with 'SANTH' in '$input_string1': " . str_replace("santh", "SANTH", $input_string1) . "<br>";

// str_rot13() - Perform the rot13 transform on a string
echo "<h1>str_rot13()</h1>";
echo "ROT13 transformation of 'Hello': " . str_rot13("Hello") . "<br>";

// str_shuffle() - Randomly shuffles a string
echo "<h1>str_shuffle()</h1>";
echo "Shuffled version of '$input_string1': " . str_shuffle($input_string1) . "<br>";

// str_split() - Convert a string to an array
echo "<h1>str_split()</h1>";
$array_of_characters = str_split($input_string1);
echo "Characters in '$input_string1': ";
print_r($array_of_characters);
echo "<br>";

// str_starts_with() - Checks if a string starts with a given substring
echo "<h1>str_starts_with()</h1>";
echo "Does '$input_string1' start with 'Vas'? " . (str_starts_with($input_string1, 'Vas') ? 'Yes' : 'No') . "<br>";

// str_word_count() - Return information about words used in a string
echo "<h1>str_word_count()</h1>";
echo "Word count in '$input_string1': " . str_word_count($input_string1) . "<br>";

// strcasecmp() - Binary safe case-insensitive string comparison
echo "<h1>strcasecmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2': " . strcasecmp($input_string1, $input_string2) . "<br>";

// strchr() - Alias of strstr
echo "<h1>strchr()</h1>";
echo "Substring starting from 's' in '$input_string1': " . strchr($input_string1, 's') . "<br>";

// strcmp() - Binary safe string comparison
echo "<h1>strcmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2': " . strcmp($input_string1, $input_string2) . "<br>";

// strcoll() - Locale based string comparison
echo "<h1>strcoll()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' (locale-based): " . strcoll($input_string1, $input_string2) . "<br>";

// strcspn() - Find length of initial segment not matching mask
echo "<h1>strcspn()</h1>";
echo "Length of initial segment not matching 'Vasanth': " . strcspn($input_string1, 'Vasanth') . "<br>";

// strip_tags() - Strip HTML and PHP tags from a string
echo "<h1>strip_tags()</h1>";
echo "Stripped HTML tags from '$html_string': " . strip_tags($html_string) . "<br>";

// stripcslashes() - Un-quote string quoted with addcslashes
echo "<h1>stripcslashes()</h1>";
echo "Unquoted string: " . stripcslashes($quoted_string) . "<br>";

// stripos() - Find the position of the first occurrence of a case-insensitive substring in a string
echo "<h1>stripos()</h1>";
echo "Position of 'san' in '$input_string1': " . stripos($input_string1, 'san') . "<br>";

// stripslashes() - Un-quotes a quoted string
echo "<h1>stripslashes()</h1>";
echo "Unquoted string: " . stripslashes($quoted_string) . "<br>";

// stristr() - Case-insensitive strstr
echo "<h1>stristr()</h1>";
echo "Substring starting from 'San' in '$input_string1': " . stristr($input_string1, 'San') . "<br>";

// strlen() - Get string length
echo "<h1>strlen()</h1>";
echo "Length of '$input_string1': " . strlen($input_string1) . "<br>";

// strnatcasecmp() - Case insensitive string comparisons using a "natural order" algorithm
echo "<h1>strnatcasecmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' (natural order): " . strnatcasecmp($input_string1, $input_string2) . "<br>";

// strnatcmp() - String comparisons using a "natural order" algorithm
echo "<h1>strnatcmp()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' (natural order): " . strnatcmp($input_string1, $input_string2) . "<br>";

// strncasecmp() - Binary safe case-insensitive string comparison of the first n characters
echo "<h1>strncasecmp()</h1>";
echo "Comparison result of first 3 characters of '$input_string1' and '$input_string2': " . strncasecmp($input_string1, $input_string2, 3) . "<br>";

// strncmp() - Binary safe string comparison of the first n characters
echo "<h1>strncmp()</h1>";
echo "Comparison result of first 3 characters of '$input_string1' and '$input_string2': " . strncmp($input_string1, $input_string2, 3) . "<br>";

// strpbrk() - Search a string for any of a set of characters
echo "<h1>strpbrk()</h1>";
echo "Substring starting from first matching character in '$input_string1': " . strpbrk($input_string1, 'sth') . "<br>";

// strpos() - Find the position of the first occurrence of a substring in a string
echo "<h1>strpos()</h1>";
echo "Position of 'santh' in '$input_string1': " . strpos($input_string1, 'santh') . "<br>";

// strrchr() - Find the last occurrence of a character in a string
echo "<h1>strrchr()</h1>";
echo "Substring from last 's' in '$input_string1': " . strrchr($input_string1, 's') . "<br>";

// strrev() - Reverse a string
echo "<h1>strrev()</h1>";
echo "Reversed '$input_string1': " . strrev($input_string1) . "<br>";

// strripos() - Find the position of the last occurrence of a case-insensitive substring in a string
echo "<h1>strripos()</h1>";
echo "Position of last 'a' in '$input_string1': " . strripos($input_string1, 'a') . "<br>";

// strrpos() - Find the position of the last occurrence of a substring in a string
echo "<h1>strrpos()</h1>";
echo "Position of last 'a' in '$input_string1': " . strrpos($input_string1, 'a') . "<br>";

// strspn() - Find the length of the initial segment of a string consisting entirely of characters contained within a given mask
echo "<h1>strspn()</h1>";
echo "Length of initial segment of '$input_string1' consisting entirely of 'Vas': " . strspn($input_string1, 'Vas') . "<br>";

// strstr() - Find the first occurrence of a string
echo "<h1>strstr()</h1>";
echo "Substring starting from 'San' in '$input_string1': " . strstr($input_string1, 'San') . "<br>";

// strtok() - Tokenize string
echo "<h1>strtok()</h1>";
$token = strtok($input_string1, "s");
while ($token !== false) {
    echo "Token: $token<br>";
    $token = strtok("s");
}

// strtolower() - Make a string lowercase
echo "<h1>strtolower()</h1>";
echo "Lowercase version of '$input_string1': " . strtolower($input_string1) . "<br>";

// strtoupper() - Make a string uppercase
echo "<h1>strtoupper()</h1>";
echo "Uppercase version of '$input_string1': " . strtoupper($input_string1) . "<br>";

// strtr() - Translate characters or replace substrings
echo "<h1>strtr()</h1>";
echo "Translated string: " . strtr($input_string1, 'Vas', 'XYZ') . "<br>";

// substr_compare() - Binary safe comparison of two strings from an offset, up to length characters
echo "<h1>substr_compare()</h1>";
echo "Comparison result of '$input_string1' and '$input_string2' starting from offset 2: " . substr_compare($input_string1, $input_string2, 2) . "<br>";

// substr_count() - Count the number of substring occurrences
echo "<h1>substr_count()</h1>";
echo "Number of occurrences of 'a' in '$input_string1': " . substr_count($input_string1, 'a') . "<br>";

// substr_replace() - Replace text within a portion of a string
echo "<h1>substr_replace()</h1>";
echo "Replaced 'santh' with 'SAN' in '$input_string1': " . substr_replace($input_string1, 'SAN', strpos($input_string1, 'santh'), strlen('santh')) . "<br>";

// substr() - Return part of a string
echo "<h1>substr()</h1>";
echo "Substring of '$input_string1' from position 2: " . substr($input_string1, 2) . "<br>";

// trim() - Strip whitespace (or other characters) from the beginning and end of a string
echo "<h1>trim()</h1>";
echo "Trimmed version of '$input_string1': " . trim($input_string1, 'V') . "<br>";

// ucfirst() - Make a string's first character uppercase
echo "<h1>ucfirst()</h1>";
echo "First character uppercase of '$input_string1': " . ucfirst($input_string1) . "<br>";

// ucwords() - Uppercase the first character of each word in a string
echo "<h1>ucwords()</h1>";
echo "Each word uppercase in '$input_string1': " . ucwords($input_string1) . "<br>";

// vfprintf() - Write a formatted string to a stream
echo "<h1>vfprintf()</h1>";
$file_handle = fopen("output.txt", "w");
vfprintf($file_handle, "Hello, %s!", ["world"]);
fclose($file_handle);
echo "Formatted string written to file 'output.txt'.<br>";

// vprintf() - Output a formatted string
echo "<h1>vprintf()</h1>";
vprintf("Hello, %s!<br>", ["world"]);

// vsprintf() - Return a formatted string
echo "<h1>vsprintf()</h1>";
echo "Formatted string: " . vsprintf("%s is %d years old", ["Vasanth", 25]) . "<br>";

// wordwrap() - Wraps a string to a given number of characters
echo "<h1>wordwrap()</h1>";
echo "Wrapped string:<br>" . wordwrap($input_string1, 3, "<br>", true) . "<br>";

?>


