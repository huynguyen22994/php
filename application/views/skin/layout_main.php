<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title> 
<link type="image/x-icon" href="<?php echo base_url();?>public/images/data/T-icon.png" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/core.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/skin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/nivoslider/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/nivoslider/style.css" />
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery1.8.js"></script>
<script src="<?php echo base_url();?>public/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/mycarousel_initCallback.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});
</script>
<!------------------------nivo slider-------------------------->
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
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
            	<div id="right_slider"> 
                	<div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="<?php echo base_url();?>public/images/data/toystory.jpg" alt="" />
                             <img src="<?php echo base_url();?>public/images/data/up.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <!-------------------liet ke san pham theo dang cap---------------------->
                <div id="product1">
                	<div class="product1_title">
                        <ul>
                       		<?php $currentPage = $data['currentPage2'];?>
                        	<?php if($currentPage == 'Hang-Cao-Cap'){?>
							<li><?php echo anchor('home/product_line/Hang-Cao-Cap','Hàng Cao Cấp','id="active1"');?></li>
                            <li><?php echo anchor('home/product_line/Hang-Trung-Cap','Hàng Trung Cấp');?></li>
                            <li><?php echo anchor('home/product_line/Hang-Pho-Thong','Hàng Phổ Thông');?></li>
                            <?php }elseif($currentPage == 'Hang-Trung-Cap'){?>				
                            <li><?php echo anchor('home/product_line/Hang-Cao-Cap','Hàng Cao Cấp');?></li>
                        	<li><?php echo anchor('home/product_line/Hang-Trung-Cap','Hàng Trung Cấp','id="active1"');?></li>
                            <li><?php echo anchor('home/product_line/Hang-Pho-Thong','Hàng Phổ Thông');?></li>
                            <?php }elseif($currentPage == 'Hang-Pho-Thong'){?>
                            <li><?php echo anchor('home/product_line/Hang-Cao-Cap','Hàng Cao Cấp');?></li>
                        	<li><?php echo anchor('home/product_line/Hang-Trung-Cap','Hàng Trung Cấp');?></li>
                            <li><?php echo anchor('home/product_line/Hang-Pho-Thong','Hàng Phổ Thông','id="active1"');?></li>
                            <?php }else{?>
                           	<li><?php echo anchor('home/product_line/Hang-Cao-Cap','Hàng Cao Cấp');?></li>
                        	<li><?php echo anchor('home/product_line/Hang-Trung-Cap','Hàng Trung Cấp');?></li>
                            <li><?php echo anchor('home/product_line/Hang-Pho-Thong','Hàng Phổ Thông');?></li>
                            <?php }?>
                        </ul>
                    </div>
                	<?php $this->load->view($template1,$data);?>
                </div>
                <!-------------------liet ke nhung san pham ban chay------------------->
               <div id="product2">
                    <div class="product2_title">Sản phẩm bán chạy</div>
                    <?php $this->load->view($template2,$data);?>
                </div>
           	</div> 
             <div class="vide"></div> 
        </div>
        <!----------------footer----------------->
            <?php $this->load->view("skin/bottom");?> 
    </div>  
</body> 
</html>