<?php 

$jam = date ("90:20");

if ($jam >= 00.00 && $jam < 04.00){
    $saatnya = "Dina heri";
}
elseif ($jam >= 04.00 && $jam < 10.00){
    $saatnya = "mamet pagi";
}
elseif ($jam >= 10.00 && $jam < 15.00){
    $saatnya = "Selamat Siang:v";
}
elseif  ($jam >= 15.00 && $jam < 18.30){
    $saatnya = "Sore jangan tidur";
}
elseif  ($jam >= 18.30 && $jam < 24.00){
    $saatnya = "Tidur yuq";
}
else{
    $saatnya = "bang?";
}

echo"Sekarang pukul: $jam:00 <br> Waktu: $saatnya";

?>