<div style="color:#005298; font-size:25px; text-align:center; margin:auto; padding-top:10px;">
	<?php echo $data['records_products_admin'];?>
</div>
<!-----------nếu thêm thành công------------->
<div style="color:#f00; text-align:center;">
	<?php echo $state;?>  
</div>
<!-------------------//---------------------->
<?php 
	$attributes = array('class' => 'form_addproducts', 'id' => 'form_addproducts');
	echo form_open_multipart('add/insert_products',$attributes);
	$tensanpham = array(
		'name' => 'tensanpham',
		'id' => 'tensanpham',
		'value' => set_value('tensanpham'),
		'class' => 'form_input',
		'maxlength' => '35'
	);
	
	$ttsanpham = array(
		'name' => 'ttsanpham',
		'id' => 'noidung',
		'value' => set_value('ttsanpham'),
		
	);
	
	$hangsx = array();
	foreach ($data['TenHangSX'] as $row)
	{
		$hangsx[$row->TenHangSX] = $row->TenHangSX; 
	}
	
	$gia = array(
		'name' => 'gia',
		'id' => 'gia',
		'value' => set_value('gia'),
		'class' => 'form_input'
	);
	
	$loaisanpham = array(
		'DT' => 'Điện Thoại',
		'PK' => 'Phụ Kiện'
	); 
	
	$chatluong = array(
		'Hàng Cao Cấp' => 'Hàng Cao Cấp',
		'Hàng Trung Cấp' => 'Hàng Trung Cấp',
		'Hàng Phổ Thông' => 'Hàng Phổ Thông',
		'' => 'Null'
	);
	
	$banchay = array(
		'BC' => 'Bán Chạy',
		'' => 'Không'
	);
	
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
		'value' => set_value('ten_hinh'),
		'style' => 'border: 1px solid #777; height:30px; width:295px;'
	);
	
	$submit = array(
		'name' => 'submit',
		'value' => 'Thêm',
		'class' => 'addProducts'
	);
?>
	<table style="margin:auto;">
        <tr>
            <td class="form_label">Tên sản phẩm</td>
            <td><?php echo form_input($tensanpham);?></td>
        </tr>
        
         <tr>
            <td class="form_label">Loại sản phẩm</td>
            <td>
				<?php echo form_dropdown('loaisanpham',$loaisanpham,'DT','class="selectBox"');?>
    		</td>
        </tr>
        
         <tr>
            <td class="form_label">Thông tin sản phẩm</td>
            <td><?php echo form_textarea($ttsanpham); ?></td>
            
			<script type="text/javascript" language="javascript">
     
				CKEDITOR.replace( 'noidung');
			 
			</script>
            
        </tr>
        
        <tr>
            <td class="form_label">Hãng sản xuất</td>
           <td><?php echo form_dropdown('hangsx',$hangsx,'Apple','class="selectBox"'); ?></td>
        </tr>
        
        <tr>
            <td class="form_label">Hình</td>
            <td>
            	<?php echo form_button($button);?>
            	<?php echo form_input($ten_hinh);?>
            </td>
        </tr>
        
        <tr>
            <td class="form_label">Giá</td>
            <td><?php echo form_input($gia);?></td>
        </tr>
        
        <tr>
            <td class="form_label">Mặt hàng</td>
            <td><?php echo form_dropdown('chatluong',$chatluong,'CC','class="selectBox"');?></td>
        </tr>
        
        <tr>
            <td class="form_label">Bán Chạy</td>
            <td><?php echo form_dropdown('banchay',$banchay,'','class="selectBox"');?></td>
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
    