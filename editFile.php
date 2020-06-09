<?php
    require_once('Layout/header.php');
    session_start();
    if(!isset($_SESSION['login'])) {
        include("login.php");
    }
    else {
?>
<!-- Melakukan koneksi ke dalam folder layout untuk mendapatkan header -->

<center><h3><b> <img src="img/rps.png" style="width:25px; height:25px;">Edit File</b></h3></center>

<div class="col-md-2">

    <br>
   
</div>
  
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10">

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
		    <tr> 
                <td><h4><b>Nama File   </b></h4></td>
                <td><input type="text" name="nama_file" placeholder="Pemograman Teknologi .NET" size="45" required></td>
            </tr>
            
            <tr> 
                <td><h4><b>Dosen Pengampu   </b></h4></td>
                <td><input type="text" name="dosen_pengampu" placeholder="Lit Malem Ginting M.T" size="45" required></td>
            </tr>

            <tr>
                <td><h4><b>Jenis File </b></h4></td>
                <td><select class="form-control" name="file" aria-required="true" style="width:200px;">
                            <option value="#">-- Jenis File --</option>
                            <option value="fileRPS">File RPS</option>
                            <option value="fileSoal">File Soal</option>
                            <option value="filePost">File Post Evaluation</option>
                    </select> 
                </td>
            </tr>

            <tr> 
                <td><h4><b>Program Studi  </b></h4></td>
                <td><select class="form-control" name="prodi" aria-required="true" style="width:200px;"> 
                            <option value="#">-- Program Studi --</option>
                            <option value="D3TI">DIII Teknologi Informasi</option>
                            <option value="D3TK">DIII Teknik Komputer</option>
                            <option value="D4TRPL">DIV Teknologi Rekayasa Perangkat Lunak</option>
                            <option value="S1IF">S1 Informatika</option>
                            <option value="S1SI">S1 Sistem Informasi</option>
                            <option value="S1TE">S1 Teknik Elektro</option>               
                </td>
            </tr>

            <tr> 
                <td><h4><b>Upload File   </b></h4></td>
                <td><form action="#" method="post" enctype="multipart/form-data" class="btn btn-block">
                    <input type="file" name="file">
                </form></td>
            </tr>

            <tr>
                <td><h4><b>Deskripsi </b></h4></td>
                <td><form action="#" method="post">
                        <textarea rows="5" cols="60" name="deskripsi"></textarea><br/> 
                </td>
            </tr>

            
            <br>
            <br>

            
                
        
            
        </table>
    </form>
    

<br>
</div>
</div>
</div>
</div>
<button type='button' class='btn btn-success center-block' style="margin-bottom:20px;">Update</button>

<!-- Melakukan koneksi ke dalam folder layout untuk mendapatkan footer -->
<?php
    require_once('layout/footer.php');
}
?>

