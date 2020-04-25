<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>PENDAFTARAN ONLINE</title>
    </head>

    <body>
        <style>
            .utama{
                margin:0 auto;
                border:thin solid #000;
                width:750px;
            }
            .print{
                margin:0 auto;
                width:700px;
            }
            a{
                text-decoration: none;

            }
        </style>
        <div class="print">
            <a href="#" onclick="document.getElementById('print').style.display='none';window.print();"><img src="img/print-icon.png" id="print" width="25" height="25" border="0" /></a>
        </div>
        <div class="utama">
            <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top:10px;">
                <tr>
                    <td width="7%" rowspan="3" align="center" valign="top"><img src="img/logo.png" width="55" height="55" /></td>
                    <td width="93%" valign="top"><strong>&nbsp;Pendaftaran Murid Baru </strong></td>
                </tr>
                <tr>
                    <td valign="top">&nbsp;SMK Wikrama Kota Garut </td>
                </tr>
                <tr>
                    <td valign="top">&nbsp;Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah </td>
                </tr>
            </table>
			<?php 
				$no=0;
				$sql = mysqli_query($con, "SELECT * FROM biodata");
			while($r=mysqli_fetch_array($sql)){
			$no++;
			?>
            <div class="container">
            <form method="post">
            	<table class="table table-responsive">
            		<tbody>
            		<tr>
            		<th scope="col">Data Diri Siswa</th>
            		</tr>
            	</tbody>
            	</table>
					
                  <!-- <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-check" required>
                  </div> -->

            	<div class="form-group">
            		<label>Nama Siswa : </label>
            		<?php echo $r['nama_siswa'] ?>
            	</div>

				<div class="form-group">
            		<label>Nama Panggilan : </label>
            		<?php echo $r['nama_panggilan']; ?>
            	</div>

            	<div class="form-group">
          	  		<label>Jenis Kelamin : </label>
            		<?php echo $r['jk']; ?>
            	</div>

            	<div class="form-group">
            		<label>Tempat Tanggal Lahir : </label>
            		<?php echo $r['ttl']; ?>
            	</div>

                  <div class="form-group">
                        <label>Agama : </label>
                        <?php echo $r['agama']; ?>
                  </div>
                  
                        
                  <!-- Gk jadi yang bawah -->
            	<!-- <div class="form-group">
            		<label>Agama</label>
            		<input type="text" name="agama" class="form-control" placeholder="Agama" required>
            	</div> -->

            	 <div class="form-group">
                        <br>
            		<label>Cita-Cita : </label>
            		<?php echo $r['cita']; ?>
            	</div>

            	 <div class="form-group">
            		<label>Hobi : </label>
            		<?php echo $r['hoby']; ?>
            	</div>

				<div class="form-group">
            		<label>Anak Ke : </label>
            		<?php echo $r['anak']; ?>
            	</div>

            	<div class="form-group">
            		<label>Jumlah Saudara : </label>
            		<?php echo $r['jmlh_sdra']; ?>
            	</div>

            	<div class="form-group">
            		<label>Berat Badan : </label>
            		<?php echo $r['bb']." Kg"; ?>
            	</div>

            	<div class="form-group">
            		<label>Tinggi Badan : </label>
            		<?php echo $r['tb']. " CM"; ?>
            	</div>

                  <div class="form-group">
                        <label>Golongan Darah : </label>
                        <?php echo $r['goldar']; ?>
                  </div>
                  
      
            	<!-- <div class="form-group">
            		<label>Golongan Darah</label>
            		<div class="form-check">
            			<input type="radio" name="goldar" value="A" class="form-check-input" required>
            			<label>A</label>
            		</div>

					<div class="form-check">
            			<input type="radio" name="goldar" value="B" class="form-check-input" required>
            			<label>B</label>
            		</div>      

            		<div class="form-check">
            			<input type="radio" name="goldar" value="AB" class="form-check-input" required>
            			<label>AB</label>
            		</div>

            		<div class="form-check">
            			<input type="radio" name="goldar" value="O" class="form-check-input" required>
            			<label>O</label>
            		</div>      		
            	</div> -->
            	<table class="table table-responsive">
                        <br><br>
				<tbody>
            		<tr>
            		<th scope="col">KETERANGAN TEMPAT TINGGAL</th>
            		</tr>
            	</tbody>
            	</table>	
            	<div class="form-group">
            		<label>Alamat Rumah : </label>
            		<?php echo $r['alamat_rmh']; ?>
            	</div>

				<div class="form-group">
            		<label>RT : </label>
            		<?php echo $r['rt']; ?>
            	</div>

            	<div class="form-group">
            		<label>RW : </label>
            		<?php echo $r['rw']; ?>
            	</div>

            	<div class="form-group">
            		<label>Kelurahan : </label>
            		<?php echo $r['kelurahan']; ?>
            	</div>

            	<div class="form-group">
            		<label>Kecamatan : </label>
            		<?php echo $r['kecamatan']; ?>
            	</div>

            	<div class="form-group">
            		<label>Kota : </label>
            		<?php echo $r['kota']; ?>
            	</div>

            	<div class="form-group">
            		<label>Provinsi : </label>
            		<?php echo $r['prov']; ?>
            	</div>

                  <div class="form-group">
                        <label>Telp Rumah : </label>
                        <?php echo $r['telp_rmh']; ?>
                  </div>

                  <div class="form-group">
                        <label>Email : </label>
                        <?php echo $r['email']; ?>
                  </div>

                  <div class="form-group">
                        <label>Tinggal Dengan : </label>
                        <?php echo $r['tinggal_dengan']; ?>
                  </div>
                  

<!--                   <div class="form-group">
                        <label>Tinggal Dengan</label>

                        <div class="form-check">
                        <input type="radio" name="tinggal_dengan" value="ortu" class="form-check-input" required>
                        <label>Orang Tua</label>
                        </div>

                        <div class="form-check">
                        <input type="radio" name="tinggal_dengan" value="asrama" class="form-check-input" required>
                        <label>Asrama</label>
                        </div>

                        <div class="form-check">
                        <input type="radio" name="tinggal_dengan" value="saudara" class="form-check-input" required>
                        <label>Saudara</label>
                        </div>

                  </div>                  --> 
                        
                  <table class="table table-responsive">
                        <br><br>
                        <tbody>
                        <tr>
                        <th scope="col">KETERANGAN KESEHATAN</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Penyakit yg pernah diderita : </label>
                        <?php echo $r['penyakit']; ?>
                  </div>

                  <div class="form-group">
                        <label>TBC : </label>
                        <?php echo $r['tbc']; ?>
                  </div>

                  <div class="form-group">
                        <label>Malaria : </label>
                        <?php echo $r['malaria']; ?>
                  </div>

                  <div class="form-group">
                        <label>Chotipa : </label>
                        <?php echo $r['chotipa']; ?>
                  </div>

                  <div class="form-group">
                        <label>Cacar : </label>
                        <?php echo $r['cacar']; ?>
                  </div>

                  <div class="form-group">
                        <label>Lain-lain : </label>
                        <?php echo $r['dll']; ?>
                  </div>

                  <div class="form-group">
                        <label>Kelainan Jasmain lainnya : </label>
                        <?php echo $r['kelainan']; ?>
                  </div>

                  <table class="table table-responsive">
                        <tbody>
                        <tr>
                        <th scope="col">DATA ORANG TUA/WALI</th>
                        </tr>
                        <tr>
                        <th scope="col">1.Ayah</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Nama Ayah : </label>
                        <?php echo $r['nama_ayah']; ?>
                  </div>

                  <div class="form-group">
                        <label>Tempat,Tanggal Lahir : </label>
                        <?php echo $r['ttl_ayah']; ?>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan : </label>
                        <?php echo $r['pekerjaan_ayah']; ?>
                  </div>

                  <div class="form-group">
                        <label>Pendidikan Terakhir : </label>
                        <?php echo $r['pendidikan_ayah']; ?>
                  </div>

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama : </label>
                        <?php echo $r['agama_ayah']; ?>
                  </div>

                  <div class="form-group">
                        <label>NO Hp/WA : </label>
                        <?php echo $r['hp_ayah']; ?>
                  </div>

                  <table class="table table-responsive">
                        <tbody>
                        <tr>
                        <th scope="col">2.Ibu</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Nama Ibu : </label>
                        <?php echo $r['nama_ibu']; ?>
                  </div>

                  <div class="form-group">
                        <label>Tempat,Tanggal Lahir : </label>
                        <?php echo $r['ttl_ibu']; ?>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan : </label>
                        <?php echo $r['pekerjaan_ibu']; ?>
                  </div>

                  <div class="form-group">
                        <label>Pendidikan Terakhir : </label>
                        <?php echo $r['pendidikan_ibu']; ?>
                  </div>

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama : </label>
                        <?php echo $r['agama_ibu']; ?>
                  </div>

                  <div class="form-group">
                        <label>NO Hp/WA : </label>
                        <?php echo $r['hp_ibu']; ?>
                  </div>      

                  <table class="table table-responsive">
                        <tbody>
                        <tr>
                        <th scope="col">3.Wali</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Nama Wali : </label>
                        <?php echo $r['nama_wali']; ?>
                  </div>

                  <div class="form-group">
                        <label>Tempat,Tanggal Lahir : </label>
                        <?php echo $r['ttl_wali']; ?>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan : </label>
                        <?php echo $r['pekerjaan_wali']; ?>
                  </div>

                  <div class="form-group">
                        <label>Pendidikan Terakhir : </label>
                        <?php echo $r['pendidikan_wali']; ?>
                  </div>

                  <div class="form-group">
                        <label>Hubungan Dengan Murid : </label>
                        <?php echo $r['hub_murid']; ?>
                  </div>

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama : </label>
                        <?php echo $r['agama_wali']; ?>
                  </div>

                  <div class="form-group">
                        <label>NO Hp/WA : </label>
                        <?php echo $r['hp_wali']; ?>
                  </div>

                  <div class="form-group">
                        <label>Alamat Email : </label>
                        <?php echo $r['email_wali']; ?>
                  </div>

                  <table class="table-responsive">
                        <tbody>
                        <tr>
                        <th scope="col">NILAI RAPOR</th>
                        </tr>
                  </tbody>
                  </table>

                 <div class="form-group">
                        <table class="table table-bordered table-responsive">
                              <thead>
                                    <tr">
                                          <th rowspan="2" class="text-center">NO</th>
                                          <th rowspan="2" class="text-center">Mata Pelajaran</th>
                                          <th colspan="2" class="text-center">Kelas 7</th>  
                                          <th colspan="2" class="text-center">Kelas 8</th>
                                          <th class="text-center">Kelas 9</th>
                                    </tr>
                                    <tr>
                                          <th>Smt-1</th>
                                          <th>Smt-2</th>
                                          <th>Smt-1</th>
                                          <th>Smt-2</th>
                                          <th class="text-center">Smt-1</th>
                                    </tr>
                                    <tr>
                                          <th>1</th>
                                          <th>PAI</th>
                                          <th><?php echo $r['pai71']; ?></th>
                                          <th><?php echo $r['pai72']; ?></th>
                                          <th><?php echo $r['pai81']; ?></th>
                                          <th><?php echo $r['pai82']; ?></th>
                                          <th><?php echo $r['pai9']; ?></th>
                                   </tr>
                                    <tr>
                                          <th>2</th>
                                          <th>Bahasa Indonesia</th>
                                          <th><?php echo $r['indo71']; ?></th>
                                          <th><?php echo $r['indo72']; ?></th>
                                          <th><?php echo $r['indo81']; ?></th>
                                          <th><?php echo $r['indo82']; ?></th>
                                          <th><?php echo $r['indo9']; ?></th>
                                    </tr>
                                    <tr>
                                          <th>3</th>
                                          <th>Bahasa Inggris</th>
                                          <th><?php echo $r['inggris71']; ?></th>
                                          <th><?php echo $r['inggris72']; ?></th>
                                          <th><?php echo $r['inggris81']; ?></th>
                                          <th><?php echo $r['inggris82']; ?></th>
                                          <th><?php echo $r['inggris9']; ?></th>
                                    </tr>
                                    <tr>
                                          <th>4</th>
                                          <th>Matematika</th>
                                          <th><?php echo $r['mtk71']; ?></th>
                                          <th><?php echo $r['mtk72']; ?></th>
                                          <th><?php echo $r['mtk81']; ?></th>
                                          <th><?php echo $r['mtk82']; ?></th>
                                          <th><?php echo $r['mtk9']; ?></th>
                                    </tr>
                                    <tr>
                                          <th>5</th>
                                          <th>IPA</th>
                                          <th><?php echo $r['ipa71']; ?></th>
                                          <th><?php echo $r['ipa72']; ?></th>
                                          <th><?php echo $r['ipa81']; ?></th>
                                          <th><?php echo $r['ipa82']; ?></th>
                                          <th><?php echo $r['ipa9']; ?></th>
                                    </tr>
                                    <tr>
                                          <th>6</th>
                                          <th>IPS</th>
                                          <th><?php echo $r['ips71']; ?></th>
                                          <th><?php echo $r['ips72']; ?></th>
                                          <th><?php echo $r['ips81']; ?></th>
                                          <th><?php echo $r['ips82']; ?></th>
                                          <th><?php echo $r['ips9']; ?></th>
                                    </tr>
                                    <tr>
                                          <th>7</th>
                                          <th>Prestasi Yg Pernah Diraih</th>
                                          <th><?php echo $r['prestasi']; ?></th>
                                    </tr>
                              </thead>
                          <?php } ?>
                        </table>
                  </div>
              </form>
       <script type="text/javascript" src="js/bootstrap.min.js"></script>     
    </body>
    <center><p>&copy; <?php echo date('Y'); ?> SMK WIKRAMA GARUT</p></center>
</html>