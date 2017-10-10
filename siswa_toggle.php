<?php

$siswa_nis = $_GET['siswa_nis'];
$siswa_active = $_GET['siswa_active'];

if ($siswa_active == "aktif") {
  $siswa_active = "tidak aktif";
}
else {
  $siswa_active = "aktif";
}

  $sql = $db->query("UPDATE users SET user_active = '$siswa_active' WHERE user_nis = $siswa_nis");

  if ($sql) {
    echo "Berhasil";
  }
  else {
    echo "Gagal";
  }

 ?>
