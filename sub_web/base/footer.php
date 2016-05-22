<div class="container">
    <div class="row-fluid">
        <div class="span3">
            <legend>Polling <small class="muted">Pendapat anda</small></legend>
            <form method="post">
                <label> Tampilan website ini ?</label>
                <label class="radio">
                <input type="radio" name="polls" value="3" checked> Good ^^ Nice Design                      
                </label>                    
                <label class="radio">
                <input type="radio" name="polls" value="2"> Biasa aja ah                        
                </label>                    
                <label class="radio">
                <input type="radio" name="polls" value="1"> Jelek :p idihh                        
                </label>
                <div class="btn-group">
                    <button class="btn" type="submit"><i class="icon-plus-sign"></i> Kirim </button>
                    <a href="#" class="btn" title="Lihat hasil polling"><i class="icon-list-alt"></i></a>
                </div>                    
            </form>
        </div>
        <div class="span3">
            <legend><a name="footer" href="#"></a>Saran <small class="muted">dan kritik</small></legend>
            <?php
				$saran = new form("post");
				$saran->txtB("nama","placeholder='Nama anda ..' required"); echo("<br>");
				$saran->txtB("email","placeholder='Email anda ..' required","email"); echo("<br>");
				$saran->txtA("saran","placeholder='Saran kamu ...'");
				echo("<div class=btn-group>");
					$saran->btn("<i class=icon-plus-sign></i> Beri Saran","submit","class=btn");
					$saran->btn("<i class=icon-minus-sign></i> Reset","reset","class=btn");
				echo("</div>");
				$saran->_end();
			?>
        </div>
        <div class="span6">
            <legend>Sponsor <small class="muted">pendukung kami</small></legend>
            <p>
            <a href="#"><img class="img-polaroid" src="pict/sponsor/axApps128.png" width="120" height="120" title="AxQuired Apps" ></a>
            <a target="_blank" href="http://facebook.com/axquiredsaint24"><img class="img-polaroid"  src="pict/sponsor/alfatihAvatar.png" width="120" height="120" title="Alfatih Design" ></a>
            <a href="#"><img class="img-polaroid"  src="pict/sponsor/tokobagus-thumb-logo-new.jpg" width="120" height="120" title="TokoBagus.com" ></a>
            <a href="#"><img class="img-polaroid"  src="pict/sponsor/images.jpg" width="120" height="120" title="JNE | Express across nations" ></a>
            </p><p>
            <a href="#"><img class="img-polaroid" src="pict/sponsor/atm_bersama.gif" width="100" height="100" title="ATM Bersama" ></a>
            <a href="#"><img class="img-polaroid" src="pict/sponsor/logo-bank-mandiri.jpg" width="100" height="100" title="Bank Mandiri" ></a>
            <a href="#"><img class="img-polaroid" src="pict/sponsor/download (1).jpg" width="100" height="100" title="Bank BRI" ></a>
            <a href="#"><img class="img-polaroid" src="pict/sponsor/download.jpg" width="100" height="100" title="Bank BNI" ></a>
            <a href="#"><img class="img-polaroid" src="pict/sponsor/Logo-Bank-Central-Asia-bca.jpg" width="100" height="100" title="Bank BCA" ></a>
            </p>
        </div>
    </div>

<p class="muted credit">&copy; 2014 Tea-Ara DESIGN. Template by <a href="http://facebook.com/axquiredsaint24">AxQuired24</a>.</p>
</div>
