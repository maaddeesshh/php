<?php 
$str = "hello,World!!!!";
echo $str[0];
echo $str[-1];
echo substr($str,0,6);// 6 is the length of characters to be 
echo substr($str,6); // no length it will grab everything from the starting position
echo ucfirst(strtolower($str));
echo ucfirst($str);






$greetings = "Hello" . "Sasa";
$greetings  .= "Holla";  // APPENDING 
echo $greetings;



$GREET = "Madesh";
$GREET .= "You're always neat";
echo $GREET;




echo strpos($str, "hello");
echo str_replace("hello","Holla", $str);