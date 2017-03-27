<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/core.css">
<link type="image/x-icon" href="<?php echo base_url();?>public/images/icon.png" rel="shortcut icon">
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery1.9.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/popup_ckfinder.js"></script>
</head> 
<body>
	<div id="wrapper">
        <!-----------------header---------------->
            <?php $this->load->view("skin/admin/top_admin");?> 
        <!-----------------main------------------>
            <div id="main_admin"> 
					<?php $this->load->view($template4,$data); ?>
           	</div>	
        <!----------------footer----------------->
           <?php $this->load->view("skin/bottom");?> 
    </div>  
</body>
</html>