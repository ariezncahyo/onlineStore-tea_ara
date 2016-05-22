<?php
// $arrayBox = array(0=>array($type,$name,$label,$other));
$boxData = array(
				0=>array("text","nama_produk","Nama produk/ design","required"),
				1=>array("text","harga_produk","Harga (angka saja)","required"),
				 );
$produk = new form("post");
echo("<label for=kategori>Kategori</label><select name=kategori required>");
	 $list_kat = new db;
	 $list_kat->q("SELECT * from kategori_produk");
	 while($kat=$list_kat->ar()){
	 	echo("<option value=$kat[nama_kategori]>$kat[detail]</option>");
	 } //tutup while
echo("</select>");

echo("<label for=status_produk>Status</label><select name=status_produk required>
<option value=ready>Ready</option>
<option value=pre_order>Pre Order</option>
<option value=limited>Limited</option>
<option value=out_stock>Out of Stock</option>
</select>
");

$produk->txtBmulti($boxData);
echo("<strong>Detail keterangan produk: </strong><br>");
$produk->txtA("detail_produk","required rows=3","Terbuat dari bahan: . Ukuran yang tersedia: ");
echo("<br><strong>Gambar produk: </strong><br>");

$produk->txtB("pict_upload","required","file");
echo("<br><br>");
$produk->txtB("kirim","class='btn btn-primary' value='Tambah produk'","submit");
echo(" ");
$produk->txtB("reset","class='btn' value='Ulangi'","reset");
$produk->_end;

if($_POST["kirim"]){

	$nama_p=$_FILES["pict_upload"]['name'];
	$lokasi_p=$_FILES["pict_upload"]['tmp_name'];
	$type_p=$_FILES["pict_upload"]['type_name'];
	$size_p=$_FILES["pict_upload"]['size_name'];
	$folder_pict="../pict/produk/$nama_p";
	$move = move_uploaded_file($lokasi_p,$folder_pict);
	if($move){
		$produk_post = new db;
		$into_db = $produk_post->q("INSERT INTO produk 
		VALUES('','$_POST[kategori]','$_POST[nama_produk]','$_POST[harga_produk]','$_POST[detail_produk]','$nama_p','$_POST[status_produk]')");
		
		if($into_db){
			echo("<script>alert('Sukses !')</script> <meta http-equiv=refresh content='0; url=admin?ur=produk/daftar_produk'>");
		}
	}
}
?>
