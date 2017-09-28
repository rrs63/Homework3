<?php


echo "<h1>IS601Websystem</h1>";
echo "<h2> ArrayFunction</h2>";

echo "<h2> 1.array_combine Command </h2>";
$a = array ('Nissan' , 'Toyota', 'Honda');
$b = array ('Altima', 'Camry', 'Accord');
$c = array_combine ($a, $b);
print_r($c);
echo "<hr>";


echo "<h2> 2.array_diff Command </h2>";
$msg1 = array("coffee", "tea", "milk");
$msg2 = array("coffee", "wine", "tea");
$output = array_diff($msg1, $msg2);
print_r($output);
echo "<hr>";


echo "<h2> 3.array_Values Command </h2>";
$array = array("Iphone" => "7plus", "color" => "Rose gold");
print_r(array_values($array));
echo "<hr>";


echo "<h2> 4.array_key_exists Command </h2>";
if (array_key_exists('Iphone', $array)) {
    echo "The 'Iphone' key is in the array";
}
echo "<hr>";


echo "<h2> 5.sum Command </h2>";
$a = array(2, 4, 6, 8);
print_r($a);
echo "<br>";
echo "sum(a) = " . array_sum($a) . "\n";
echo "<hr>";


echo "<h2> 6.array_slice($a,1,2) Command </h2>";
print_r($a);
echo "<br>";
print_r(array_slice($a,1,2));
echo "\n";
echo "<hr>";


echo "<h2> 7.array_shift Command </h2>";
echo "Before shifting : ";
print_r($a);
array_shift($a);
echo "<br>After shifting : ";
print_r($a);
echo "<hr>";


echo "<h2> 8.array_search Command </h2>";
print_r($msg1);
echo  "<br>tea is at key number : " . array_search('tea', $msg1);
echo "<hr>";


echo "<h2> 9.array_replace Command </h2>";
$msg2 = array("coffee", "wine", "tea");
print_r($msg2);
$replacements = array(1 => "beer", 3 => "vodka");
echo "<br> After Replacement <br>";
$output = array_replace($msg2, $replacements);
print_r($output);
echo "<hr>";


echo "<h2> 10.array_merge Command </h2>";
$a = array ('Nissan' , 'Toyota', 'Honda');
$b = array ('Altima', 'Camry', 'Accord');
echo "Array 1 : ";
print_r($a);
echo "<br>";
echo "Array 2 : ";
print_r($b);
echo "<br>";
$result = array_merge($a, $b);
echo "After merge : ";
print_r($result);
echo "<hr>";

?>