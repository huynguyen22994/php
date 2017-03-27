<div style="color:#005298; font-size:25px; text-align:center; margin:auto; padding-top:10px;">
	<?php echo $title_news_admin;?>
</div>
<!-------------------//---------------------->
<?php
foreach($data['records_news_admin'] as $row)
	{
		$attributes = array('class' => 'form_addnews', 'id' => 'form_addnews');
		echo form_open('',$attributes);
		$tenbantin = array(
			'name' => 'tenbantin',
			'id' => 'tenbantin',
			'value' => $row->TenBanTin,
			'class' => 'form_input'
		);
		
		$tomtatbantin = array(
			'name' => 'tomtatbantin',
			'id' => 'tomtatbantin',
			'value' => $row->TomTatBanTin,
			'class' => 'form_textarea'
		);
		
		$noidung = array(
			'name' => 'noidung',
			'id' => 'noidung',
			'value' => $row->NoiDung,
			'class' => 'form_textarea'
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
            <td  style="text-align:center;padding-top:5px;" colspan='2'>
                <?php echo form_submit($submit);?>
            </td>
        </tr>
        
        <tr>
        	<td colspan="2"><?php echo validation_errors('<div id="errors">','</div>'); ?></td>
        </tr>
	</table>
<?php echo form_close();?>
    