<?php

define('host','localhost');
define('usr','root');
define('psw','root');
define('dbn','bs_tea-ara');

function ur(){ // include berdasarkan alamat URL
	$ur = $_GET[ur];
	$div = explode(">",$ur);
	$fd = $div[0];
	$fl = $div[1];
	$sub_folder = "sub_web";
	if(!empty($ur)){
		include($sub_folder."/".$fd."/".$fl.".php");
	}else{
		include($sub_folder."/home/home_base.php");
	}	
}

class db{
	var $koneksi;
	var $db;
	var $query;
	var $arraySelect;
	var $row;
	var $name_picture;
	var $nama_p;
	
	function __construct(){
		$this->koneksi = mysql_connect(host,usr,psw) or die("Gagal koneksi database");
		$this->db = mysql_select_db(dbn) or die("DB not selected");		
	}
	
	function q($code){
		$this->query = mysql_query($code,$this->koneksi);
		return $this->query;
	}
	
	function ar(){
		$this->arraySelect = mysql_fetch_array($this->query);
		return $this->arraySelect;
	}
	
	function numBaris(){
		$this->row= mysql_num_rows($this->query);
		return $this->row;
	}
	
	function addSession($arrS,$pilih){
		// $arr = array($user,$pass,$nama,$dll); //bisa dibalik2 dan ditambah sesuai nama
		// $pilih = fetch_array nya
		session_start();
		$this->arr = $arrS;
		$jml = count($this->arr);
		for($n=0; $n<$jml; $n++){
			$a = $this->arr[$n];
			$_SESSION[$a] = $pilih[$a];
			//session_register($a);
		} // tutup for
	} // tutup function
	
} // tutup class
class form{
	function __construct($method,$oth=''){
		$this->method = $method;
		$this->oth = $oth;
		echo("<form method=".$this->method." enctype='multipart/form-data' ".$this->oth.">");
	}
	
	function txtB($name,$oth='',$type='text'){
		$this->name = $name;
		$this->type= $type;
		$this->oth = $oth;
		echo("<input type=".$this->type." name=".$this->name." ".$this->oth.">");
	}
	
	function txtA($name,$attr='',$val=''){
		$this->name = $name;
		$this->attr = $attr;
		$this->val = $val;
		echo("<textarea name=".$this->name." ".$this->attr.">".$this->val."</textarea>");
	}
	
	function btn($val,$type,$oth=''){
		$this->type = $type;
		$this->val = $val;
		$this->oth = $oth;
		echo("<button type=".$this->type." ".$this->oth.">".$this->val."</button>");
	}
	
	function txtBmulti($arrayBox){
		// multi textBox, dengan format 
		// $arrayBox = array(0=>array($type,$name,$label,$other));
		$this->arr = $arrayBox;
		$jml = count($this->arr);
		for($n=0; $n<$jml; $n++){
			$this->type = $this->arr[$n][0];
			$this->name = $this->arr[$n][1];
			$this->label = $this->arr[$n][2];
			$this->oth = $this->arr[$n][3];
			echo("<p><strong>".$this->label." :</strong><br>
			<input type=".$this->type." name=".$this->name." placeholder='Masukkan ".$this->label."...' ".$this->oth."></p>");
		}
	}
/*	
	function pict($name_pict,$folder_pict){
		$this->name_picture = $name_pict;
		$this->folder_pict = $folder_pict;
		
		echo("<input type=file name=".$this->name_picture." required>");
		return $this->name_picture;
	}
	function pict_proses(){
		$this->nama_p=$_FILES[$this->name_picture] ['name'];
		$this->lokasi_p=$_FILES[$this->name_picture] ['tmp_name'];
		$this->type_p=$_FILES[$this->name_picture] ['type_name'];
		$this->size_p=$_FILES[$this->name_picture] ['size_name'];
		$this->move_pict=move_uploaded_file($this->lokasi_p,$this->folder_pict);
		return $this->nama_p;
	}
	function pict_output(){
		return $this->nama_p;
	}
*/	
	function _end(){
		echo("</form>");
	}
}

?>