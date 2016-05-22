<div class="row-fluid">
    <div class="span12 well">
            <ul class="nav nav-tabs" id="myTab">
                <li class="disabled"><a href="#"><i class="icon-th-list"></i> Order: </a></li>
                <li class="active"><a href="#order1" data-toggle="tab"><i class="icon-shopping-cart"></i> Sekarang <span class="badge badge-info">!</span></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="order1"><legend>Order sekarang</legend>
                <div class="row-fluid"> 
                	<div class="span4">               
                        <h1 class="well">Order NOW !!! <br /><small class="muted">Pesan disini sekarang.</small></h1>
                        <img class="pull-right img-rounded" src="pict/kaos/sample/alf2_kakashi.jpg" height="30%" />
					</div>
                    <div class="span8">                        
                        <?php
                            $boxData = array(0=>array("text","tanggal","Tanggal Sekarang","readonly value='".date('d M Y')."'"),
                                             1=>array("text","nama","Nama asli kamu","required"),
                                             2=>array("text","id","ID Design","required> <a href=# title='Belum ada pilihan ? Lihat produk disini , kemudian catat ID Design nya.'>Bingung ?</a"),
                                             3=>array("text","jml_order","Jumlah yang dipesan","required value=1"),
                                             );
                            $order = new form("post");
                            $order->txtBmulti($boxData);
                            $order->btn("<i class='icon-arrow-up icon-white'></i> Order Sekarang","submit","class='btn btn-primary'");
                            $order->_end;
                        ?>
					</div>                        
                </div>                
                </div>
            </div>

        
    </div> <!-- /span12 -->
</div> <!-- /rw-fluid -->        

