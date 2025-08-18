/* ===========================================================
   PROGRAMMING WITH PHP – ASSESSMENT TASKS (1–8)
   =========================================================== */

/* ---------- 1) Area & Perimeter of a Rectangle ---------- */
function rectangleAreaPerimeter($length, $width) {
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "1) Rectangle L=$length, W=$width -> Area=$area, Perimeter=$perimeter\n\n";
}
rectangleAreaPerimeter(7, 5);

/* ---------- 2) VAT (15% of amount) ---------------------- */
function calcVAT($amount, $rate = 0.15) {
    $vat  = $amount * $rate;
    $gross = $amount + $vat;
    echo "2) Amount=$amount, VAT(15%)=$vat, Total (amount+VAT)=$gross\n\n";
}
calcVAT(1200);

/* ---------- 3) Odd or Even (IF–ELSE) -------------------- */
function oddOrEven($n) {
    if ($n % 2 == 0) {
        echo "3) $n is EVEN\n\n";
    } else {
        echo "3) $n is ODD\n\n";
    }
}
oddOrEven(17);

/* ---------- 4) Largest of three numbers (IF–ELSE) ------- */
function largestOfThree($a, $b, $c) {
    $largest = $a;
    if ($b > $largest) $largest = $b;
    if ($c > $largest) $largest = $c;
    echo "4) Largest among ($a, $b, $c) is $largest\n\n";
}
largestOfThree(12, 4, 27);

/* ---------- 5) All odd numbers between 10 and 100 ------- */
function printOdds10to100() {
    echo "5) Odd numbers between 10 and 100:\n";
    for ($i = 10; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    echo "\n\n";
}
printOdds10to100();

/* ---------- 6) Search an element in an array ------------- */
function searchArray($arr, $target) {
    $found = false;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $target) {
            echo "6) Found '$target' at index $i\n\n";
            $found = true;
            break;
        }
    }
    if (!$found) echo "6) '$target' not found in the array\n\n";
}
$nums = [3, 8, 12, 5, 21, 8, 34];
searchArray($nums, 21);

/* ---------- 7) Print shapes (NESTED LOOPS) --------------- */
function printShapes7() {
    echo "7a) Triangle of * (1→3):\n";
    for ($r = 1; $r <= 3; $r++) {
        for ($c = 1; $c <= $r; $c++) echo "*";
        echo "\n";
    }
    echo "\n";

    echo "7b) Numbers pattern:\n";
    for ($r = 3; $r >= 1; $r--) {
        for ($c = 1; $c <= $r; $c++) echo $c . " ";
        echo "\n";
    }
    echo "\n";

    echo "7c) Letters triangle:\n";
    $ch = ord('A');
    for ($r = 1; $r <= 3; $r++) {
        for ($c = 1; $c <= $r; $c++) {
            echo chr($ch) . " ";
            $ch++;
        }
        echo "\n";
    }
    echo "\n";
}
printShapes7();

/* ---------- 😎 2D array + print shapes (NESTED LOOPS) ----
   Array from the sheet:
   Row1: 1 2 3 A
   Row2: 1 2 B C
   Row3: 1 D E F
----------------------------------------------------------- */
$grid = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F'],
];

function printFrom2DArray($grid) {
    echo "8a) Numbers (from grid):\n";
    // Expect: 1 2 3  /  1 2  /  1
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3 - $r; $c++) {
            echo $grid[$r][$c] . ( $c < 2 - $r ? " " : "" );
        }
        echo "\n";
    }
    echo "\n";

    echo "8b) Letters (from grid):\n";
    // Expect: A / B C / D E F  (take last 1,2,3 items of each row)
    for ($r = 0; $r < 3; $r++) {
        for ($c = 3 - $r; $c < 4; $c++) {
            echo $grid[$r][$c] . ( $c < 3 ? " " : "" );
        }
        echo "\n";
    }
    echo "\n";
}

printFrom2DArray($grid);
