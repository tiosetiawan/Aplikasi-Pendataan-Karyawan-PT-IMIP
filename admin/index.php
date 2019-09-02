<?php 
include 'header.php';
include '../config/koneksi.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

        <!-- Content Row -->
        <div class="row">

       <!-- Begin Page Content -->
        <div class="container-fluid">

         <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">JUMLAH DATA KARYAWAN</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                            include '../config/koneksi.php';
                        
                           $query1 =  "SELECT * FROM karyawan ";
                          $result = mysqli_query($koneksi, $query1);
                          $count = mysqli_num_rows($result);
                            echo " $count <br/>";
                        ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
           
          

       
      

        </div>
      </div> 
        <!-- /.container-fluid -->

        <!-- /.container-fluid -->
</div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PT. IMIP 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php
  include 'footer.php'
  ?>