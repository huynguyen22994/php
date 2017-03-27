<div style="width:300px; height:20px; color:#f00; font-family:Tahoma, Geneva, sans-serif; margin:auto; text-align:center; padding:5px;"><?php echo $title_admin;?></div>
<?php
	foreach($data['records_member_admin'] as $row)
	{
		$attributes = array('class' => 'form_change_pass', 'id' => 'myform');
		echo form_open('',$attributes);
		
		$password_new = array(
			'name' => 'password_new',
			'id' => 'password_new',
			'value' => '',
			'class' => 'form_input'
		);
		
		$submit = array(
			'name' => 'update',
			'value' => 'Đổi Mật Khẩu',
			'class' => 'changePass'
		);
	
	?>	

    <table style="margin:auto;">        
        <tr>
            <td class="form_label">Mật khẩu mới</td>
            <td><?php echo form_password($password_new);?></td>
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
	
<?php }?>    