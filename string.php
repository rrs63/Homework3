<?php
echo "<h1>IS601Websystem</h1>";
echo "<h2> StringFunction</h2>";

echo "<h2> 1.Explode Command </h2>";
$Hubby = 'I love dhiren';
$Words = explode(" ", $Hubby);
echo "Original String : $Hubby<br>";
echo "After Explode Words[1] : $Words[1]";
echo "<hr>";

echo "<h2> 2.stripos Command </h2>";
$str = 'The quick brown fox jumps over the lazy dog.';
echo "Original String : $str<br>";
echo "Position of LAZY word is : " . stripos($str,'lazy') ."<br>";
echo "<hr>";

echo "<h2> 3.substr Command </h2>";
echo "Original String :$str<br>";
echo "substring from 4 : " . substr($str,4,6) . "<br>";
echo "substring from back : " . substr($str,-5) . "<br>";
echo "<hr>";

echo "<h2> 4.str_replace(search, replace, subject) Command </h2>";
$msg = "I love PHP!";
echo "Original String :$msg<br>";
echo str_replace("love", "hate", $msg);
echo "<hr>";

echo "<h2> 5.str_repeat(input, multiplier)</h2>";
echo str_repeat("True False", 12 ); 
echo "<hr>";

echo "<h2> 6.chr Command </h2>";
echo "Character for ASCII value 110 : ";
$num = 110;
echo chr($num)."<br>";
echo "<hr>";

echo "<h2> 7.chop Command </h2>";
echo "<prep>";
echo chop ("    Visnu   ");
echo chop (" Visnunarayan", "a..z");
echo "</prep>";
echo "<hr>";

echo "<h2> 8.str_split Command </h2>";
$str = "Hello Friend";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
echo "Original String : " . $str . "<br>";
echo "str_split($str) : ". $arr1[0]  ."  " . $arr1[1]. "  ".$arr1[2] ."<br>";
echo "str_split($str,3) : ". $arr2[0]  ."  " . $arr2[1]. "  " .$arr2[2]."<br>";
echo "<hr>";

echo "<h2> 9.strcmp Command </h2>";
$str1 = "Hello Friend";
$str2 = "Hello Friend";
$str3 = "Hi Friend3";
echo   $str1. " and ".$str2 . " are ". strcmp($str1,$str2)."<br>";
echo   $str1. " and ".$str3 . " are ". strcmp($str1,$str3);   
echo "<hr>";

echo "<h2> 10. str_shuffle Command </h2>";
$msg = "I love PHP!";
echo "Original String :$msg<br>";
echo str_shuffle($msg);
echo "<hr>";

?>
