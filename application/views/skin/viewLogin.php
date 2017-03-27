<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Nhập</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/core.css" />
</head>
<body>
	<?php
		$attributes = array('class' => 'form_login', 'id' => 'myform');
		echo form_open('home/verifylogin',$attributes);
		$user_name = array(
			'name' => 'user_name',
			'id' => 'user_name',
			'value' => set_value('user_name'),
			'style' => 'border:1px solid #777; height:30px;	width:200px;'
		);
		
		$password = array(
			'name' => 'password',
			'id' => 'password',
			'value' => '',
			'style' => 'border:1px solid #777; height:30px;	width:200px;'
		);
		
		$submit = array(
			'name' => 'submit',
			'value' => 'Đăng Nhập',
			'class' => 'loginAdmin'
		);
	?>	

    <table style="margin:auto;">
        <tr>
            <td class="form_label">Tên tài khoản</td>
            <td><?php echo form_input($user_name);?></td>
        </tr>
        
         <tr>
            <td class="form_label">Mật khẩu</td>
            <td><?php echo form_password($password);?></td>
        </tr>
        
        <tr>
            <td style="text-align:center;padding-top:5px;" colspan='2'>
                <?php echo form_submit($submit);?>
            </td>
        </tr>
        
        <tr>
            <td colspan="2"><?php echo validation_errors('<div id="errors">','</div>'); ?></td>
        </tr>
    </table>
            
    <?php echo form_close();?>
</body>
</html>