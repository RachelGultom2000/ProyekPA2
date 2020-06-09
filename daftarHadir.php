<?php

require_once('layout/header.php');
if(!isset($_SESSION['login'])) {
    include("login.php");
    session_start();
}

?>

<?php
include 'koneksi.php';
?>
 
	<style type="text/css">
		table {
			font-size: 17px;
		}
		thead {
			font-weight: bold;
			background-color: #000080;
			color: white;
		}
		td {
			padding: 10px;
		}
		hr {
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.download {
			background-color: green;
			color: #fff;
			border-radius: 10px;
			padding: 10px 20px 10px 20px;
			margin-bottom: 10px;
		}
	</style>


	<div align="center">
		<h2>Ekspor Daftar Hadir ke PDF</h2>
		<a href="ekspor.php">
			<button class="download">Download &nbsp;<span class="glyphicon glyphicon-download"></button>
		</a>
		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>Status Hadir</td>
	    			<td>Daftar yang Hadir</td>
	    			<td>NIDN</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM daftar_hadir ORDER BY daftaryanghadir ASC";
			        $dosen1 = $conect->prepare($query);
			        $dosen1->execute();
			        $res1 = $dosen1->get_result();
 
			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $status_hadir = $row['status_hadir'];
				            $daftaryanghadir = $row['daftaryanghadir'];
				            $nidn = $row['nidn'];
 
							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$status_hadir."</td>";
								echo "<td>".$daftaryanghadir."</td>";
								echo "<td>".$nidn."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>
    </div><hr>

<?php

require_once ('layout/footer.php');

?>
