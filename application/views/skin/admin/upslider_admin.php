<div style="color:#005298; font-size:25px; text-align:center; margin:auto; padding-top:10px;">
	<?php echo $title_slider_admin;?>
</div>
<!-------------------//---------------------->
<?php
foreach($data['records_slider_admin'] as $row)
	{
		$attributes = array('class' => 'form_addslider', 'id' => 'form_addslider');
		echo form_open('',$attributes);
		$button = array(
			'name' => 'btn',
			'id' => 'btn',
			'value' => 'true',
			'content' => 'Add Image',
			'style' => 'width:100px; height:30px; border:1px solid #ddd;'
		);
	
		$ten_hinh = array(
			'name' => 'ten_hinh',
			'id' => 'ImageUrl',
			'value' => $row->Hinh,
			'style' => 'border: 1px solid #777; height:30px; width:295px;'
		);
		
		$tieude = array(
			'name' => 'tieude',
			'id' => 'tieude',
			'value' => $row->TieuDe,
			'class' => 'form_input'
		);
		
		$link = array(
			'name' => 'link',
			'id' => 'link',
			'value' => $row->Link,
			'class' => 'form_input'
		);
		
		$submit = array(
			'name' => 'update',
			'value' => 'Update',
			'class' => 'update'
		);
	}
?>
	<table style="margin:auto;">
       <tr>
            <td class="form_label">Hình</td>
            <td>
            	<?php echo form_button($button);?>
            	<?php echo form_input($ten_hinh);?>
            </td>
        </tr>      
        <tr>
            <td class="form_label">Tiêu Đề</td>
            <td><?php echo form_input($tieude);?></td>
        </tr>
         <tr>
            <td class="form_label">Link</td>
            <td><?php echo form_input($link);?></td>
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
    