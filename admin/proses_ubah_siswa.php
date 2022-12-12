<?php 
    include '../koneksi.php';

    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = "
        update siswa set nisn = '" . $nisn . "', nis = '" . $nis . "', nama = '" . $nama . "', id_kelas = '" . $id_kelas . "', alamat = '" . $alamat . "', no_telp = '" . $no_telp . "'
        where nisn = '" . $nisn . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit student');location.href='siswa.php';</script>";
        }else{
            echo "<script>alert('Failed edit student');location.href='siswa.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>