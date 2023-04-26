<?php 
echo "<h1>การสร้างอาร์เรย์</h1><br>";
echo "<hr>";

echo "<h2>อาร์เรย์แบบเดี่ยว</h2>"; // array แบบเดียว // การสร้าง array
$array = array(10,20,30,40,"nike",false,"nike","aon",true);
$length = count($array);
echo "จำนวนข้อมูลในอาร์เรย์มีทั้งหมด : ".$length." ตัว<br>";
for($i=0;$i<$length;$i++){
    echo "อาร์เรย์ของฉันเก็บค่า : ".$array[$i]."<br>";
}
print_r($array);
echo "<hr>";


echo "<h2>อาร์เรย์แบบคู่ (จับคู่) : Key=>Value</h2><br>"; //จับคู่อาร์เรย์ Key(index)=>Value(ข้อมูล)
$resident = array("A01"=>"ize","A02"=>"nike","A03"=>"boss");
print_r($resident);
echo "<br>";
print($resident["A01"]);
echo "<hr>";

echo "<h1>Array Range</h2><br>"; //อยากได้ตัวเลข หรือ ตัวอักษร เป็นช่วงหรือให้นับขึ้นทีละเท่าไหร่ สามารถใช้ range  ได้
$range = range(1,20,3);
print_r($range);
?>
