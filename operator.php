<?php
    echo "<h1>Operator and Operand</h1><br>";
    $var1=10;
    $var2=20;
    $var3=30;
    $var4="30";
    
    //Operator 
    echo "Operand var1 : ".$var1."<br>";
    echo "Operand var2 : ".$var2."<br>";
    echo "Operand var3 : ".$var3."<br>";
    echo "Operand var4 : ".$var4." (string) <br>";
    echo "<hr>";
    echo "<h2>Compare Variable with Operator</h2><br>";
    echo "check var1 == var2 : ";
    var_dump($var1==$var2); //เท่ากันไหม
    echo "<br>";
    echo "check var1 != var2 : ";
    var_dump($var1!=$var2); //ไม่เท่ากันไหม
    echo "<br>";
    echo "check var1 === var2 : "; 
    var_dump($var1===$var2); //เหมือนกันไหม
    echo "<br>";
    echo "check var1 !=== var2 : ";
    var_dump($var1!==$var2); //ไม่เหมือนกันไหม
    echo "<br>";
    echo "check var1 <=> var2 : ";
    var_dump($var1<=>$var2); //spaceship
    echo "<br>";
    echo "check var2 <=> var1 : ";
    var_dump($var2<=>$var1); //spaceship
    echo "<br><hr>";
    
    echo "check var3 == var4 : ";
    var_dump($var3==$var4); //เท่ากันไหม
    echo "<br>";
    echo "check var3 != var4 : ";
    var_dump($var3!=$var4); //ไม่เท่ากันไหม
    echo "<br>";
    echo "check var3 === var4 : "; 
    var_dump($var3===$var4); //เหมือนกันไหม
    echo "<br>";
    echo "check var3 !=== var4 : ";
    var_dump($var3!==$var4); //ไม่เหมือนกันไหม
    echo "<br>";
    echo "check var3 <=> var4: ";
    var_dump($var3<=>$var4); //spaceship
    echo "<br>";
    echo "check var4 <=> var3 : ";
    var_dump($var4<=>$var3); //spaceship
    echo "<br><hr>";

    //String Operands
    echo "<h1>String Operand</h2><br>";
    $name="nike";
    echo $name."rui<br>";
    echo $name."<br>";
    $name.="rui.com"; //นำค่า string มาต่อท้ายตัวแปร และนำไปใช้งานต่อได้
    echo $name."<br>";
    echo "<hr>";
    echo $name."<br>";
    echo "<hr>";

    //Prefix and Postfix
    echo "<h1>Prefix and Postfix</h1><br>";
    $cost=5;
    echo "cost = ".$cost."<br>";
    echo "ค่าเริ่มต้น = ".$cost."<br>"; //10
    echo "เพิ่มค่าแบบ Prefix = ".(++$cost)."<br>";
    echo "ค่าล่าสุด = ".$cost."<br>"; //11
    echo "<hr>";
    $cost=5;
    echo "cost = ".$cost."<br>";
    echo "ค่าเริ่มต้น = ".$cost."<br>"; //10
    echo "เพิ่มค่าแบบ Postfix = ".($cost++)."<br>";
    echo "ค่าล่าสุด = ".$cost."<br>"; //11
    echo "<hr>";
    $cost=5;
    echo "cost = ".$cost."<br>";
    echo "ค่าเริ่มต้น = ".$cost."<br>"; //10
    echo "ลดค่าแบบ Prefix = ".(--$cost)."<br>";
    echo "ค่าล่าสุด = ".$cost."<br>"; //11
    echo "<hr>";
    $cost=5;
    echo "cost = ".$cost."<br>";
    echo "ค่าเริ่มต้น = ".$cost."<br>"; //10
    echo "ลดค่าแบบ Postfix = ".($cost--)."<br>";
    echo "ค่าล่าสุด = ".$cost."<br>"; //11
    echo "<hr>";
?>
