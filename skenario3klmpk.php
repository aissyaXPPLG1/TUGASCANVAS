<!DOCTYPE html>
<html lang="id">
    <head>
       <style> 
       body {
            font-family: Arial, sans-serif;
            background: url(gam.jpg) no-repeat fixed;
            background-size: cover;
            text-align: center;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .h2 {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            border: dashed 2px;
        }
        th, td {
            padding: 8px;
            border: dashed 2px;
        }
        .container2 {
            width: 50%;
            padding: 20px;
            margin: 50px auto;
            border-radius: 10px;
            background:rgb(151, 239, 239);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            color: green;
            
        }
        .highlight {
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            background:rgb(43, 205, 178) !important;
            font-weight: bold;
            color: white;
        }
        </style>
   </head>
   <body>
       <?php
       
         $jam = date("14.00");
         $sehat = false;
         $ngaji = false;
         $belibumbu = false;
         $Raya = false;
         $soksibuk = false;
         $santuy = false;

         if ($jam >= "00.00" && $jam <= "24.00") {
                if ($jam >= "04.00" && $jam < "04.10") {
                $saatnya = "Mandi pagi"; }
   
                elseif ($jam >= "04.10" && $jam < "04.30") {
                $saatnya = "Melaksanakan sholat Subuh + mengaji"; }
   
                elseif ($jam >= "04.30" && $jam < "05.30") {
                $saatnya = "Belajar"; 
                if ($sehat ) {
                    echo ("$jam : Belajar");
                  } 
                  else {
                     echo ("$jam : Andi melakukan senam pagi");
                  }
                }
  
                elseif ($jam >= "05.30" && $jam < "06.00") {
                $saatnya = "Sarapan + bersiap-siap"; }

                elseif ($jam >= "06.00" && $jam < "06.15") {
                $saatnya = "Perjalanan ke sekolah"; }

                elseif ($jam >= "06.15" && $jam < "11.45") {
                $saatnya = "Pelajaran seperti biasa"; }

                elseif ($jam >= "11.45" && $jam < "12.30") {
                $saatnya = "Melaksanakan sholat Dhuhur + istirahat"; }
    
                elseif ($jam >= "12.30" && $jam < "15.30") {
                $saatnya = "Melanjutkan pelajaran lagi"; }
    
                elseif ($jam >= "15.30" && $jam < "15.45") {
                $saatnya = "Pulang sekolah"; }
  
                elseif ($jam >= "15.45" && $jam < "15.50") {
                $saatnya = "Melepas seragam dll"; }
 
                elseif ($jam >= "15.50" && $jam < "16.00") {
                $saatnya = "Mandi sore"; }
 
                elseif ($jam >= "16.00" && $jam < "16.10") {
                $saatnya = "Perjalanan ke tempat mengaji"; 
                 if ($ngaji ) {
                   echo ("$jam : Andi otw ke tempat mengaji");
                 } 
                 else {
                    echo ("$jam : Jika Andi tidak mengaji, dia beristirahat di rumah");
                 }
                }
 
                elseif ($jam >= "16.10" && $jam < "16.40") {
                $saatnya = "Mengaji"; 
                if ($ngaji ) {
                    echo ("$jam : Andi otw ke tempat mengaji");
                  } 
                  else {
                     echo ("$jam : Jika tidak mengaji,  Andi beristirahat di rumah");
                  }
                }
 
                elseif ($jam >= "16.40" && $jam < "17.00") {
                $saatnya = "Perjalanan pulang + ke warung membeli bumbu masakan"; 
                if ($belibumbu ) {
                    echo ("$jam : Beli bumbu");
                  } 
                  else {
                     echo ("$jam : Andi pulang dari mengaji tanpa beli bumbu");
                  }
            }
 
                elseif ($jam >= "17.00" && $jam < "17.35") {
                $saatnya = "Chat dengan Raya + ganti baju"; 
                if ($Raya ) {
                    echo ("$jam : Chat dengan Raya");
                  } 
                  else {
                     echo ("$jam : Membantu Ibu memasak");
                  }}
 
                elseif ($jam >= "17.35" && $jam < "18.05") {
                $saatnya = "Obrolan keluarga bersama"; }
 
                elseif ($jam >= "18.05" && $jam < "18.35") {
                $saatnya = "Menghafal dialog untuk festival budaya"; 
                if ($soksibuk ) {
                    echo ("$jam : Menghafal");
                  } 
                  else {
                     echo ("$jam : Jika tidak ada festival, dia bersantai");
                  }
                }
 
                elseif ($jam >= "18.35" && $jam < "18.45") {
                $saatnya = "Melaksanakan sholat Maghrib"; }
 
                elseif ($jam >= "18.45" && $jam < "19.05") {
                $saatnya = "Makan malam bersama keluarga"; }
 
                elseif ($jam >= "19.05" && $jam < "19.25") {
                $saatnya = "Bersantai + melaksanakan sholat Isya"; }
 
                elseif ($jam >= "19.25" && $jam < "21.25") {
                $saatnya = "Mengerjakan tugas"; 
                if ($santuy ) {
                    echo ("$jam = Mengerjakan tugas");
                  } 
                  else {
                     echo ("$jam : Jika Andi tidak ada tugas, dia belajar");
                  }
                }

                elseif ($jam >= "21.25" && $jam < "22.00") {
                $saatnya = "Mempersiapkan seragam + jadwal pelajaran esok hari"; }
 
                elseif ($jam >= "22.00" && $jam < "04.00") {
                $saatnya = "Tidur"; }

                echo '<div class="container">';
                echo "<h2>JADWAL HARIAN ANDI</h2>";
                echo '<div class= "highlight">';
                echo "Pukul $jam : $saatnya.";
                echo "</div>";
                echo "</div>";
                echo "<div class='container2'>";
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Waktu</th>";
                echo "<th>Keterangan</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>04.00 - 04.10</td>";
                echo "<td>Mandi pagi</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>04.10 - 04.30</td>";
                echo "<td>Melaksanakan sholat Subuh + mengaji</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>04.30 - 05.30</td>";
                echo "<td>Belajar</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>05.30 - 06.00</td>";
                echo "<td>Sarapan + bersiap-siap</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>06.00 - 06.15</td>";
                echo "<td>Perjalanan ke sekolah</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>06.15 - 11.45</td>";
                echo "<td>Pelajaran seperti biasa</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>11.45 - 12.30</td>";
                echo "<td>Melaksanakan sholat Dhuhur + istirahat</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>12.30 - 15.30</td>";
                echo "<td>Melanjutkan pelajaran lagi</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>15.30 - 15.45</td>";
                echo "<td>Pulang sekolah</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>15.45 - 15.50</td>";
                echo "<td>Melepas seragam dll</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>15.50 - 16.00</td>";
                echo "<td>Mandi sore</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>16.00 - 16.10</td>";
                echo "<td>Perjalanan ke tempat mengaji</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>16.10 - 16.40</td>";
                echo "<td>Mengaji</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>16.40 - 17.00</td>";
                echo "<td>Perjalanan pulang + ke warung membeli bumbu makanan</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>17.00 - 17.35</td>";
                echo "<td>Chat dengan Raya + ganti baju</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>17.35 - 18.05</td>";
                echo "<td>Obrolan keluarga bersama</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>18.05 - 18.35</td>";
                echo "<td>Menghafal dialog untuk festival budaya</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>18.35 - 18.45</td>";
                echo "<td>Melaksanakan sholat Maghrib</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>18.45 - 19.05</td>";
                echo "<td>Makan malam bersama keluarga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>19.05 - 19.25</td>";
                echo "<td>Bersantai + melaksanakan sholat Isya</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>19.25 - 21.25</td>";
                echo "<td>Mengerjakan tugas</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>21.25 - 22.00</td>";
                echo "<td>Mempersiapkan seragam + jadwal pelajaran esok hari</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>22.00 - 04.00</td>";
                echo "<td>Tidur</td>";
                echo "</tr>";
                echo "</div>";   
            }
       ?>
   </body>
</html>