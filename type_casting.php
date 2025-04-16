<?php
$a=5;
$a=true;
$a= (string) $a;

$b="300";
$b= (int) $b;

$c = 1;
$c= (float) $c;

$d="hello";
$d= (boolean) $d;
var_dump($d);

$e= 10;
$e= (array) $e;

$f=20;
$f= (object) $f;
var_dump($f);

$x=["30"];
$x= (string) $x;
var_dump($x);
?>