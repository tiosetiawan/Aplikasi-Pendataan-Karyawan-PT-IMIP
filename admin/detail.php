
<?php

    include '../config/koneksi.php';
 

if($_POST['id']){

	$id = $_POST['id'];
	
	$view = $koneksi->query("SELECT * FROM karyawan where  id_karyawan = '$id'");

	if($view->num_rows){
		
		$row_view = $view->fetch_assoc();
	
		echo '
		<p>Berikut ini adalah detail data karyawan atas nama <b>'.$row_view['name'].'</b></p>
		<table class="table table-bordered">
			<tr>
				<th>NAMA KARYAWAN</th>
				<td>'.$row_view['name'].'</td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td>'.$row_view['email'].'</td>
			</tr>
			<tr>
				<th>NO. TELPON</th>
				<td>'.$row_view['notelpon'].'</td>
            </tr>

            	<tr>
				<th>ALAMAT</th>
				<td>'.$row_view['alamat'].'</td>
            </tr>

            	<tr>
				<th>JENIS KELAMIN</th>
				<td>'.$row_view['gender'].'</td>
            </tr>
          
            <tr>
				<th>AGAMA</th>
				<td>'.$row_view['agama'].'</td>
            </tr>
            
             <tr>
				<th>TANGGAL LAHIR</th>
				<td>'; echo date("d  F  Y", strtotime($row_view['birthday'])); echo'</td>
			</tr>
        </table>
        
         
		';
	}
}
?>