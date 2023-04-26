<?php
echo "<h1>Arrayy While Loop (Foreach) </h1><br><hr>";
$number = [10,20,30,40,50,60,70,10,10,20,30,30,40,40,10];
$fruit =["ส้ม","มะละกอ","แอปเปิ้ล","กล้วย","ขนุน","น้อยหน่า","กล้วย","องุ่น","แตงโม"];
$animals =["dog"=>"หมา","cat"=>"แมว","pig"=>"หมู"];
$cook = array("honey","pepper","vagetable");
foreach($animals as $key=>$val){ // ถ้า as ไว้ตัวเดียวจะรับค่า value มา ถ้า as มาเป็นลักษณะ key=>value จะรับมาทั้งสองตัวตามลำดับ
    echo $key."=>".$val."<br>";
}

?>