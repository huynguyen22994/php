<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title> 
<link type="image/x-icon" href="<?php echo base_url();?>public/images/data/T-icon.png" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/core.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/nivoslider/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/nivoslider/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/jquery.fancybox.css">
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery1.8.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/effectBuy.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.fancybox.js"></script>
<!------------------------nivo slider-------------------------->
   <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-----------------------fancybox----------------------->
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
		$(".fancybox-effects-a").fancybox({
			helpers: {
				title : {
					type : 'outside'
				},
				overlay : {
					speedOut : 0
				}
			}
		});

	});
</script>    
</head> 
<body> 
	<div id="wrapper">
        <!-----------------header---------------->
            <?php $this->load->view("skin/top");?> 
        <!-----------------main------------------>
        <div id="main"> 
        	<div id="left">
            	<?php $this->load->view("skin/left",$data);?> 
            </div>
            <div id="right">    
               	<div id="product3">
                	<div class="product3_title">
                    	<?php echo $title_main;?>
                    </div>
                	<?php $this->load->view($template3,$data);?>
                </div>
           	</div> 
             <div class="vide"></div> 
        </div>
        <!----------------footer----------------->
            <?php $this->load->view("skin/bottom");?> 
    </div>  
</body> 
</html>