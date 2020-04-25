<?php 

include 'config/koneksi.php';
	session_start();


	if (isset($_POST['simpan'])) {
            // $name = $_FILES['foto']['name'];
            // $file = $_FILES['foto']['tmp_name'];
            // move_uploaded_file($file,'img/'.$name);

    $sql = mysqli_query($con, "INSERT INTO biodata VALUES('','$_POST[nama_siswa]','$_POST[nama_panggilan]','$_POST[jk]','$_POST[ttl]','$_POST[agama]','$_POST[cita]','$_POST[hoby]','$_POST[anak]','$_POST[jmlh_sdra]','$_POST[bb]','$_POST[tb]','$_POST[goldar]','$_POST[alamat_rmh]','$_POST[rt]','$_POST[rw]','$_POST[kelurahan]','$_POST[kecamatan]','$_POST[kota]','$_POST[prov]','$_POST[telp_rmh]','$_POST[email]','$_POST[tinggal_dengan]','$_POST[penyakit]','$_POST[tbc]','$_POST[malaria]','$_POST[chotipa]','$_POST[cacar]','$_POST[dll]','$_POST[kelainan]','$_POST[nama_ayah]','$_POST[ttl_ayah]','$_POST[pekerjaan_ayah]','$_POST[pendidikan_ayah]','$_POST[agama_ayah]','$_POST[hp_ayah]','$_POST[nama_ibu]','$_POST[ttl_ibu]','$_POST[pekerjaan_ibu]','$_POST[pendidikan_ibu]','$_POST[agama_ibu]','$_POST[hp_ibu]','$_POST[nama_wali]','$_POST[ttl_wali]','$_POST[pekerjaan_wali]','$_POST[pendidikan_wali]','$_POST[hub_murid]','$_POST[agama_wali]','$_POST[hp_wali]','$_POST[email_wali]','$_POST[ipa71]','$_POST[ipa72]','$_POST[ipa81]','$_POST[ipa82]','$_POST[ipa9]','$_POST[indo71]','$_POST[indo72]','$_POST[indo81]','$_POST[indo82]','$_POST[indo9]','$_POST[inggris71]','$_POST[inggris72]','$_POST[inggris81]','$_POST[inggris82]','$_POST[inggris9]','$_POST[mtk71]','$_POST[mtk72]','$_POST[mtk81]','$_POST[mtk82]','$_POST[mtk9]','$_POST[ipa71]','$_POST[ipa72]','$_POST[ipa81]','$_POST[ipa82]','$_POST[ipa9]','$_POST[ips71]','$_POST[ips72]','$_POST[ips81]','$_POST[ips82]','$_POST[ips9]','$_POST[prestasi]')");
    
    if($sql){
      echo "<script>alert('Berhasil Daftar');document.location.href='konfirmasi.php'</script>";
    }else{
      echo "<script>alert('Gagal Daftar');document.location.href='daftar.php'</script>";
    }
  }

 ?>

<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Pendaftaran Online</title>
		<h3 class="jumbotron jumbotron-fluid text-center">SILAHKAN ISI DATA DI BAWAH TERLEBIH DAHULU</h3>
	</head>
	<body>
		<div class="container">
            <form method="post">
            	<table class="table">
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
            		<label>Nama Siswa</label>
            		<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required>
            	</div>

				<div class="form-group">
            		<label>Nama Panggilan</label>
            		<input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" required>
            	</div>

            	<div class="form-group">
          	  		<label>Jenis Kelamin</label>
            		<div class="form-check">
            			<input type="radio" name="jk" value="l" class="form-check-input" required>
            			<label>L</label>
            		</div>

            		<div class="form-check">
            			<input type="radio" name="jk" value="p" class="form-check-input" required>
            			<label>P</label>
            		</div>
            	</div>

            	<div class="form-group">
            		<label>Tempat Tanggal Lahir</label>
            		<input type="text" name="ttl" class="form-control" placeholder="Tempat Tanggal Lahir" required>
            	</div>

                  <div class="form-group">
                        <label>Agama</label>
                  </div>
                  <select name="agama" id="">
                       <option value="Islam">Islam</option>
                       <option value="Kristen">Kristen</option>
                       <option value="Hindu">Hindu</option>
                       <option value="Budha">Budha</option>
                       <option value="Konghucu">Konghucu</option>
                  </select>
                        
                  <!-- Gk jadi yang bawah -->
            	<!-- <div class="form-group">
            		<label>Agama</label>
            		<input type="text" name="agama" class="form-control" placeholder="Agama" required>
            	</div> -->

            	 <div class="form-group">
                        <br>
            		<label>Cita-Cita</label>
            		<input type="text" name="cita" class="form-control" placeholder="Cita-Cita" required>
            	</div>

            	 <div class="form-group">
            		<label>Hobi</label>
            		<input type="text" name="hoby" class="form-control" placeholder="Hobi Anda" required>
            	</div>

				<div class="form-group">
            		<label>Anak Ke</label>
            		<input type="number" name="anak" class="form-control" placeholder="Anak ke" required>
            	</div>

            	<div class="form-group">
            		<label>Jumlah Saudara</label>
            		<input type="number" name="jmlh_sdra" class="form-control" placeholder="Jumlah Saudara" required>
            	</div>

            	<div class="form-group">
            		<label>Berat Badan</label>
            		<input type="number" name="bb" class="form-control" placeholder="Kg" required>
            	</div>

            	<div class="form-group">
            		<label>Tinggi Badan</label>
            		<input type="number" name="tb" class="form-control" placeholder="Cm" required>
            	</div>

                  <div class="form-group">
                        <label>Golongan Darah</label>
                  </div>
                  <select name="goldar" id="">
                       <option value="A">A</option>
                       <option value="B">B</option>
                       <option value="AB">AB</option>
                       <option value="O">O</option>
                  </select>
      
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
            	<table class="table">
                        <br><br>
				<tbody>
            		<tr>
            		<th scope="col">KETERANGAN TEMPAT TINGGAL</th>
            		</tr>
            	</tbody>
            	</table>	
            	<div class="form-group">
            		<label>Alamat Rumah</label>
            		<input type="text" name="alamat_rmh" class="form-control" placeholder="Alamat Anda" required>
            	</div>

				<div class="form-group">
            		<label>RT</label>
            		<input type="number" name="rt" class="form-control" placeholder="Rt" required>
            	</div>

            	<div class="form-group">
            		<label>RW</label>
            		<input type="number" name="rw" class="form-control" placeholder="Rw" required>
            	</div>

            	<div class="form-group">
            		<label>Kelurahan</label>
            		<input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" required>
            	</div>

            	<div class="form-group">
            		<label>Kecamatan</label>
            		<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
            	</div>

            	<div class="form-group">
            		<label>Kota</label>
            		<input type="text" name="kota" class="form-control" placeholder="Kota" required>
            	</div>

            	<div class="form-group">
            		<label>Provinsi</label>
            		<input type="text" name="prov" class="form-control" placeholder="Provinsi" required>
            	</div>

                  <div class="form-group">
                        <label>Telp Rumah</label>
                        <input type="number" name="telp_rmh" class="form-control" placeholder="Telp Rumah" required>
                  </div>

                  <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>

                  <div class="form-group">
                        <label>Tinggal Dengan</label>
                  </div>
                  <select name="tinggal_dengan" id="">
                       <option value="ortu">Orang Tua</option>
                       <option value="asrama">Asrama</option>
                       <option value="saudara">Saudara</option>
                  </select>

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
                        
                  <table class="table">
                        <br><br>
                        <tbody>
                        <tr>
                        <th scope="col">KETERANGAN KESEHATAN</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Penyakit yg pernah diderita</label>
                        <input type="text" name="penyakit" class="form-control" placeholder="Penyakit" required>
                  </div>

                  <div class="form-group">
                        <label>TBC</label>
                        <input type="text" name="tbc" class="form-control" placeholder="Sebutkan/kapan" required>
                  </div>

                  <div class="form-group">
                        <label>Malaria</label>
                        <input type="text" name="malaria" class="form-control" placeholder="Sebutkan/kapan" required>
                  </div>

                  <div class="form-group">
                        <label>Chotipa</label>
                        <input type="text" name="chotipa" class="form-control" placeholder="Sebutkan/kapan" required>
                  </div>

                  <div class="form-group">
                        <label>Cacar</label>
                        <input type="text" name="cacar" class="form-control" placeholder="Sebutkan/kapan" required>
                  </div>

                  <div class="form-group">
                        <label>Lain-lain</label>
                        <input type="text" name="dll" class="form-control" placeholder="Sebutkan/kapan" required>
                  </div>

                  <div class="form-group">
                        <label>Kelainan Jasmain lainnya</label>
                        <input type="text" name="kelainan" class="form-control" placeholder="Sebutkan/kapan" required>
                  </div>

                  <table class="table">
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
                        <label>Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama" required>
                  </div>

                  <div class="form-group">
                        <label>Tempat,Tanggal Lahir</label>
                        <input type="text" name="ttl_ayah" class="form-control" placeholder="TTL" required>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan" required>
                  </div>

                  <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_ayah" class="form-control" placeholder="Pendidikan" required>
                  </div>

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama</label>
                        <input type="text" name="agama_ayah" class="form-control" placeholder="Warga" required>
                  </div>

                  <div class="form-group">
                        <label>NO Hp/WA</label>
                        <input type="number" name="hp_ayah" class="form-control" placeholder="NO HP" required>
                  </div>

                  <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">2.Ibu</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama" required>
                  </div>

                  <div class="form-group">
                        <label>Tempat,Tanggal Lahir</label>
                        <input type="text" name="ttl_ibu" class="form-control" placeholder="TTL" required>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan" required>
                  </div>

                  <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_ibu" class="form-control" placeholder="Pendidikan" required>
                  </div>

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama</label>
                        <input type="text" name="agama_ibu" class="form-control" placeholder="Warga" required>
                  </div>

                  <div class="form-group">
                        <label>NO Hp/WA</label>
                        <input type="number" name="hp_ibu" class="form-control" placeholder="NO HP" required>
                  </div>      

                  <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">3.Wali</th>
                        </tr>
                  </tbody>
                  </table>
                        
                  <div class="form-group">
                        <label>Nama Wali</label>
                        <input type="text" name="nama_wali" class="form-control" placeholder="Nama" required>
                  </div>

                  <div class="form-group">
                        <label>Tempat,Tanggal Lahir</label>
                        <input type="text" name="ttl_wali" class="form-control" placeholder="TTL" required>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan" required>
                  </div>

                  <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_wali" class="form-control" placeholder="Pendidikan" required>
                  </div>

                  <div class="form-group">
                        <label>Hubungan Dengan Murid</label>
                        <input type="text" name="hub_murid" class="form-control" placeholder="Hubungan" required>
                  </div>

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama</label>
                        <input type="text" name="agama_wali" class="form-control" placeholder="Warga" required>
                  </div>

                  <div class="form-group">
                        <label>NO Hp/WA</label>
                        <input type="number" name="hp_wali" class="form-control" placeholder="NO HP" required>
                  </div>

                  <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email_wali" class="form-control" placeholder="Email" required>
                  </div>

                  <table class="table">
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
                                          <th><input type="number" name="pai71"></th>
                                          <th><input type="number" name="pai72"></th>
                                          <th><input type="number" name="pai81"></th>
                                          <th><input type="number" name="pai82"></th>
                                          <th><input type="number" name="pai9"></th>
                                   </tr>
                                    <tr>
                                          <th>2</th>
                                          <th>Bahasa Indonesia</th>
                                          <th><input type="number" name="indo71"></th>
                                          <th><input type="number" name="indo72"></th>
                                          <th><input type="number" name="indo81"></th>
                                          <th><input type="number" name="indo82"></th>
                                          <th><input type="number" name="indo9"></th>
                                    </tr>
                                    <tr>
                                          <th>3</th>
                                          <th>Bahasa Inggris</th>
                                          <th><input type="number" name="inggris71"></th>
                                          <th><input type="number" name="inggris72"></th>
                                          <th><input type="number" name="inggris81"></th>
                                          <th><input type="number" name="inggris82"></th>
                                          <th><input type="number" name="inggris9"></th>
                                    </tr>
                                    <tr>
                                          <th>4</th>
                                          <th>Matematika</th>
                                          <th><input type="number" name="mtk71"></th>
                                          <th><input type="number" name="mtk72"></th>
                                          <th><input type="number" name="mtk81"></th>
                                          <th><input type="number" name="mtk82"></th>
                                          <th><input type="number" name="mtk9"></th>
                                    </tr>
                                    <tr>
                                          <th>5</th>
                                          <th>IPA</th>
                                          <th><input type="number" name="ipa71"></th>
                                          <th><input type="number" name="ipa72"></th>
                                          <th><input type="number" name="ipa81"></th>
                                          <th><input type="number" name="ipa82"></th>
                                          <th><input type="number" name="ipa9"></th>
                                    </tr>
                                    <tr>
                                          <th>6</th>
                                          <th>IPS</th>
                                          <th><input type="number" name="ips71"></th>
                                          <th><input type="number" name="ips72"></th>
                                          <th><input type="number" name="ips81"></th>
                                          <th><input type="number" name="ips82"></th>
                                          <th><input type="number" name="ips9"></th>
                                    </tr>
                                    <tr>
                                          <th>7</th>
                                          <th>Prestasi Yg Pernah Diraih</th>
                                          <th colspan="5"><input type="text" name="prestasi"></th>
                                    </tr>
                              </thead>
                        </table>
                  </div>




	     			<button type="submit"  name="simpan" class="btn btn-primary">SIMPAN</button>
      			<button type="reset" name="reset" class="btn btn-danger">RESET</button>
           	 
            </form>
         </div>     
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>