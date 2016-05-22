<div style="visibility:hidden">
<?php 
if($_POST[u]){
	  $user=$_POST[u];
	  $pass=$_POST[p];
	  $lg = new db;
	  $lg->q("SELECT * FROM users WHERE user_name='$user' && user_pass='$pass'");
	  $cek = $lg->numBaris();
	  $fetch= $lg->ar();
	  //Menentukan kesalahan & buat session
	  if($cek > 0){
	  		$arrSesi = array("user_detail","user_name","user_pass");
	  		$lg->addSession($arrSesi,$fetch);
	  echo "<meta http-equiv='refresh' content='0;url=?ur=order/daftar_order' />";
	  }else{
	  $gagal_login=1;
	  }//tutup menentukan kesalahan
	  
}//tutup if pertama


?>
</div>

<div class="row-fluid">
	<div class="span4 offset4 well">
    <legend> Login admin <img class="pull-right" height="64" src="../pict/favico/apple-touch-icon-72-precomposed.png" ></legend>
    <?php
		$lgForm = new form("post","");
			$arrForm = array(0=>array("text","u","Username","required"),
							 1=>array("password","p","Password","required")
							 );
		$lgForm->txtBmulti($arrForm);
		echo("<div class=btn-group>");
		$lgForm->btn("Login","submit","class='btn btn-primary'");
		$lgForm->btn("Reset","reset","class=btn");
		echo("</div>");
		$lgForm->_end;

if($gagal_login==1){ 
	echo("<script>alert('Anda gagal login')</script>");
}    	  
	?>
    </div>
</div>
