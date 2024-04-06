<?php
// $numb = 1,2,3,4,5 ;
# Solution is Array
$numb = array(1,2,3,4,5) ;
#(Warning: Array to string conversion in C)
//echo $numb; 
//print $numb ;
# array pre define function use print_r()
echo '<h2>Array (index array)</h2>';
echo 'echo is used for print single single elements of array '; 
echo 'print(print_r()) is use to print whole array'; 
echo '<hr>';
print_r($numb);
echo '<hr>';
echo $numb[0];
echo $numb[0]+$numb[3];
echo '<hr>';
# pre tag :- <pre> tag defines preformatted text. The text will be displayed exactly as written in the HTML source code.
echo '<pre>';
print_r($numb);
echo '</pre>';

?>
