<?php
//koneksi ke database
mysql_connect("localhost","root","");
mysql_select_db("setdesa");
 
//mengambil data dari tabel
$sql=mysql_query("SELECT * FROM tb_suratkm ORDER BY no_suratkm");
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
}
 
//mengisi judul dan header tabel
$judul = "DATA SURAT KEMATIAN DESA TUGUMUKTI";
$header = array(
array("label"=>"no_suratkm", "length"=>30, "align"=>"L"),
array("label"=>"nama Cupcake", "length"=>50, "align"=>"L"),
array("label"=>"ttl", "length"=>30, "align"=>"L"),
array("label"=>"jenis_kelamin", "length"=>30, "align"=>"L"),
array("label"=>"alamat", "length"=>30, "align"=>"L"),
array("label"=>"agama", "length"=>30, "align"=>"L"),
array("label"=>"pekerjaan", "length"=>30, "align"=>"L"),
array("label"=>"tanggal_kematian", "length"=>30, "align"=>"L"),
array("label"=>"waktu", "length"=>30, "align"=>"L"),
array("label"=>"tempat_pemakaman", "length"=>30, "align"=>"L"),
);
 
//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
 
//tampilan Judul Laporan
$pdf->SetFont('Arial','B','16'); //Font Arial, Tebal/Bold, ukuran font 16
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
//Header Table
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(139, 69, 19); //warna dalam kolom header
$pdf->SetTextColor(255); //warna tulisan putih
$pdf->SetDrawColor(222, 184, 135); //warna border
foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 10, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
//menampilkan data table
$pdf->SetFillColor(245, 222, 179); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 10, $cell, 1, '0', $kolom['align'], $fill);
$i++;
}
$fill = !$fill;
$pdf->Ln();
}
 
//output file pdf
$pdf->Output();
?>