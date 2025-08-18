<?php
echo "<h2>PHP Assignment Solutions</h2>";

/* 1. Area & Perimeter of Rectangle */
echo "<h3>1. Area & Perimeter of Rectangle</h3>";
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Length = $length, Width = $width <br>";
echo "Area: $area <br>";
echo "Perimeter: $perimeter <br>";

/* 2. VAT Calculation */
echo "<h3>2. VAT Calculation (15%)</h3>";
$amount = 1000;
$vat = $amount * 0.15;
echo "Amount: $amount <br>";
echo "VAT: $vat <br>";
echo "Total: " . ($amount + $vat) . "<br>";

/* 3. Odd or Even */
echo "<h3>3. Odd or Even</h3>";
$number = 7;
if($number % 2 == 0){
    echo "$number is Even <br>";
} else {
    echo "$number is Odd <br>";
}

/* 4. Largest of Three Numbers */
echo "<h3>4. Largest of Three Numbers</h3>";
$a = 12; $b = 25; $c = 18;
if($a >= $b && $a >= $c){
    echo "$a is the largest<br>";
} elseif($b >= $a && $b >= $c){
    echo "$b is the largest<br>";
} else {
    echo "$c is the largest<br>";
}

/* 5. Odd Numbers (10–100) */
echo "<h3>5. Odd Numbers from 10 to 100</h3>";
for($i = 10; $i <= 100; $i++){
    if($i % 2 != 0){
        echo $i . " ";
    }
}
echo "<br>";

/* 6. Search an Element in Array */
echo "<h3>6. Search an Element in Array</h3>";
$arr = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;
foreach($arr as $value){
    if($value == $search){
        $found = true;
        break;
    }
}
if($found){
    echo "$search found in the array.<br>";
} else {
    echo "$search not found in the array.<br>";
}

/* 7. Print Shapes (Nested Loops) */
echo "<h3>7. Print Shapes</h3>";
// Stars
echo "Shape 1:<br>";
for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
// Numbers
echo "Shape 2:<br>";
for($i = 3; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo $j;
    }
    echo "<br>";
}
echo "<br>";
// Letters
echo "Shape 3:<br>";
$letters = array("A", "B", "C", "D", "E", "F");
$index = 0;
for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $letters[$index++] . " ";
    }
    echo "<br>";
}

/* 8. 2D Array and Print Shapes */
echo "<h3>8. 2D Array and Shapes</h3>";
$array = array(
    array(1, 2, 3, "A"),
    array(1, 2, "B", "C"),
    array(1, "D", "E", "F")
);
echo "Numbers:<br>";
for($i = 0; $i < count($array); $i++){
    for($j = 0; $j < 3 - $i; $j++){
        echo $array[$i][$j];
    }
    echo "<br>";
}
echo "<br>Letters:<br>";
for($i = 0; $i < count($array); $i++){
    for($j = 3 - $i; $j < count($array[$i]); $j++){
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
?>
