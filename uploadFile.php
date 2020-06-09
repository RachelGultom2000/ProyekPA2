<?php
    require_once('Layout/header.php');
    if(!isset($_SESSION['login'])) {
        include("login.php");
        session_start();
    }
    else {
?>
        <?php
            //koneksi database
            $conn = mysqli_connect("localhost","root","","pa2");
            if($conn->connect_error){
                die("Fatal Error: Can't connect to database: ". $conn->connect_error);
            }
            if(isset($_POST["submit"])){
                
                $namafile = $_POST["namafile"];
                $dosenpengampu = $_POST["dosenpengampu"];
                $jenisfile = $_POST["jenisfile"];
                $prodi = $_POST["prodi"];
                $upload = $_POST["upload"];
                $deskripsi = $_POST["deskripsi"];
                $matakuliah = $_POST["matakuliah"];

                $query = "INSERT INTO dokumen(id_file,mata_kuliah,nama_file,dosen_pengampu,prodi,upload,jenis,deskripsi) VALUES('','$namafile','$matakuliah','$dosenpengampu','$prodi','$upload','$jenisfile','$deskripsi')";
                mysqli_query($conn,$query);
                
            }
            ?>
<!-- Melakukan koneksi ke dalam folder layout untuk mendapatkan header -->

<center><h3><b> <img src="img/rps.png" style="width:25px; height:25px;">Upload File</b></h3></center>

<div class="col-md-1">
    <br>
    <a href="daftarFile.php"><button type='button' class='btn btn-primary center-block' style="margin-bottom:20px; border: 1px solid #000000; border-radius: 4px; font-size:12px; background-color:#548FF6;"><img src="img/rps.png" style="width:18px; height:18px;">&nbsp; Daftar File </button></a>
</div>
  
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10">

    <form action=" " method="post">
        <table width="100%" border="0">
		    <tr> 
                <td><h4><b>Nama Berkas   </b></h4></td>
                <td><input type="text" name="namafile" id="namafile" placeholder="Pemograman Teknologi .NET" size="45" required></td>
            </tr>
            <tr>
                <td><h4><b>Mata Kuliah</b></h4></td>
                <td><select class="form-control" name="matakuliah" id="matakuliah" aria-required="true" style="width:280px;">
                            <option value=" ">-- OPSIONAL --</option>
                            <option value="PA1">PA1</option>
                            <option value="PA3">PA2</option>
                            <option value="PSW1">PSW1</option>
                            <option value="PSW2">PSW2</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td><h4><b>Dosen Pengampu   </b></h4></td>
                <td><select class="form-control" name="dosenpengampu" id="dosenpengampu" aria-required="true" style="width:280px;">
                            <option value=" ">-- Pilih dosen yang ingin di undang --</option>
                            <option value="Lit Malem Ginting M.T">Lit Malem Ginting M.T</option>
                            <option value="Dr. Arnaldo Marulitua Sinaga,ST,M.InfoTech">Dr. Arnaldo Marulitua Sinaga,ST,M.InfoTech</option>
                            <option value="FI Gde Eka Dirgayussa S.Pd,M.Si">FI Gde Eka Dirgayussa S.Pd,M.Si</option>
                            
                            
                    </select>
            </tr>

            <tr>
                <td><h4><b>Undang Dosen</b></h4></td>
                <td><select class="form-control" name="undangdosen" id="undangdosen" aria-required="true" style="width:280px;">
                            <option value=" ">-- Pilih dosen yang ingin di undang --</option>
                            <option value="Lit Malem Ginting M.T">Lit Malem Ginting M.T</option>
                            <option value="Dr. Arnaldo Marulitua Sinaga,ST,M.InfoTech">Dr. Arnaldo Marulitua Sinaga,ST,M.InfoTech</option>
                            <option value="FI Gde Eka Dirgayussa S.Pd,M.Si">FI Gde Eka Dirgayussa S.Pd,M.Si</option>    
                    </select>
                </td>
            </tr>

            <tr>
            <td>
            <tr>
                <td><h4><b>Jenis File </b></h4></td>
                <td><select class="form-control" name="jenisfile" id="jenisfile" aria-required="true" style="width:280px;">
                            <option value=" ">-- Jenis File --</option>
                            <option value="fileRPS">File RPS</option>
                            <option value="fileSoal">File Soal</option>
                            <option value="filePost">File Post Evaluation</option>
                    </select> 
                </td>
            </tr>

            <tr> 
                <td><h4><b>Program Studi  </b></h4></td>
                <td><select class="form-control" name="prodi" id="prodi" aria-required="true" style="width:280px;"> 
                            <option value=" ">-- Program Studi --</option>
                            <option value="D3TI">DIII Teknologi Informasi</option>
                            <option value="D3TK">DIII Teknik Komputer</option>
                            <option value="D4TRPL">DIV Teknologi Rekayasa Perangkat Lunak</option>
                            <option value="S1IF">S1 Informatika</option>
                            <option value="S1SI">S1 Sistem Informasi</option>
                            <option value="S1TE">S1 Teknik Elektro</option>          
                        </select>     
                </td>
            </tr>
            

            <tr> 
                <td><h4><b>Upload File   </b></h4></td>
                <td>
                <input class="form-control" type="file" name="upload" id="upload" style="width:280px;"/>
                </td>
            </tr>

            <tr>
                <td><h4><b>Deskripsi </b></h4></td>
                <td>
                        <textarea rows="5" cols="60" name="deskripsi" id="deskripsi"></textarea><br/> 
                </td>
            </tr>

            
            <br>
            <br>
            <tr>
                <td colspan="2">
                    <button type='submit' name="submit" class='btn btn-success center-block' style="margin-bottom:20px;">Upload</button>
                </td>
            </tr>     
    
        </table>
    </form>
    

<br>
</div>
</div>
</div>
</div>

<!-- Melakukan koneksi ke dalam folder layout untuk mendapatkan footer -->
<?php
    require_once('layout/footer.php');
}
?>

