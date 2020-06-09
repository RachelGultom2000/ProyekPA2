<?php
    require_once('Layout/header.php');
    if(!isset($_SESSION['login'])) {
        include("login.php");
        session_start();
    }
    else {
?>
    <?php
        $conn = mysqli_connect("localhost","root","","pa2");
        $result = mysqli_query($conn,"SELECT * FROM dokumen");

       //while( $hasil = mysqli_fetch_assoc($result))
       //{
         //   var_dump($hasil);
       //}
    ?>
<!-- Melakukan koneksi ke dalam folder layout untuk mendapatkan header -->



<div class="col-md-12">
    <center><h3><b> <img src="img/rps.png" style="width:25px; height:25px;">History Forum</b></h3></center>
    &nbsp;
</div>
        <div class="col-md-2 col-md-offset-10">
          <input class="form-control" type="search" placeholder="Cari Dokumen...">
          <br>
        </div>

<table class="table table-hover text-center">
    <thead>
    <th class="text-center">Nama File</th>
        <th class="text-center">Dosen Pengampu</th>
        <th class="text-center">Jenis File
        <th class="text-center">Program Studi</th>
		<th class="text-center">File</th>
        <th class="text-center">Deskripsi</th>
        <th class="text-center">Berita Acara</th>
        <th class="text-center">Daftar Hadir</th>
        <th class="text-center">Konfirmasi Layak Cetak</th>
        <th class="text-center">Status</th>
</thead>

<tbody class="table-hover">
    <?php while($row = mysqli_fetch_assoc($result)) :?>
    <tr>
    <td class="text-center"><?= $row["nama_file"]; ?></td>
        <td class="text-center"><?= $row["dosen_pengampu"]; ?></td>
        <td class="text-center"><?= $row["jenis"]; ?></td>
        <td class="text-center"><?= $row["prodi"]; ?></td>
        <td class="text-center"><a href="#"><?= $row["upload"]; ?></td>
        <td class="text-center"><?= $row["deskripsi"]; ?></td>
        <td class="text-center"><a href="#">Download</td>
        <td class="text-center"><a href="#">Download</td>
        <td class="text-center"><a href="#">Download</td>
        <td class="text-center" style="color:	#7FFF00;">Selesai</td>
    </tr>
<?php endwhile; ?>
    
</tbody>
</table>

<!-- Melakukan koneksi ke dalam folder layout untuk mendapatkan footer -->
<?php
    require_once('layout/footer.php');
}
?>


        
