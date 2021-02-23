<?php
require_once '03.php';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$calculator = new Calculator($num1,$num2,$cal);

echo  $calculator->getResult();