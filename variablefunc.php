<?php 
echo "<h2>Variable Function</h2>";
$var1=null;
$var2="";
$var3=0;
$var4="nike";

echo "ตัวแปรตัวที่ 1 : ".$var1."<br>";
echo "ตัวแปรตัวที่ 2 : ".$var2."<br>";
echo "ตัวแปรตัวที่ 3 : ".$var3."<br>";
echo "ตัวแปรตัวที่ 4 : ".$var4."<br>";
echo "<hr>";

echo "isset<br>"; //ตรวจสอบตัวแปรว่ามีการกำหนดค่าหรือไม่ ถ้าใช่เป็น 1 ไม่ใช่เป็น 0
echo "ตัวแปรตัวที่ 1 : ".isset($var1)."<br>";
echo "ตัวแปรตัวที่ 2 : ".isset($var2)."<br>";
echo "ตัวแปรตัวที่ 3 : ".isset($var3)."<br>";
echo "ตัวแปรตัวที่ 4 : ".isset($var4)."<br>";
echo "<hr>";

echo "empty<br>"; //ตรวจสอบตัวแปรว่ามีค่าว่างหรือศูนย์หรือไม่ ถ้าใช่เป็น 1 ไม่ใช่เป็น 0
echo "ตัวแปรตัวที่ 1 : ".empty($var1)."<br>";
echo "ตัวแปรตัวที่ 2 : ".empty($var2)."<br>";
echo "ตัวแปรตัวที่ 3 : ".empty($var3)."<br>";
echo "ตัวแปรตัวที่ 4 : ".empty($var4)."<br>";
echo "<hr>";

echo "is_null<br>"; //ตรวจสอบตัวแปรว่ามีค่าว่างหรือไม่
echo "ตัวแปรตัวที่ 1 : ".is_null($var1)."<br>";
echo "ตัวแปรตัวที่ 2 : ".is_null($var2)."<br>";
echo "ตัวแปรตัวที่ 3 : ".is_null($var3)."<br>";
echo "ตัวแปรตัวที่ 4 : ".is_null($var4)."<br>";
echo "<hr>";

echo "var_dump<br>"; //ตรวจสอบตัวแปรว่ามีค่าว่างหรือไม่
echo var_dump($var1)."<br>";
echo var_dump($var2)."<br>";
echo var_dump($var3)."<br>";
echo var_dump($var4)."<br>";
echo "<hr>";

echo "unset<br>"; //ยกเลิกค่าตัวแปรออกจากระบบ
unset($var4);
echo "ตัวแปรตัวที่ 4 (unset) : ".is_null($var4)."<br>";
echo "<hr>";


?>