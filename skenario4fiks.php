<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas Berpasangan</title>
    <h3>Aissya Khayla & Alifianisa
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg,rgb(49, 19, 105),rgb(156, 106, 232));
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        pre {
            background:rgb(107, 152, 243);
            color:rgb(248, 250, 251);
            padding: 15px;
            border-radius: 10px;
            text-align: left;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Array dan Perulangan</h2>
        <pre>
<?php
// Kasus 1: Menampilkan tanggal dengan Array dan Looping
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$tahun = [2024, 2025, 2026];

// Menampilkan hari dengan for
for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] == "Senin") {
        echo "Hari: $hari[$i]\n";
    }
}


foreach ($tanggal as $tgl) {
    if ($tgl == 10) {
        echo "Tanggal: $tgl\n";
    }
}


$i = 0;
while ($i < count($bulan)) {
    if ($bulan[$i] == "Maret") {
        echo "Bulan: $bulan[$i]\n";
    }
    $i++;
}


$i = 0;
do {
    if ($tahun[$i] == 2025) {
        echo "Tahun: $tahun[$i]\n";
    }
    $i++;
} while ($i < count($tahun));

echo "</br>";


// Kasus 2: Anak Ayam Turun 30
$anakAyam = range(30, 1);
foreach ($anakAyam as $ayam) {
    echo "Anak ayam turun $ayam, mati satu tinggal " . ($ayam - 1) . "\n";
}

echo "</br>";

// Kasus 3: Mawar yang dimiliki Sholeh
$mawarSholeh = range(21, 10);
echo "Mawar yang dimiliki Sholeh: ".implode(", ", $mawarSholeh)."\n";
echo "Jumlah Mawar Sholeh: ".count($mawarSholeh)."\n";

// Mawar yang diberikan ke ibu
$mawarIbu = [];
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawarIbu[] = $mawar;
}
echo "Mawar yang diberikan ke ibu: ".implode(", ", $mawarIbu)."\n";
echo "Jumlah Mawar untuk ibu: ".count($mawarIbu)."\n";

echo "</br>";


// Kasus 4: Musik berdasarkan suasana hati dengan Array dalam Array dan Perulangan
$musik = [
    ["suasana" => "galau", "lagu" => "Pura Pura Lupa - Mahen"],
    ["suasana" => "bersemangat", "lagu" => "Meraih Bintang - Via Vallen"],
    ["suasana" => "marah", "lagu" => "Aku Dah Lupa - Los Production"]
];

foreach ($musik as $m) {
    echo "Saat " . $m["suasana"] . " mendengarkan: " . $m["lagu"] . "\n";
}
?>
        </pre>
    </div>
</body>
</html>