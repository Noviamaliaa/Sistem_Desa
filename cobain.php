<html>
<head>
<title>Report HTML2PDF</title>
</head>
<body>
<?php
include 'koneksi.php';
$query = "select * from tb_suratkm";
//untuk menjalankan perinta sql
$result = $mysqli->query($query);
//untuk mendapatkan jumlah bari dari table
$num_results = $result->num_rows;
//cek jika data tidak 0
if( $num_results > 0){
echo "<table border='1'>";
echo "<tr>";
echo "<th>no_suratkm</th>";
echo "<th>NAMA</th>";
echo "</tr>";
while( $row = $result->fetch_assoc() ){
//untuk mengektrak data
extract($row);
echo "<tr>";
echo "<td>{$no_suratkm}</td>";
echo "<td>{$nama}</td>";
echo "</tr>";
}
echo "</table>";
}else{
//jika data kosong maka akan menampilkan data berikutnya
echo "Data Kosong";
}
//menutup koneksi ke database
$result->free();
$mysqli->close();
?>
</body>
</html>