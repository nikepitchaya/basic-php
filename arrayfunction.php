<?php
$fruit =["ส้ม","มะละกอ","แอปเปิ้ล","กล้วย","ขนุน","น้อยหน่า","กล้วย","องุ่น","แตงโม"];

array_push($fruit,"ส้ม"); //เพิ่มข้อมูลลงไปในตำแหน่งสุดท้าย
array_push($fruit,"มะละกอ");
print_r($fruit);
echo "<br>";
array_pop($fruit); //ลบข้อมูลจากอาร์เรย์ที่ตำแหน่งสุดท้าย
print_r($fruit);
echo "<br>";
array_unshift($fruit,"มังคุด"); //เพิ่มข้อมูลลงไปในตำแหน่งแรก
print_r($fruit);
echo "<br>";
array_shift($fruit); //ลบข้อมูลจากอาร์เรย์ที่ตำแหน่งแรก
print_r($fruit);
echo "<br>";

//ชื่ออาร์เรย์ , index , จน.ที่ต้องการลบ
array_splice($fruit,2,5);
print_r($fruit);
echo "<br>";
array_splice($fruit,1,0,array("ไนกี้","อ้อน"));
print_r($fruit);
echo "<br>";
?>