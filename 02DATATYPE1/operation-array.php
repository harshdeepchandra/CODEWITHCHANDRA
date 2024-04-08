<?php
 #-----------------------------CHANGING ARRAY DATA 
echo '<h1>Changing Data in array </h1>';
$num=array("cat","rat",10.9,107,'a');
echo '<br> a) BEFORE CHANING <pre>';
print_r($num);
echo '</pre>';
$num[0]="cow";
echo '<br>';
$num[2]= 9.8;
echo '<br> b) AFTER CHANGING <pre>';
print_r($num);
echo '</pre>';
?>
<?php echo '<h1>Add Data in array </h1> <br>'; ?>
<?php
# ------------------------------ADD DATA IN ARRAY
$num=array("cat","rat",10.9,107,'a');
echo '<br> c) before adding array <pre>';
print_r($num);
echo '</pre>';
$num[]= 3.14;
$num[]="rabbit";
echo '<br> d)after adding array<pre>';
print_r($num);
echo '</pre>';
?>
<?php
# ------------------------------short hand of array PHPv5.3
 echo '<h1>shorthand of array </h1> <br>'; 
 //$num=array(1,2,3); old method 
 $num=[1,2,3]; #shorthand 
 echo '<pre>';
 print_r($num);
 echo '</pre>';
 ?>