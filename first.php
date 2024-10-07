<html>
  <body>
    <h1>Welcome to php</h1>
<!-- standard tag -->
<?php
echo "Hello World";
?>
<!-- short eco tag -->
 <?="Welcome to PHP";?>
 <!-- addition -->
 <?php
echo 10+10;
?>
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>
<?php
$a=10;
echo $a;
var_dump($a);
var_dump(5);
echo"<br>";
var_dump("hello");
echo"<br>";
var_dump(10.5);
echo"<br>";
var_dump(5,6,7);
echo"<br>";
var_dump(null);
echo"<br>";
echo<<<FINISH
Example document.
FINISH;
echo"<br>";
$fruits=array("apple","mango","orange");
var_dump($fruits);
echo"<br>";
$intArray=array(10,20,30);
echo"First Element:$intArray[0]\n";
echo"Second Element:$intArray[1]\n";
echo"Third Element:$intArray[2]\n";
echo"<br>";
var_dump($intArray);
echo"<br>";
$fruits=['apple','banana','orange'];
$person=['name'=>'John','age'=>30,'location'=>'New York'];
echo $person['name'];
echo"<br>";
$handle=fopen("note.txt","r");
var_dump($handle);
echo"<br>";
$b="helloworld";
$b=NULL;
var_dump($b);
define("PI",3.1459);
echo"The value of PI is: ",PI,"<br>";
// const WISHES="Good day";
// echo WISHES;
define("WISHES", "Good Evening");
echo WISHES. "<br>";
echo constant("WISHES");
//both are similar
echo"<br>";
echo "The line number is: ",__line__;
echo"<br>";
echo "The file is: ",__file__;
// echo __class__;
// echo __function__;
// echo __method__;
echo"<br>";
echo "php version is: ", PHP_VERSION;
echo"<br>";
define("courses", [
  "PHP",
  "HTML",
  "CSS"
  ]);
echo courses[0];
echo"<br>";
echo courses[1];
echo"<br>";
echo courses[2];
//Arithmetic Operators
$x = 10;
$y = 4;
echo($x + $y); 
echo "<br>";
echo($x - $y); 
echo "<br>";
echo($x * $y); 
echo "<br>";
echo($x / $y); 
echo "<br>";
echo($x % $y);
echo "<br>";
echo($x ** $y); 
echo "<br>";
$x = 20;
$x += 30;
echo $x; 
echo "<br>";
$x = 50;
$x -= 20;
echo $x; 
echo "<br>";
$x = 5;
$x *= 25;
echo $x; 
echo "<br>";
$x = 50;
$x /= 10;
echo $x; 
echo "<br>";
$x = 100;
$x %= 15;
echo $x;

//Comparison Operator
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z); 
var_dump($x === $z); 
var_dump($x != $y); 
var_dump($x !== $z); 
var_dump($x < $y); 
var_dump($x > $y); 
var_dump($x <= $y); 
var_dump($x >= $y); 

//Increment/Decrement Operator
echo "<br>";
$x = 10;
echo ++$x;  
echo "<br>";
echo $x; 
echo "<br>";
$x = 10;
echo $x++;
echo "<br>"; 
echo $x; 
echo "<br>";
$x = 10;
echo --$x; 
echo "<br>";
echo $x; 
echo "<br>";
$x = 10;
echo $x--; 
echo "<br>";
echo $x;
echo "<br>";
//String Operator
$x = "Hello";
$y = " World!";
echo $x . $y; 
echo "<br>";
$x .= $y;
echo $x;
echo "<br>";
//Ternary Operator
echo $status = (empty($user)) ? "anonymous" : $user;
echo "<br>";
$user = "Michael";
echo $status = (empty($user)) ? "anonymous" : $user;
//Logical operator
echo "<br>";
$x = 1;
$status = ($x % 2 == 0) ? "even" : "odd";
echo $status;
echo "<br>";

//area of circle 
function calculateCircleArea($radius) {
    if ($radius <= 0) {
        return "Radius should be a positive number.";
    }
    $area = pi() * pow($radius, 2);
    return $area;
}
$radius = 5;
echo "The area of the circle with radius $radius is: " . calculateCircleArea($radius);
echo "<br>";

//do-while loop
$i = 1;
do {
    $i++;
    echo "The number is " . $i . "<br>";
} while ($i < 3);
echo "<br>";

//for loop
for($i=1; $i<=3; $i++){
  echo "The number is " . $i . "<br>";
  }
  echo "<br>"; 

//two-loops counter
for($a1=1,$a2=2; $a1<6 && $a2<6; $a1++, $a2++)
{
  echo "$a1*$a2=",$a1*$a2,"<br>";
}
echo "<br>"; 

//table of 2
for($a1 = 1, $a2 = 2; $a1 <= 10; $a1++) {  
    echo "$a2 * $a1 = " . ($a2 * $a1) . "<br>";  
}
echo "<br>"; 

//for each loop
$superhero = array(
  "name" => "Stuti Sharma",
  "branch" => "CSE",
  "ID" => 12112423
  );
  foreach($superhero as $key => $value){
  echo $key . " : " . $value . "<br>";
  }
  echo "<br>"; 

//even numbers using break

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i<br/>";
    }
    if ($i == 20) {
        break;
    }
}
$number=array("One","Two","Three","Stop","Four");
foreach($number as $element){
if($element == "Stop"){
  break;
}
echo "$element </br>";
}
echo "<br>"; 
//php program to demonstrate the use of continue statement

echo "Even numbers between 1 to 20: </br>";
$i = 1;
while ($i<=20) {
if ($i %2 == 1) {
$i++;
continue; 
}
echo $i;
echo "</br>";
$i++;
}
echo "</br>";
echo strlen("welcome to lpu");
echo "</br>";
// echo strpos
// str_word_count
// str_replace
$arr1=array(10,"asd",1.55,true);
$arr2=array("one"=>1,"two"=>2,"three"=>3);
$arr3=array(array(10,20,30),array("ten","twenty","thirty"),array("physics"=>70,"chemistry"=>30,"maths"=>50));
// var_dump($arr1);
print_r($arr1);
echo "</br>";
// var_dump($arr2);
print_r($arr2);
echo "</br>";
// var_dump($arr3);
print_r($arr3);
echo "</br>";
$courses = array("PHP", "Laravel", "Node js"); 
echo "I like " . $courses[0] . ", " . $courses[1] . " and " . $courses[2];
echo "<br>";
echo count($courses);
echo "<br>";
$courseslength = count($courses);
for($x = 0; $x <$courseslength; $x++) {
  echo $courses[$x];
  echo "<br>";
}
foreach($courses as $course){
  echo $course . "<br>";
}
$courses = array("INT220"=>"PHP", "INT221"=>"Laravel", "INT222"=>"Node js");
echo "INT 220 is ".$courses['INT220'].". INT 221 is ".$courses['INT221'].". INT222 is ".$courses['INT222'];
echo "<br>";
$student=array("name"=>"Stuti Sharma","roll_no"=>"12112423","email_id"=>"stuti.shashu@gmail.com");
echo "Name is ".$student['name']. ". Roll no is ".$student['roll_no'].". Email id is ".$student['email_id'];
echo "<br>";
$result = array(
  array("Shreya",7.8,"pass"),
  array("Dikshant",8.5,"pass"),
  array("Aditya",4.9,"fail")
);
echo $result[0][0]. "----CGPA is: " . $result[0][1]." and his status is ".$result[0][2]."<br>";
echo $result[1][0]. "----CGPA is: " . $result[1][1]." and his status is ".$result[1][2]."<br>";
echo $result[2][0]. "----CGPA is: "  . $result[2][1]." and his status is ".$result[2][2];
echo "<br>";
for ($row = 0; $row < 3; $row++) {
  echo "<h4>Row number $row</h4>";
  for ($col = 0; $col < 3; $col++) {
    echo $result[$row][$col]."<br>";
  }
}
$fruits=array("apple","banana","mango");
sort($fruits);
print_r($fruits);
echo "<br>";
rsort($fruits);
print_r($fruits);
echo "<br>";
arsort($fruits);
print_r($fruits);
echo "<br>";
ksort($fruits);
print_r($fruits);
echo "<br>";
krsort($fruits);
print_r($fruits);
echo "<br>";
array_push($fruits,"grapes","papaya");
print_r($fruits);
echo "<br>";
//array_chunk
$courses=array("PHP","Laravel","Node
js","HTML","CSS","ASP.NET");
print_r(array_chunk($courses,2));
$name=array("Manoj","Rahul","Aneesh");
echo "<br>";
//array_combine
$marks=array("75","89","44");
$c=array_combine($name,$marks);
print_r($c);
echo "<br>";
//array_count_values
$a=array("Block 33","Block 34","Block 34","Block 36","Block
36");
print_r(array_count_values($a));
echo "<br>";
//array_diff
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yello
w");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
//array_flip
$a1=array("red","green","blue","yellow");
$result=array_flip($a1);
print_r($result);
echo "<br>";
//array_intersect
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
$result=array_intersect($a1,$a2,$a3);
print_r($result);
echo "<br>";
//array_merge
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
$a3=array("c"=>"orange","b"=>"magenta");
print_r(array_merge($a1,$a2,$a3));
echo "<br>";
//array_pop
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br>";
//array_push
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";
//array_reverse
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
echo "<br>";
//array_search
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
echo "<br>";
//array_slice
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,1,2));
echo "<br>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2,true));
//array_column
$result = array(
  array('name'=>'Manoj','cgpa'=>6.7,'status'=>'pass'),
  array('name'=>"Shalini",'cgpa'=>9.8,'status'=>'pass'),
  array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')
  );
$name = array_column($result, 'name');
print_r($name);
$a[0]="red";
$a[1]="yellow";
$a[2]="green";
$text=implode(" ",$a);
echo $text,"<br>";

$text="red,green,yellow";
$a=explode(" ,",$text);
print_r($a);

// readline('input your name');

// $num1=(int)readline("enter the first number ");
// $num2=(int)readline("enter the second number ");
// echo "\n";
// echo "Sum= ".($num1+$num2)."\n";
// echo "Difference= ".($num1-$num2)."\n";
// echo "Multiplication= ".($num1*$num2)."\n";


// $name=(string)readline("Your name: ");
// $int=(int)readline("Enter roll no: ");
// $float=(float)readline("Enter percentage: ");
// echo "Hello ".$name." The roll no you entered is ".$int ." and the percentage is ".$float;


// $input = readline("Enter numbers separated by spaces: ");
// $numbers = explode(' ', $input);
// $numbers = array_map('floatval', $numbers);
// $sum = array_sum($numbers);
// $count = count($numbers);
// if ($count === 0) {
//     echo "No numbers were entered.";
// } else {
//     $average = $sum / $count;
//     echo "The average of the array elements is " . $average . ".";
// }

// $input = readline("Enter numbers separated by spaces: ");
// $numbers = explode(' ', $input);
// $numbers = array_map('intval', $numbers);
// $evenCount = 0;
// foreach ($numbers as $number) {
//     if ($number % 2 == 0) {
//         $evenCount++;
//     }
// }
// echo "The number of even elements in the array is " . $evenCount . ".";
echo "<br>";
if(is_numeric("guru"))
{
  echo "true";
}
else{echo "false";}
echo "<br>";
if(is_numeric("123"))
{
  echo "true";
}
else{echo "false";}
echo "<br>";
echo number_format(2590663);
echo "<br>";
echo "tan(deg2rad(45)=",tan(deg2rad(45)),"<br>";
echo "pw(4,5)=",pow(4,5),"<br>";
echo "floor(3.1459)=",floor(3.1459),"<br>";
echo "dechex(16)=",dechex(16),"<br>";
echo abs(-5),"<br>";
echo sin(30),"<br>";
echo tan(45),"<br>";
echo sqrt(2),"<br>";
echo log(2),"<br>";
echo ceil(10.578),"<br>";
echo floor(10.578),"<br>";
echo max(10,20,30),"<br>";
echo min(10,20,30),"<br>";
echo "<br>";
echo "\n";
echo "\n";
$angle = readline("Enter angle for tan(deg2rad()): ");
echo "tan(deg2rad($angle)) = " . tan(deg2rad($angle)) . "\n";

$base = readline("Enter base for pow(): ");
$exp = readline("Enter exponent for pow(): ");
echo "pow($base, $exp) = " . pow($base, $exp) . "\n";

$number = readline("Enter a number for floor(): ");
echo "floor($number) = " . floor($number) . "\n";

$decimal = readline("Enter a decimal number for dechex(): ");
echo "dechex($decimal) = " . dechex($decimal) . "\n";

$abs_value = readline("Enter a number for abs(): ");
echo "abs($abs_value) = " . abs($abs_value) . "\n";

$sin_value = readline("Enter an angle for sin(): ");
echo "sin($sin_value) = " . sin(deg2rad($sin_value)) . "\n";

$tan_value = readline("Enter an angle for tan(): ");
echo "tan($tan_value) = " . tan(deg2rad($tan_value)) . "\n";

$sqrt_value = readline("Enter a number for sqrt(): ");
echo "sqrt($sqrt_value) = " . sqrt($sqrt_value) . "\n";

$log_value = readline("Enter a number for log(): ");
echo "log($log_value) = " . log($log_value) . "\n";

$ceil_value = readline("Enter a number for ceil(): ");
echo "ceil($ceil_value) = " . ceil($ceil_value) . "\n";

$floor_value = readline("Enter a number for floor(): ");
echo "floor($floor_value) = " . floor($floor_value) . "\n";

$max_values = readline("Enter numbers separated by commas for max(): ");
$max_array = explode(',', $max_values);
echo "max($max_values) = " . max($max_array) . "\n";

$min_values = readline("Enter numbers separated by commas for min(): ");
$min_array = explode(',', $min_values);
echo "min($min_values) = " . min($min_array) . "\n";
echo "<br>";

$timezone_identifiers = DateTimeZone::listIdentifiers();
foreach($timezone_identifiers as $key => $list) {
    echo $list . "<br>";
}
echo "<br>";
echo "The time in ".date_default_timezone_get()." is ".date("H:i:s");
echo "<br>";
date_default_timezone_set("Asia/Calcutta");
echo "The time in ".date_default_timezone_get()." is ".date("H:i:s");
echo "<br>";

Function welcMsg()
{
  echo "Hello welcome";
}
welcMsg();
echo "<br>";
function StudentsName($firstname)
{
  echo "$firstname<br>";
}
StudentsName("Jai");
StudentsName("Helen");
StudentsName("Stella");
StudentsName("Kamal");
StudentsName("Bob");
echo "<br>";
function addition(&$val)
{
  $val += 10;
}
$number=5;
addition($number);
echo $number;
echo "<br>";
function add(int $a, int $b) {
  return $a+$b;
  }
  echo "5 + 10 = " . add(5,10) . "<br>";
  echo "7 + 13 = " . add(7,13) . "<br>";
  echo "2 + 4 = " . add(2,4);
echo "<br>";  
function circle($r){
  return 3.14*$r*$r;
}
echo "The area of the circle is ".circle(5);
echo "<br>"; 
function setval(int $a=5)
{
  echo "The value is: $a<br>";
}
setval(50);
setval();
setval(13);
setval(40);

//wap to find the sum of two integers,float and string using function
function add1(float $a, float $b) {
  return $a + $b;
  }
  echo add(1.2, 5.2);
  echo "<br>";
//using readline calculate area of circle,triangle
$r = readline("Enter radius");
$area = 3.14 * pow($r, 2);

$comment="<h1>Hey there! How are you doing today?<h1>";
$sanitizedComment=filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
echo "<br>";

$int = 20;
if(filter_var($int,FILTER_VALIDATE_INT))
{
  echo "The <b>$int</b> is a valid integer";
}
else
{
  echo "The <b>$int</b>is not a valid integer";
}
echo "<br>";
$ip = "172.16.254.1";
if(filter_var($ip,FILTER_VALIDATE_IP))
{
  echo "The <b>$ip</b> is a valid ip address";
}
else
{
  echo "The <b>$ip</b>is not a valid ip address";
}
echo "<br>";
$email = "sm@em.com";
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
  echo "The <b>$email</b> is a valid email";
}
else
{
  echo "The <b>$email</b>is not a valid email";
}
echo "<br>";
$email = "jigisha.s@gmail.com";  
$sanitizedEmail=filter_var($email, FILTER_SANITIZE_EMAIL);
if ($email==$sanitizedEmail && filter_var($ip, FILTER_VALIDATE_EMAIL)) {
    echo "The $email is valid email address.";
} else {
    echo "The $email is not a valid email address..";
}
echo "<br>";
$url = "http:://www.example.com";  
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
if ($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)) {
    echo "The $url is a valid URL.";
} else {
    echo "The $url is not a valid URL.";
}
echo "<br>";
//using a refular expression for doing a case insensitive search in the given string using preg function in php

$string = "Hello, Welcome to the World of PHP!";
$pattern = "/php/i";  
if (preg_match($pattern, $string)) {
    echo "The string contains 'php' (case-insensitive search).";
} else {
    echo "The string does not contain 'php'.";
}
echo "<br>";

//use preg_offset_capture to find the position of the string where the match was found
$string = "Hello, Welcome to the World of PHP programming!";
$pattern = "/(php)/i";  
if (preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE)) {
    $match = $matches[0]; 
    $offset = $match[1];  
    echo "Match found: '{$match[0]}' at position $offset.";
} else {
    echo "The string does not contain 'php'.";
}
echo "<br>";

//to validate whether the supplied value is an integer or not as well as whether it lies within the range of 0 to 100 or not
$num = 45; 
if (filter_var($num, FILTER_VALIDATE_INT) !== false) {
  if ($num >= 0 && $num <= 100) {
      echo "$num is a valid integer and is within the range of 0-100.";
  } else {
      echo "$num is a valid integer but is not within the range of 0-100.";
  }
} else {
  echo "$num is not a valid integer.";
}
echo "<br>";
setcookie("username","abc",time()+60*60*24*7);
?> 
</body>
</html>
