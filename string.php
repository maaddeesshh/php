<?php 
$str = "hello,World!!!!";
echo $str[0];
echo $str[-1];
echo substr($str,0,6);// 6 is the length of characters to be 
echo substr($str,6); // no length it will grab everything from the starting position
echo ucfirst(strtolower($str));
echo ucfirst($str);






$greetings = "Hello" . "Sasa";
$greetings  .= "Holla";  // APPENDING ....they must share the same variable name 
echo $greetings;



$GREET = "Madesh";
$GREET .= "You're always neat";
echo $GREET;




echo strpos($str, "hello");
echo str_replace("hello","Holla", $str);


$Name = " Alice";
$age = 99;
printf("%s is %d years old." , $Name , $age);




$csv = "Apple,Mango, Banana, Orange";
print_r(explode(",", $csv)) ;


echo trim("     Hello      ");
$medono = "سبحان الله";
echo mb_strlen($medono) ;




$url = "https://aimsoft.udemy.com/course/laravel-beginner-fundamentals/learn/lecture/46135881#questions";
 echo $url;
 echo urlencode($url). "\n";

 echo urldecode(urlencode($url));


 $number=123.584893;
 echo number_format($number, 4, ".",",");