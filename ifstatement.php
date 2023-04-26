<?php
$money=500;
$withdraw=100; //ข้อมูลที่กรอก
echo "ยอดเงินของคุณคือ : ".$money."<br>";
echo "จำนวนเงินที่จะถอนคือ : ".$withdraw."<br>";
echo "<hr>";

echo "<h2>If, Elseif statement with And or Not</h2><br>";
$a=$money>=$withdraw;
$b=$withdraw>=0;
$c=$withdraw<=0;
if($a&&$b){
    echo"สามารถถอนเงินได้<br>";
    $money-=$withdraw;
    echo"ยอดเงินของคุณคงเหลือ : ".$money."<br>";
}
elseif(!$a&&$b){
    echo"จำนวนเงินของคุณไม่พอ<br>";
}
elseif($c){
    echo"กรุณากรอกข้อมูลใหม่ค่าที่ใส่ไม่ควรติดลบ<br>";
}
echo "กรุณารับบัตรคืน<br>";
echo "<hr>";

echo "<h2>Ternary Operator</h2><br>";
$var1=20;
$var2=30;
echo "var 1 : ".$var1."<br>";
echo "var 2 : ".$var2."<br>";
$var1>$var2 ? print($var1." มากกว่า ".$var2."<br>") : print($var1." น้อยกว่า ".$var2."<br>");
echo "<hr>";

echo "<h2>Switch Case</h2><br>";
$mouth=1;
echo "เลขเดือนที่ค้นหา : ".$mouth."<br>";
switch($mouth){
    case 1: echo"มกราคม";
    break;
    case 2: echo"กุมภาพันธ์";
    break;
    case 3: echo"มีนาคม";
    break;
    default : echo "ไม่พบเดือน";
}
?>