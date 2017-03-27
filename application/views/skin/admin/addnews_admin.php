<div style="color:#005298; font-size:25px; text-align:center; margin:auto; padding-top:10px;">
	<?php echo $data['records_news_admin'];?>
</div>
<!-----------nếu thêm thành công------------->
<div style="color:#f00; text-align:center;">
	<?php echo $state;?> 
</div>
<!-------------------//---------------------->
<?php
	$attributes = array('class' => 'form_addnews', 'id' => 'form_addnews');
	echo form_open_multipart('add/insert_news',$attributes);
	$tenbantin = array(
		'name' => 'tenbantin',
		'id' => 'tenbantin',
		'value' => set_value('tenbantin'),
		'class' => 'form_input'
	);
	
	$tomtatbantin = array(
		'name' => 'tomtatbantin',
		'id' => 'tomtatbantin',
		'value' => set_value('tomtatbantin'),
		'class' => 'form_textarea'
	);
	
	$noidung = array(
		'name' => 'noidung',
		'id' => 'noidung',
		'value' => set_value('noidung'),
		
	);
	
	$ten_hinh = array(
		'name' => 'ten_hinh',
		'id' => 'ImageUrl',
		'value' => set_value('ten_hinh'),
		'style' => 'border: 1px solid #777; height:30px; width:295px;'
	);
	
	$button = array(
		'name' => 'btn',
		'id' => 'btn',
		'value' => 'true',
		'content' => 'Add Image',
		'style' => 'width:100px; height:30px; border:1px solid #ddd;'
	);
	
	$submit = array(
		'name' => 'submit',
		'value' => 'Thêm',
		'class' => 'addNews'
	);
?>
	<table style="margin:auto;">
        <tr>
            <td class="form_label">Tên Bản Tin</td>
            <td><?php echo form_input($tenbantin);?></td>
        </tr>
        
         <tr>
            <td class="form_label">Tóm Tắt Bản Tin</td>
            <td><?php echo form_textarea($tomtatbantin);?></td>
        </tr>
        
        <tr>
            <td class="form_label">Nội Dung</td>
            <td><?php echo form_textarea($noidung); ?></td>
            
			<script type="text/javascript" language="javascript">
     
				CKEDITOR.replace( 'noidung');
			 
			</script>
            
        </tr>
        
        <tr>
            <td class="form_label">Hình</td>
            <td>
            	<?php echo form_button($button);?>
            	<?php echo form_input($ten_hinh);?>
            </td>
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
    