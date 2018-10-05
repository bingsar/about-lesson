<?php
$x = rand(0,100);
$a = 1;
$b = 1;

while (true) {
    if ($a > $x) {
        echo "Задуманное число $x НЕ входит в числовой ряд";
        break;
    } elseif ($a == $x) {
        echo "Задуманное число $x входит в числовой ряд";
        break;
    }
    $c = $a;
    $a = $a + $b;
    $b = $c;

}
?>