<div style="color:#005298; font-size:25px; text-align:center; margin:auto; padding-top:10px;">
	<?php echo $data['records_products_admin'];?>
</div>
<div style="color:#f00; text-align:center;">
	<?php echo $state;?>
</div>
<?php
		$attributes = array('class' => 'form_addmaker', 'id' => 'myform');
		echo form_open('add/insert_maker',$attributes);
		
		$tenhangsx = array(
			'name' => 'tenhangsx',
			'id' => 'tenhangsx',
			'value' => '',
			'class' => 'form_input'
		);
		
		$submit = array(
			'name' => 'addmaker',
			'value' => 'Thêm Hãng SX',
			'class' => 'addMaker'
		);
	
	?>	

    <table style="margin:auto;">        
        <tr>
            <td class="form_label">Tên Hãng SX</td>
            <td><?php echo form_input($tenhangsx);?></td>
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
