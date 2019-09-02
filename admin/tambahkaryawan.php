<?php 
include 'header.php' 
?>


       <div class="container-fluid">
          <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-body">
                    
                        <form method="post" action="simpankaryawan.php">
                      
                        <div class="form-group">
                        <label>NAMA KARYAWAN :</label>
                        <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                        <label>EMAIL</label>
                        <input type="text" name="email" class="form-control">
                        </div>
                    
                        <div class="form-group">
                        <label>NO. TELPON</label>
                        <input type="text" name="notelpon" class="form-control">
                        </div>

                        <div class="form-group">
                        <label>ALAMAT</label>
                        <textarea type="text" name="alamat" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                        <label>JENIS KELAMIN :</label>
                            <select  name="gender" class="form-control show-tick" >              
                            <option>Pilih jenis kelamin</option>
                            <option value="Pria">PRIA</option>
                            <option value="Wanita">WANITA</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <label>AGAMA</label>
                        <input type="text" name="agama" class="form-control">
                        </div>

                        <div class="form-group">
                        <label>TANGGAL LAHIR</label>
                        <input type="date" name="birthday" class="form-control">
                        </div>

                        
                        
                        <input class="btn btn-primary btn-md"  type="submit" value="Simpan">
                        <a class="btn btn-warning btn-md" href="karyawan.php">Kembali</a>
                    
                    </form>
             </div>
                  </div>
                     </div>

     

 <?php
  include 'footer.php'
  ?>