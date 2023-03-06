<?php

echo "using While Loop  <br/> <br/>";

// Series 1
echo "Series 1: ";
$a = 1;
$b = 1;
while ($a <= 5) {
    $b = $a * $a . " ";
    $a++;
    echo $b;
}
echo "<br/ >";
echo "Series: 3 ";

$a = 1;
$b = 2;
while ($a <= 21) {
    echo $a . " ";
    $a = $a + $b;
    $b = $b + 1;
}

echo "<br/>";
echo "Series 3: ";
$a = 50;
while ($a >= 10) {
    echo $a . " ";
    $a = $a - 10;
}
echo "<br/>";


echo "series 4: ";
$a = 6;
$b = 6;
while ($a <= 42) {
    if ($a != 18 && $a != 24) {
        echo $a . " ";
    }
    $a = $a + $b;
}

echo "<br/><br/>";
echo "printing Series In For loop. <br/>";
// Series 1
echo "Series 1: ";
$a = 1;
$b = 1;
for ($a = 1; $a <= 5; $a++) {

    $b = $a * $a . " ";
    echo $b;

}
echo "<br/>";
echo "Series 2: ";
// Series 2;
$a = 1;
$b = 1;
for ($a = 1; $a <= 21; $a += $b) {

    echo $a . " ";
    $b++;

}
echo "<br/>";
echo "Series 3: ";
// Series 3;
$a = 50;
for ($a = 50; $a >= 10; $a -= 10) {
    echo $a . " ";
}

echo "<br/>";
echo "Series 4: ";
// Series 4;
$a = 6;
for ($a = 6; $a <= 42; $a += 6) {
    if ($a != 18 && $a != 24) {
        echo "$a ";
    }
    if ($a == 12) {
        $a += 6;
    }
}




?>