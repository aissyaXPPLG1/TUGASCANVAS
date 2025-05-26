<?php 
$nilai = -3;

if($nilai <= 100 && $nilai >= 90){
    echo "A";
}
if($nilai <= 89 && $nilai > 80) {
    echo"B";
}
if($nilai <= 79 && $nilai > 70) {
    echo"C";
}
else if ($nilai <= 69 && $nilai >0) {
    echo"D"
}
else {
    echo "nilai wajib diatas 0";
}

?>