<?php
// data siswa menggunakan tipe data array
  $siswa = array(
    array("Nama" => "Nopan" , "Nilai" => 90 ),
    array("Nama" => "Nabil" , "Nilai" => 20),
    array("Nama" => "Habib" , "Nilai" => 5),
    array("Nama" => "Bayu"  , "Nilai" => 50)
  );
// end
// Function untuk menentukan nilai kelulusan
  function statuskelulusan($nilai){
    if ($nilai >= 70) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
  }
// end
// perulangan
  echo "Nama Siswa </br>";
  echo "----------------- </br> ";

  foreach ($siswa as $data) {
    echo "Nama :" . $data["Nama"] . "</br>";
    echo "Nilai :" . $data["Nilai"] . "</br>";
    echo "Status Kelulusan :" . statuskelulusan($data["Nilai"]) . "</br>";
    echo "--------------- </br> ";
  }

?>