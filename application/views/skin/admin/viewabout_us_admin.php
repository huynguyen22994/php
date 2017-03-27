<!--------------thong bao neu khong co ban tin nao trong he thong---------------->
<?php if($data['records_about_us_admin'] == 1)//neu khong tim thay contact thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px; margin-top:10px;'>
				Hiện hệ thống không có liên hệ nào !
			   </div>
			 ";
	  }
	  else
	  {
?>
 <!--------------neu ban tin ton tai---------------->
<div style="clear:both; font-family:Verdana, Geneva, sans-serif; ">
<table style="margin:auto; width:960px; margin-top:0px; padding-top:20px">
    <tr style='background:#4e4f4f; color:#00d2ff;text-align:center;'>
    	<td>STT</td>
        <td>Nội Dung</td>
        <td>Edit</td>
    </tr>
	<?php
	
	 	foreach($data['records_about_us_admin'] as $row)
		{
    		echo "
					<tr>
						<td>".$row->Id."</td>
						<td>".$row->NoiDung."</td>
						<td>".anchor("update/update_about_us/".$row->Id,"<div id='pencel'></div>")."</td>
					</tr>
				";
		}
    ?>   
</table>
</div>

<?php }?>