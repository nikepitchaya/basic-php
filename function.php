<?php
print("<h1>Function</h1><br><hr>");

/////////////////////
echo "<h2>Normal Function</h2><br>"; //ฟังก์ชันธรรมดา
function show(){
    print("Nike love Aon<br>");
}
show();
show();
show();
echo "<hr>";
/////////////////////


/////////////////////
echo "<h2>Fucntion Argument</h2><br>"; //ฟังก์ชันรับค่า Parameter
function display($message){
    echo "Hello\t".$message."<br>";
}
display("Nike"); //Argument

function  add($a,$b){
    $c = $a+$b;
    echo $a." + ".$b." = ".$c."<br>";
}
add(5,10);
echo "<hr>";
/////////////////////


/////////////////////
echo "<h2>Fucntion Return</h2><br>"; //ฟังก์ชันแบบรีเทิร์นค่าออกไป
function getAddress(){
    return "ยโสธร";
}
$home=getAddress();
echo "บ้านของฉันอยู่ที่ : ".$home."<br>";
echo "<hr>";
/////////////////////


/////////////////////
echo "<h2>Mixed Fucntion</h2><br>"; //ฟังก์ชันแบบรับค่าและคืนค่า
function getIncome($salary,$count){
    return $salary*$count; //เงินเดือน * จำนวนเดือน
}
$amount=20000;
$mount=9;
echo "เงินเดือนของฉัน = ".$amount." บาท<br>";
echo "ระยะเวลาทำงาน = ".$mount." เดือน<br>";
$income=getIncome($amount,$mount);
echo "รายได้ทั้งหมด = ".$income." บาท<br>";
echo "<hr>";
/////////////////////


/////////////////////
echo "<h2>Set Default Param Fucntion</h2><br>"; //ฟังก์ชันแบบกำหนดค่าเริ่มต้น
function showData($fname,$lname,$home="ข้างถนน"){
    echo "ชื่อ : ".$fname."<br>";
    echo "นามสกุล : ".$lname."<br>";
    echo "ที่อยู่ : ".$home."<br>";
}
showData("ไนกี้","รักอ้อน","บ้านแสนสุข");
showData("แจม","ปากหมา");
echo "<hr>";

?>
