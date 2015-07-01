<?php
/// ข้อ 1)
$a = 9;
$b = 100;
$c = 0;
$d = 1;
if ($b % $a > 0 && $b / 2 > 0) {
    $c = 5 + 1 + 2 * 3 + 0 - 10;
}
if ($b % $a > 0 || $b < 0) {
    $d+=2;
}
echo $c + $d;
echo "<hr>";

?>

<?php
/// ข้อ 2)
$data = [
    'โรค-a' => 40,
    'โรค-b' => 20,
    'โรค-c' => 30
];
echo "<table border=1>";
echo "<tr><th>โรค</th><th>จำนวน</th><th>ร้อยละ</th></tr>";
foreach ($data as $key=>$val) {
    
    $percent = $val/90*100;
    $percent = number_format($percent,2);
    echo "<tr><td>$key</td><td>$val</th><td>$percent</td></tr>";
    
}
?>


