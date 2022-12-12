<?php
include "../koneksi.php";
session_start();
if ($_POST) {
    $id_pembayaran=$_POST['id_pembayaran'];
    $tunggakan=$_POST['tunggakan'];
    $nominal=$_POST['nominal'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $qry_pembayaran=mysqli_query($conn, "select * from pembayaran where id_pembayaran= '".$_SESSION['$id_pembayaran']."'");
    $data_pembayaran=mysqli_fetch_array($qry_pembayaran);
    $pembayaran=$tunggakan-$nominal;
    $update=mysqli_query($conn , "update pembayaran set tunggakan='".$pembayaran."', tgl_bayar='".$tgl_bayar."' where id_pembayaran='".$_GET['id_pembayaran']."'");

    if ($update) {
        echo "<script>alert('Sukses Membayar SPP'); location.href='history_pembayaran.php'</script>";
    } else {
        echo "<script>alert('Gagal Membayar SPP'); location.href='history_pembayaran.php'</script>";
    }
}

?>