<?php 
echo "<h1>Array Loop</h1><br><hr>";
 $number = [10,20,30,40,50,60,70,10,10,20,30,30,40,40,10];
 $fruit =["ส้ม","มะละกอ","แอปเปิ้ล","กล้วย","ขนุน","น้อยหน่า","กล้วย","องุ่น","แตงโม"];

 $total = count($number);
 for($i=0;$i<$total;$i++){
     echo " ลำดับเลขคือ : ".$i."\tมีค่าเท่ากับ\t".$number[$i]."<br>";
 }
echo "<hr>";
$product=count($fruit);
for($i=0;$i<$product;$i++){
    echo "ลำดับสินค้าคือ : ".$i." ชื่อสินค้า ".$fruit[$i]."<br>";
}
echo "<hr>";

echo "<h1>Array Count Values</h1><br><hr>"; //ทำการนับค่าที่อยู่ในอาร์เรย์ และแสดงความถี่ของข้อมูลออกมา (จำนวนที่ซ้ำ)
print_r(array_count_values($number));
echo "<br>";
print_r(array_count_values($fruit));





?>
