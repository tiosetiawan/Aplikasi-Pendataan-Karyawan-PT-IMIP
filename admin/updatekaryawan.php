<?php 

include '../config/koneksi.php';


$id             = $_POST['id'];
$name           = $_POST['name'];
$email          = $_POST['email'];
$notelpon       = $_POST['notelpon'];
$alamat         = $_POST['alamat']; 
$gender         = $_POST['gender'];    
$agama          = $_POST['agama'];
$birthday       = $_POST['birthday'];



mysqli_query($koneksi,"UPDATE karyawan SET 
                                name='$name', 
                                email='$email', 
                                notelpon='$notelpon', 
                                alamat='$alamat', 
                                gender='$gender', 
                                agama='$agama', 
                                birthday='$birthday' 
                                WHERE id_karyawan='$id'");


header("location:karyawan.php");

?>