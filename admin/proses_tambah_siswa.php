<?php
if ($_POST) {
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $angkatan=$_POST['angkatan'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    if (empty($nisn)) {
        echo "<script>alert('Nisn tidak boleh kosong');location.href='siswa.php';</script>";
    } elseif (empty($nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='siswa.php';</script>";
    } elseif (empty($nis)) {
        echo "<script>alert('Nis tidak boleh kosong');location.href='siswa.php';</script>";
    } elseif (empty($angkatan)) {
        echo "<script>alert('Id Kelas tidak boleh kosong');location.href='siswa.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');location.href='siswa.php';</script>";
    } elseif (empty($no_telp)) {
        echo "<script>alert('no Telp tidak boleh kosong');location.href='siswa.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `siswa`(`nisn`, `nis`, `nama`, `id_kelas`,`angkatan`, `alamat`, `no_telp`) VALUES ('".$nisn."','".$nis."','".$nama."','".$kelas."','".$angkatan."','".$alamat."','".$no_telp."')");
        if ($insert) {
            echo "<script>alert('Berhasil Menambahkan Siswa');location.href='siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Siswa');location.href='siswa.php';</script>";
        }
    }
}
?>