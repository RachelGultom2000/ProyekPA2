<?php
//Jika download plugin mpdf tanpa composer (versi lama)
define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');

//Jika download plugin mpdf dengan composer (versi baru)
//require_once __DIR__ . '/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf();

//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';

$nama_dokumen='hasil-ekspor';
ob_start();
?>


	<div>
    <h2>Ekspor Daftar Hadir ke PDF</h2>

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
    </div>


<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>