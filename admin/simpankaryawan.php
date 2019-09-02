<?php 

include '../config/koneksi.php';



$name           = $_POST['name'];
$email          = $_POST['email'];
$notelpon       = $_POST['notelpon'];
$alamat         = $_POST['alamat']; 
$gender         = $_POST['gender'];    
$agama          = $_POST['agama'];
$birthday       = $_POST['birthday'];

mysqli_query($koneksi,"INSERT INTO karyawan  VALUES('','$name','$email', '$notelpon', '$alamat','$gender', '$agama', '$birthday', NOW())");


header("location:karyawan.php");

?>