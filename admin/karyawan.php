<?php 
include 'header.php' 
?>


    <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
            </div>
            <div class="card-body">

               <a class="btn btn-primary btn-md" href="tambahkaryawan.php">Tambah Data Karyawan</a>
                    <br>
                    <br>
                    

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <th>NAMA</th>
                      <th>EMAIL</th>
                      <th>NO. TELPON</th>
                      <th>ALAMAT</th>
                      <th>Action</th>
                    </tr>
                  </thead>
        <?php 
		include '../config/koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM karyawan;");
    while($tampil = mysqli_fetch_array($data))
    {
			?>
                  <tbody>
                    <tr>
                    <td><?php echo $tampil['id_karyawan']; ?></td>
                      <td><?php echo $tampil['name']; ?></td>
                      <td><?php echo $tampil['email']; ?></td>
                      <td><?php echo $tampil['notelpon']; ?></td>
                      <td><?php echo $tampil['alamat']; ?></td>
                        <td>   

                         <button class="view_data1 btn btn-primary btn-md"  data-target="#karyawan" id="<?php echo $tampil['id_karyawan']; ?>" data-toggle="modal" >Detail</button>
                          <a class="btn btn-success btn-md" href="editkaryawan.php?id=<?php echo $tampil['id_karyawan']; ?>">Edit</a>
                          <a class="btn btn-danger btn-md" href="hapuskaryawan.php?id=<?php echo $tampil['id_karyawan']; ?>">Hapus</a>
                       
                    
                    </td>
                    </tr>
                
                  </tbody>
                    <?php
        }
                  ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

           <!-- /.container-fluid -->
	<div class="modal fade" id="karyawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			
				</div>
				<!-- memulai untuk konten dinamis -->
				<!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
				<div class="modal-body" id="data_karyawan">
				</div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
  </div>


 <?php
  include 'footer.php'
  ?>
  
      	<script>
	// ini menyiapkan dokumen agar siap grak :)
	$(document).ready(function(){
		// yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
		$('.view_data1').click(function(){
			// membuat variabel id, nilainya dari attribut id pada button
			// id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
			var id = $(this).attr("id");
			
			// memulai ajax
			$.ajax({
				url: 'detail.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
				method: 'POST',		// method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
				data: {id:id},		// nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
				success:function(data){		// kode dibawah ini jalan kalau sukses
					$('#data_karyawan').html(data);	// mengisi konten dari -> <div class="modal-body" id="data_siswa">
					$('#karyawan').modal("show");	// menampilkan dialog modal nya
				}
			});
		});
	});
  </script>