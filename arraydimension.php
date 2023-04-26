 <?php
echo "<h1>Array 2 dimension</h1><br><hr>";
//อาร์เรย์แบบ 2 มิติ => เอา 1 มิติมาซ้อนข้างในอีกทีนึง

$products = array(
    array("คีย์บอร์ด","Keyboard",3490),
    array("เม้าส์","Mouse",790),
    array("แผ่นรองเม้าส์","Mousepad",1490),
    array("หูฟัง","Headphone",990)
);
// $row=count($products);
// $column=count($products[$row]);
// การเข้าถึง => แถว,คอลัมน์
echo "<h2>For Loop</h2><br>";
for($i=0;$i<count($products);$i++){
    echo "สินค้าลำดับที่ : ".$i."<br>";
    for($j=0;$j<count($products[$i]);$j++){
        if($j==0){
        echo "รายการสินค้า : ".$products[$i][$j]."\t";
        }
        else{
            echo $products[$i][$j]."\t";
        }
    }
    echo "<br><hr>";
}
echo "<h2>Foreach</h2><br>";
foreach($products as $product){
    echo "ชื่อสินค้า TH : ".$product[0]."<br>";
    echo "ชื่อสินค้า EN : ".$product[1]."<br>";
    echo "ราคาสินค้า : ".$product[2]." บาท<br>";
    echo "<hr>";
}

//
$animals = array(
    ["TH"=>"นกฮูก","EN"=>"Bird","SP"=>"สัตว์ปีก"],
    ["TH"=>"แมวป่า","EN"=>"Forest Cat","SP"=>"สัตว์บก"],
    ["TH"=>"หมีน้ำ","EN"=>"Tardigrada","SP"=>"เอคไดโซซัว"],
    ["TH"=>"ควาย","EN"=>"Buffalo","SP"=>"แจม"],
);

foreach($animals as $animal){
    echo "ชื่อสัตว์ TH : ".$animal["TH"]."<br>";
    echo "ชื่อสัตว์ EN : ".$animal["EN"]."<br>";
    echo "สปีชีส์ SP : ".$animal["SP"]."<br>";
    echo "<hr>";
}
?>
