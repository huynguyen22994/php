<?php
	$attributes = array('class' => 'form_contact', 'id' => 'form_contact');
	echo form_open('add/insert_contact',$attributes);
	$us_name = array(
		'name' => 'us_name',
		'id' => 'us_name',
		'value' => set_value('us_name'),
		'class' => 'form_input'
	);
	
	$email = array(
		'name' => 'email',
		'id' => 'email',
		'value' => set_value('email'),
		'class' => 'form_input'
	);
	
	$title_contact = array(
		'name' => 'title_contact',
		'id' => 'title_contact',
		'value' => set_value('title_contact'),
		'class' => 'form_input'
	);
	
	$content_contact = array(
		'name' => 'content_contact',
		'value' => set_value('content_contact'),
		'class' => 'form_textarea'
	);
	
	$submit = array(
		'name' => 'submit',
		'value' => 'Gởi',
		'class' => 'send'
	);
?>
	<table style="margin:auto;">
        <tr>
        	<td class="form_label">Tên bạn:</td>
             <td><?php echo form_input($us_name);?></td>
        </tr>
        <tr>
        	<td class="form_label">Địa chỉ Email:</td>
             <td><?php echo form_input($email);?></td>
        </tr>
        <tr>
        	<td class="form_label">Tiêu đề thông điệp:</td>
            <td><?php echo form_input($title_contact); ?></td>
        </tr>
        <tr>
        	<td class="form_label">Nội dung thông điệp:</td>
            <td><?php echo form_textarea($content_contact);?></td>
        </tr>
        <tr>
            <td  style="text-align:center;padding-top:5px;" colspan='2'>
                <?php echo form_submit($submit);?>
            </td>
        </tr>
        <tr>
        	<td colspan="2"><?php echo validation_errors('<div id="errors">','</div>'); ?></td>
        </tr>
	</table>
<?php echo form_close();?>
