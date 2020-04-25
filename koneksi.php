<a href="koneksi.php">koneksi</a><?php 
$koneksi = mysqli_connect("localhost","root","","virusCovid19");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>