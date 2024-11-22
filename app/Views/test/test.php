<html>
    <head>
        <title>Welcome to CodeIgniter 4!</title>
    </head>
    <body>
        <h1>
            INI BAGIAN PAGE UNTUK HALAMAN TEST USER BY SYAHPUTRA
        </h1>
        <br>
        <hr>
<?php
// $tinggi = 5; // Tinggi segitiga

// for ($i = 1; $i <= $tinggi; $i++) {
// // Mencetak spasi
// for ($j = $i; $j < $tinggi; $j++) {
// echo "&nbsp;"; // Spasi untuk rata kanan
// }
// // Mencetak bintang
// for ($k = 1; $k <= $i; $k++) {
// echo "* ";
// }
// // Pindah ke baris berikutnya
// echo "<br>";
// }

$tinggi = 5; // Tinggi segitiga

for ($i = 1; $i <= $tinggi; $i++) {
    // Mencetak bintang
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    // Pindah ke baris berikutnya
    echo "<br>";
}
?>
    </body>
</html>