<!--------------thong bao neu khong co ban tin nao trong he thong---------------->
<?php if($data['records_viewcontact_admin'] == 1)//neu khong tim thay contact thi bao loi nay
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
	<tr>
    	<td colspan="3"><?php echo $this->pagination->create_links();?></td>
        <td colspan="2">| Tổng số có <?php echo $sum_contact;?> liên hệ</td>
    </tr>
    <tr style='background:#4e4f4f; color:#00d2ff;text-align:center;'>
    	<td>STT</td>
    	<td>Tên Người Gửi</td>
        <td>Email</td>
        <td>Tiêu Đề Liên Hệ</td>
        <td>Nội Dung</td>
        <td>Del</td>
    </tr>
	<?php
		$sodong = 0;
		$STT_ao = 1;
	 	foreach($data['records_viewcontact_admin'] as $row)
		{
    	if($sodong%2==0)
		{
        	echo"
            <tr style='font-size:14px;'>
                <td>".$STT_ao++."</td>
				<td>".$row->Ten."</td>
                <td><div class='news_short_contents'>".$row->Email."</div></td>
                <td>".$row->TieuDe."</td>
				<td><div class='news_contents'>".$row->NoiDung."</div></td>
				<td>".anchor("delete/delete_contact/".$row->Id,"<div id='delete'></div>")."</td>
            </tr>";
         	$sodong = $sodong+1;
        }
		else
		{
			echo"
                <tr style='font-size:14px; background:#a3a3a3;'>
                    <td>".$STT_ao++."</td>
					<td>".$row->Ten."</td>
					<td><div class='news_short_contents'>".$row->Email."</div></td>
					<td>".$row->TieuDe."</td>
					<td><div class='news_contents'>".$row->NoiDung."</div></td>
					<td>".anchor("delete/delete_contact/".$row->Id,"<div id='delete'></div>")."</td>
                </tr> "; 
			$sodong = $sodong+1;
		}
	}
    ?>   
</table>
</div>

<?php }?>