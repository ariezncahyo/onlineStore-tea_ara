<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include("sub_web/php_parts/class_packet.php"); ?>	
    <meta charset="utf-8">
    <title>Tea-Ara DESIGN | Online Order Kaos Desain  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tea Ara Design | Online kaos design dan store">
    <meta name="author" content="Albert Septiawan | AxQuired Apps Online store">

    <!-- Le styles -->
    <link href="../_assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
	  	background-image:url(pict/bgBody.jpg);
		background-attachment:scroll;
		background-position:center;
        padding-top: 60px;
        /** padding-bottom: 30px; **/
      }
/* Set the fixed height of the footer here */
      #push,
      #footer {
        min-height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
		bottom:0;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }	  
    </style>
    <link href="../_assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="pict/favico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="pict/favico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="pict/favico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="pict/favico/favicon.png">
  </head>

  <body>
	<div id="wrap">
    	<?php include("sub_web/base/navbar.php"); ?>
    <div class="container">      
    	<?php include("sub_web/base/header.php");
			  ur(); ?>
    </div> <!-- /container -->
    
    </div> <!-- /wrap -->
    
    <div id="footer">
    	<?php include("sub_web/base/footer.php"); ?>
    </div>    
    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap-transition.js"></script>
    <script src="../_assets/js/bootstrap-alert.js"></script>
    <script src="../_assets/js/bootstrap-modal.js"></script>
    <script src="../_assets/js/bootstrap-dropdown.js"></script>
    <script src="../_assets/js/bootstrap-scrollspy.js"></script>
    <script src="../_assets/js/bootstrap-tab.js"></script>
    <script src="../_assets/js/bootstrap-tooltip.js"></script>
    <script src="../_assets/js/bootstrap-popover.js"></script>
    <script src="../_assets/js/bootstrap-button.js"></script>
    <script src="../_assets/js/bootstrap-collapse.js"></script>
    <script src="../_assets/js/bootstrap-carousel.js"></script>
    <script src="../_assets/js/bootstrap-typeahead.js"></script>
    <script>
		<?php
		for($t=1; $t<9; $t++){ //tooltip for navbar
			echo("$('#a-24tip$t').tooltip();");
		}
		?>
		$('a').tooltip({placement:'bottom'});
		$('img').tooltip({placement:'top'});
	</script>

  </body>
</html>