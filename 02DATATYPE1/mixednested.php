<?php
$mixed=array(101,"harsh",10.28,'india', array("a","b","c",array("x","y" ,"z")),201,202);
$alph=array("a","b","c","d",array("e","f","g","h",array("i","j","k","l",array("m","n","o","p",array("q","r","s","t",array("u","v","w","x",array("y","z")))))));
echo '<pre>';
print_r($mixed) ;
echo '</pre>';
 $mixed[0]="book";
 $mixed[4][1]="b";
 $mixed[4][3][1]="t";
 echo $mixed[0];
echo $mixed[4][1];
echo $mixed[4][3][1];
echo '<hr>';
echo $alph[4][3];
echo $alph[0];
echo $alph[4][4][4][4][1];
echo $alph[4][4][4][4][2];
echo $alph[4][3];
echo $alph[3];
echo $alph[4][0];
echo $alph[4][0];
echo $alph[4][4][4][3];
?>