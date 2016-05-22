<!-- Fixed navbar -->
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Administrasi Menu</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li>
              <a href="?ur=order/daftar_order" data-toggle="tooltip" title="Daftar order-an pelanggan">
                  <i class="icon-leaf"></i> List <code>Order</code>-an
              </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manager produk <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="nav-header">Produk</li>
              <li><a href="?ur=produk/produk_baru"><i class="icon-plus"></i> Tambah produk baru</a></li>
              <li><a href="#"><i class="icon-th"></i> List semua produk</a></li>
            </ul>
		  </li>  
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu pelanggan<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="nav-header">Pelanggan</li>
              <li><a href="#"><i class="icon-star"></i> Manajer Testimoni</a></li>
              <li><a href="#"><i class="icon-comment"></i> Manajer kritik & saran</a></li>
            </ul>
		  </li>  
          <li>
            <a href="#" data-toggle="tooltip" title="Edit halaman profil dan bantuan.">
                Manajer halaman
            </a>
          </li>
        </ul>
        <ul class="nav pull-right">
          <li>
            <a href="#" data-toggle="tooltip" title="Cek Facebook: Tea-ARA Design">
                <img src="../pict/sosmed/facebook.png" height="16" width="16" alt="Facebook: Tea-ara DESIGN">
            </a>
          </li>
          <li>
            <a href="#" data-toggle="tooltip" title="Cek Twitter: @tea_araDS">
                <img src="../pict/sosmed/twitter.png" height="16" width="16" alt="Twitter: @tea_araDS">
            </a>
          </li>
          <li>
            <a href="#" data-toggle="tooltip" title="Cek Yahoo! Messenger ID: tea_araID">
                <img src="../pict/sosmed/yahoo.png" height="16" width="16" alt="Yahoo! Messenger ID: tea_araID | ONLINE NOW">
            </a>
          </li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            	<i class="icon-user"></i> <?php echo $_SESSION[user_detail]; ?> <b class="caret"></b>
			</a>
            <ul class="dropdown-menu">
              <li class="nav-header">Admin</li>
              <li><a href="#"><i class="icon-stop"></i> Edit profil</a></li>
              <li><a href="logout.php"><i class="icon-off"></i> Log out</a></li>
            </ul>
		  </li>  
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>