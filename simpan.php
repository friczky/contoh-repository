<?php

include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

$data = mysqli_query($koneksi,"INSERT INTO kelas (id, nama, nim, kelas) VALUES ('', '$nama', '$nim', '$kelas')");
if ($data) {
    echo "Berhasil Disimpan";
    echo "<a href='form.php'>Kembali</a>";
} else {
    echo "Gagal simpan!";
    echo "<a href='form.php'>Kembali</a>";
}