<?php
echo "<h1>Test</h1><hr>";
$OddName = "'01_JPG',' 108', '104' ";
for ($i = 0; $i <= strlen($OddName); $i++) {
    $OddName = str_replace("'", "", $OddName);
}
echo "<h1>$OddName</h1>";
