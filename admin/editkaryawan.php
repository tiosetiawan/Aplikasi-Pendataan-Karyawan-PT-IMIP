<?php 
include 'header.php' 
?>


       <div class="container-fluid">
          <!-- DataTales Example -->
        <div class="card shadow mb-4">
             <div class="card-body">
        
             	<?php
	include '../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id'");
	while($tampil = mysqli_fetch_array($data)){
		?>

             <form method="post" action="updatekaryawan.php">
             
            
            <input type="hidden" name="id" value="<?php echo $tampil['id_karyawan']; ?>">

             <div class="form-group">
                        <label>NAMA KARYAWAN :</label>
                        <input type="text" name="name" value="<?php echo $tampil['name']; ?>" class="form-control">
                        </div>
                        
                        <div class="form-group">
                        <label>EMAIL</label>
                        <input type="text" name="email" value="<?php echo $tampil['email']; ?>"  class="form-control">
                        </div>
                    
                        <div class="form-group">
                        <label>NO. TELPON</label>
                        <input type="text" name="notelpon" value="<?php echo $tampil['notelpon']; ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                        <label>ALAMAT</label>
                        <textarea type="text" name="alamat" class="form-control"><?php echo $tampil['alamat']; ?></textarea>
                        </div>


                         <div class="form-group">
                           <label>JENIS KELAMIN :</label>
                            <select  name="gender" class="form-control show-tick" >              
                            <option>Pilih jenis kelamin</option>
                            <?php 
                            if ($tampil['gender'] == 'Pria') 
                            {
                            echo'<option value="Pria" selected>PRIA</option>
                                <option value="Wanita">WANITA</option>';
                            }
                            elseif ($tampil['gender'] == 'Wanita') 
                            {
                                echo '<option value="Pria" >PRIA</option>
                                    <option value="Wanita" selected>WANITA</option>';
                            }
                             
                            ?>
                            
                            
                                </select>
                            </div>
       

                        <div class="form-group">
                        <label>AGAMA</label>
                        <input type="text" name="agama" value="<?php echo $tampil['agama']; ?>"  class="form-control">
                        </div>

                        <div class="form-group">
                        <label>TANGGAL LAHIR</label>
                        <input type="date" name="birthday" value="<?php echo $tampil['birthday']; ?>"  class="form-control">
                        </div>
        
      
           
            <input class="btn btn-primary btn-md"  type="submit" value="Simpan">
            <a class="btn btn-warning btn-md" href="karyawan.php">Kembali</a>
        </form>

        <?php
    }
        ?>
</div>
</div>
</div>



 <?php
  include 'footer.php'
  ?>