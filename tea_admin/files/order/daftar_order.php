<div class="well">
	<ul class="nav nav-tabs">
    	<li class="disabled">
        	<a href="#">Daftar Order-an: </a>
        </li>
        <li class="active">
        	<a href="#or1" data-toggle="tab"><i class="icon-time"></i> Belum dilayani <span class="badge badge-important">5</span></a>
        </li>
        <li>
        	<a href="#or2" data-toggle="tab"><i class="icon-tasks"></i> Dalam proses <span class="badge">2</span></a>
        </li>
        <li>
        	<a href="#or3" data-toggle="tab"><i class="icon-ok"></i> Sudah dilayani <span class="badge badge-success">3</span></a>
        </li>
        <li>
        	<a href="#or4" title="Order-an baru? Tambah disini" data-toggle="tab"><i class="icon-shopping-cart"></i> Tambah order-an </a>
        </li>
    </ul>
    
    <div class="tab-content">
    	<div class="tab-pane active" id="or1">
        	<?php include("content_belum_dilayani.php"); ?>
        </div><!-- /tab-pane -->
        
        <div class="tab-pane" id="or2">
        	<?php include("content_dalam_proses.php"); ?>
        </div><!-- /tab-pane -->
        
        <div class="tab-pane" id="or3">
        	<?php include("content_sudah_dilayani.php"); ?>
        </div><!-- /tab-pane -->
        
        <div class="tab-pane" id="or4">
        	<?php include("content_order_baru.php"); ?>
        </div><!-- /tab-pane -->
        
    </div><!-- /tab-content -->
</div> <!-- /class=well -->