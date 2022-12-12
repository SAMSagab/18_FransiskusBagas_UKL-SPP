<?php

if($_POST){
$petugas=$_POST['petugas'];
$nama_siswa=$_POST['nama_siswa'];
$nisn=$_POST['nisn'];
$id_kelas=$_POST['id_kelas'];
$tanggal_bayar=$_POST['tgl_bayar'];
$tunggakan=$_POST['tunggakan'];
// $bulan=$_POST['bulan'];

include '../koneksi.php';
$masuk_pembayaran=mysqli_query($conn,"insert into pembayaran (nisn,nama_siswa,bulan,tunggakan,id_petugas,tgl_bayar) value ('".$nisn."','".$nama_siswa."','bulan','".$tunggakan."','".$petugas."','".$tanggal_bayar."')");
$qry_siswa=mysqli_query($conn,"select * from siswa where nisn= '".$nisn."' and id_kelas=siswa.id_kelas");
$qry_bayar=mysqli_query($conn,"select * from pembayaran order by id_pembayaran desc");

if(mysqli_num_rows($qry_siswa)>0){
    $data_siswa=mysqli_fetch_array($qry_siswa);
    $data_bayar=mysqli_fetch_assoc($qry_bayar);
    session_start();
            $_SESSION['id_petugas'] = $data_siswa['id_petugas']; 
            $_SESSION['id_pembayaran'] = $data_bayar['id_pembayaran'];
            $_SESSION['nisn'] = $data_siswa['nisn'];
            $_SESSION['tgl_bayar'] = $data_bayar['tgl_bayar'];
            // $_SESSION['angkatan'] = $data_siswa[' '];

        if($data_siswa['angkatan'] == "29") {

            $_SESSION['nisn'] = $nisn;
            $_SESSION['angkatan'] = "29";
    
            header("location:pemilihan_spp.php");
    
        }elseif($data_siswa['angkatan'] == "30" ){

            $_SESSION['nisn'] = $nisn;
            $_SESSION['angkatan'] = "30";

            header("location:pemilihan_spp.php");

        }elseif($data_siswa['angkatan'] == "31" ){

            $_SESSION['nisn'] = $nisn;
            $_SESSION['angkatan'] = "31";

            header("location:pemilihan_spp.php");

        }else{
            echo "<script>alert('Gagal memproses spp siswa'); location.href='pembayaran.php';</script>";
        }

    }else{
        echo "<script>alert('Gagal memproses spp siswa'); location.href='pembayaran.php';</script>";
    }
}

?>