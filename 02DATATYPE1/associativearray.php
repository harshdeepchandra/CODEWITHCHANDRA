<?php
#---------------Index array
echo '<h1> Index array </h1>';
$num=array("cat","rat","batman",6.022,295,911);
echo '<pre>';
print_r($num);
echo '</pre>';
#---------------Associative array
echo '<h1>Associative array </h1> <br>';
$asso=array("a"=>9813 ,"b"=>123 ,"p"=>677,"batman"=>"me");
# a,b,batman are  keys of array 
# 9813 are values 
# associative array are more secure than index 
echo '<pre>';
print_r($asso);
echo '</pre>';
echo '<h1>Associative array also use as index array  </h1> <br>';
$asso1=array("a"=>9813 ,"rat","b"=>123 ,"p"=>677,"cat","batman"=>"me",1,295);
echo '<pre>';
print_r($asso1);
echo '</pre>';
#for changing 
$asso1["a"]=1398;
echo '<pre>';
print_r($asso1);
echo '</pre>';
?>