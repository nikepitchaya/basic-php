<?php
$firstname="พิชยะ"; //string
$lastname="คชารัตน์ไพศาล";
$nickname="ไนกี้";
$salary=2.2; //double
$isvalid=false; //bool

echo "<h2>Display Variable</h2>"."<br>";
echo "ข้อมูลนักศึกษา<br>";
echo "ชื่อ : ".$firstname."<br>";
echo "นามสกุล : ".$lastname."<br>";
echo "ชื่อเล่น : ".$nickname."<br>";
echo "เงินเดือน\t: ".$salary."\tบาท"."<br>";
echo "<hr>";

echo "<h2>Gettype and Settype Functional</h2>"."<br>";
$salary=100+$salary; //100+2.2 
echo "เงินโบนัส\t:".$salary."\tบาท"."<br>";
echo "ชนิดตัวแปรก่อนเปลี่ยน : ".gettype($salary)."<br>";
settype($salary,"integer");
echo "ชนิดตัวแปรหลังเปลี่ยน : ".gettype($salary)."<br>";
echo "ค่าหลังเปลี่ยน : ".$salary."<br>";
echo gettype($isvalid)."<br>";
echo "<hr>";

echo "<h2>Type Casting</h2>"."<br>";
$price="500.55";   //string
$dalivery=50;   //int
$total=$price+$dalivery; 
echo $total."<br>"; //php จะเข้าเปลี่ยนค่าตัวเลขที่อยู่ในสตริงให้เป็นค่าที่สามารถคำนวณได้
echo "ก่อนแปลง".gettype($total)."<br>";
$total=(integer)$total; //type casting
echo "หลังแปลง".gettype($total)."<br>";
echo  $total."<br>"; 
echo "<hr>";

echo "<h2>Constant</h2>";
define("SCORE",200);
$money=200+SCORE;
echo "constant : ".SCORE."<br>";
echo "money = ".$money."<br>";
echo "<hr>";
?>