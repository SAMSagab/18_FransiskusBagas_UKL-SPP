<?php
include "../koneksi.php";
$qry_hapus = mysqli_query($conn, " delete from pembayaran");
if ($qry_hapus){
    echo "<script>alert('Sukses Menghapus History'); location.href='history_pembayaran.php';</script>";
}   else {
    echo "<script>alert('Gagal Menghapus History'); location.href='history_pembayaran.php';</script>";
}

?>