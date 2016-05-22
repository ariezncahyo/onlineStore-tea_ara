<?php
// $arrayBox = array(0=>array($type,$name,$label,$other));
$boxData = array(0=>array("text","tanggal","Tanggal Order","value='".date('d M Y')."'"),
				 1=>array("text","nama","Nama pemesan","required"),
				 2=>array("text","id_design","ID Design","required> <a href=# title='Belum ada pilihan ? Lihat produk disini , kemudian catat ID Design nya.'>Bingung ?</a"),
				 3=>array("text","jml_order","Jumlah yang dipesan","required value=1"),
				 );
$order = new form("post");
$order->txtBmulti($boxData);
$order->btn("<i class='icon-arrow-up icon-white'></i> Order Sekarang","submit","class='btn btn-primary'");
echo(" ");
$order->btn("<i class=icon-stop></i> Ulangi","reset","class='btn'");
$order->_end;

if($_POST[nama]){
	$arr_post = array(
				$_POST[tanggal],
				$_POST[nama],
				$_POST[id_design],
				$_POST[jml_order],
				'belum_diverivikasi'
				);
	$j = new db;
	$j->q("SELECT harga_produk FROM produk WHERE id_produk='$arr_post[2]'");
	//belum selesai
	$order_app = new db;
	$order_app->q("INSERT INTO orders VALUES('','$arr_post[1]','$arr_post[0]','$arr_post[2]','$arr_post[3]','','$arr_post[4]')");
	echo("<script>alert('Order berhasil diproses')</script>
		  <meta http-equiv=refresh content='0; url=?ur=order/daftar_order'");
}
?>
