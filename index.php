<?


/* 
//$var is integer now
$var = 2;

//$var is string now
$var = "John";
*/



/* 
<?php $variable = "12"; ?>

<script>
var variable = <?php echo $variable ;?>;
</script>
*/



/* 
$a = "15";

//string(2) "15"
var_dump($a);

$a = (int)$a;

//int(15)
var_dump($a);
*/


/* 
const VEHICLE = "Auto";
define("CITY","New York"); 

//Ok!
if(defined("VEHICLE")){
	echo "Ok!";
}

//Ok!
if(defined("CITY")){
	echo "Ok!";
}
*/


/* 
$line_1 = __LINE__;
echo $line_1;

$line_2 = __LINE__;
echo $line_2;
*/



/* 
$path = __DIR__;

echo $path;
*/


/* 
$variable = 2;
$x = "variable";
$y = $$x;
echo $y;
*/


/* 
$x = 2;
echo gettype($x);
*/


/* 
$array = [
	"name" => 2,
	"age" => 22
];

echo "<pre>";
var_dump($array);
print_r($array);
echo "</pre>";
*/


/* 
if(true > false){
	echo "hello";
}
*/


/* 
$x = false;
$y = 0;

// Ok!
if($x == $y){
	echo "Ok!";
}

// Nothing happens
if($x === $y){
	echo "Ok!";
}
*/



/* 
$x = true;
$y = true;

//Ok!
if($x or $y){
	echo "Ok!";
}

//Nothing happens
if($x xor $y){
	echo "Ok!";
}
*/


/* 
//nothing happens
$i = 7; 
while($i<5){
	echo $i;
	$i++;
}

// writes "7"
$i = 7; 
do{
	echo $i;
	$i++;
} while($i<5);
*/


/* 
function myFunction($x=2){
	return $x;
}
*/


/* 
function someFunc(bool $arg, bool $arg2){
	return print $arg." ".$arg2;
}
*/


/* 
function someFunc($arg) : int{
	return $arg;
}
*/



/* 
function myFunc(Auto $arg){
	return $arg;
}
*/


/* 
function staticFunc() { 
	static $num = 2;
	return $num++; 
} 

print staticFunc();     
print staticFunc();     
print staticFunc();     
*/	


/* 
function myFunction(){
	global $arg;
	return $arg;
}
*/


/*
$min = 3;
$elements = [2,3,4,5,6];

$result = array_filter($elements, function($el) use ($min){ 
	return $el > $min; 
});
*/


/* 
$array = ["dog","giraffe","cat"];
*/


/* 
$elements = ["very good",3,4,"strong",6];

$result = array_filter($elements, function($el){ 
	return is_string($el); 
});
*/


/* 
$car1 = [
	"type" => "BMW",
	"age" => 22
];

$car2 = [
	"age" => 22,
	"type" => "Volvo",
];

if($car1 === $car2){
	echo "Ok!";
}
*/


/* 
$string = implode(', ',["John","Jane","Andrea"]);

//John, Jane, Andrea
echo($string);
*/	



/* 
$string = "1,2,3,4,5";
$array = explode(',',$string);

//Array [1,2,3,4,5]
print_r($array);

$string = implode(',',$array);

//String "1,2,3,4,5"
print_r($string);
*/


/* 
$elements = ["banana","mango","apple"];
array_push($elements,"orange");
*/	


/* 
$elements = ["banana","mango","apple","apple","banana"];

echo(array_search("apple",$elements));
*/


/* 
$elements = [
	"name" => "John",
	"age" => 22,
	"degree_year" => 22,
	"salary" => 5000
];
*/



/* 
$str_1 = " Hello ";
$str_2 = "Hello John!";

//"Hello "
echo ltrim($str_1);
//"Hello"
echo trim($str_1);

//"o John!"
echo ltrim($str_2,"Hell");

//"llo Joh"
echo trim($str_2,"Hen!");
*/


/* 
header("Location: https://google.com");
*/


/* 
//"language"-returns 9 characters after the first characters
echo substr("Learn PHP language!",9,9); 

//"language!"-returns the remaining after the first characters
echo substr("Learn PHP language!",9); 


//"PHP language!"-returns the remaining after the first occurrence
echo strstr("Learn PHP language!","PHP"); 

//"Learn"-returns the characters before the first occurence
echo strstr("Learn PHP language!","PHP",true);
*/


/* 
//year-month-day
echo "The date is now: ". date("Y-m-d");

$date = mktime(14, 30, 0, 6, 11, 2028);

//2028-06-11
echo date("Y-m-d",$date);
*/





/*
echo $_SERVER['REMOTE_ADDR'];


/* 
if(isset($_GET['param'])){
	$var = $_GET['param'];
	echo $var;
}
*/


/* 
$string_from_db = "What the shirt\'s color?";
*/


/* 
$username = "John Doe12";

if(preg_match("/^[a-z\s\d_]{5,30}$/i",$username)){
	echo "OK";
}
*/


/* 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "This is a valid email adress!";
} 
*/



/* 
class Auto{
	public static $total_count = 200;
}

echo Auto::$total_count;
*/


/* 
class A{

}

class B extends A{

} 

class C extends A,B{

}
*/


/* 
ini_set('display_errors', '0');

//not throwing an error
echo $variable;
*/


/* 
$elements = ["el1","el2","el3"];

//Notice error
echo $elements;

//Warning error
echo PERSON;

//Fatal error
$instance = new Vehicle;
*/


/* 
$elements = ["el1","el2","el3"];

//Notice error
echo $elements;

//Warning error
echo PERSON;

//Fatal error
$instance = new Vehicle;
*/


/* 
$elements = ["el1","el2","el3"];

//Notice error
echo $elements;

//Warning error
echo PERSON;

//Fatal error
$instance = new Vehicle;
*/


