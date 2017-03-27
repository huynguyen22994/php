<table cellpadding="0" cellspacing="0" style="padding:5px;">
<?php foreach($data['detail_news'] as $row){?>
	<!-------------------chuyen chu cai dau tien thanh hoa---------------------->
	<div style="font-weight:bold; color:#09F; font-size:22px; padding:10px;">
    	
		<?php echo $row->TenBanTin;	?>
    </div>
	<tr>
    	<td style="font-weight:bold; padding-left:10px; padding-right:22px; text-align:justify;">
        	<?php 
				echo $row->TomTatBanTin; 
			?>
        </td>
    </tr>
    <tr>
    	<td style="padding:9px;"><?php echo $row->NoiDung;?></td>
    </tr>    
<?php }?>
</table>