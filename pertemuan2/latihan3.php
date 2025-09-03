<?php

$num = 20;


if ($num < 30) {
    echo "$num kurnga dari 30";
} else if ($num == 30) {
    echo "$num sama dengan 30";
} else {
    echo "$num lebih dari 30";
}

?>
<!-- OPERATOR TERNARY -->
<?php echo("<br>")?>

<?php
$x = 3 < 10 ? "Benar" : "Salah";
echo $x;

?>


<?php 
$y = 1;
echo "<br>";
do {
    echo "selamat datang";
    echo "<br>";
    $y++;
} while ($y < 5);
?>


