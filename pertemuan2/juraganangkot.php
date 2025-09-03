<?php
$jumlah_angkot = "10";

for ($i = 1; $i <= $jumlah_angkot; $i++) {
    if ($i > 1 && $i <= 4) {
        echo "$i.  Angkot Sedang beroperasi <br>";
    } else if ($i == 5) {
        echo "$i. Angkot sedang tidak beroperasi <br>";
    } else {
        echo "$i. Angkot sedang beroperasi <br>";
    }
}
?>
