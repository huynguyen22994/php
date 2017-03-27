<!--------------thong bao neu khong co san pham nao trong he thong---------------->
<?php if($data['records_listbill_admin'] == 1)//neu khong tim thay hoa don thi bao loi nay
	  { 
	  	echo "<div class='paging'>
					<div style='font-family:Verdana, Geneva, sans-serif; width:600px;'>
						| Tổng số hóa đơn là:".$sum_bill."
					</div>
				</div>
				
				<div style='width:320px; color:#f00; font-family:Verdana, Geneva, sans-serif; text-align:center; padding:5px; margin:10px auto;'>
				Hiện hệ thống không có hóa đơn nào !
			   </div>";	 
	  }
	  else
	  {
?>
<div class="paging">
    <?php echo $this->pagination->create_links();?>
    <div style="font-family:Verdana, Geneva, sans-serif; width:600px;">
        | Tổng số hóa đơn là:<?php echo $sum_bill;?>
    </div>
</div>
<!-------------------------------------------------------------------->
<table style="margin:auto;margin-top:0px; padding-top:10px; width:960px; text-align:center;">
	<tr style='background:#4e4f4f; color:#00d2ff; text-align:center;'>
    	<td>Hóa đơn</td>
    	<td>Tên khách hàng</td>
        <td>Địa chỉ</td>
        <td>Email</td>
        <td>Số Phone</td>
        <td>Xóa</td>
    </tr>
<?php
	foreach($data['records_listbill_admin'] as $row)
	{
		echo "<tr style='font-size:14px;'>
				<td>".$row->TT_HoaDon."</td>
				<td>".$row->TenKhachHang."</td>
				<td>".$row->DiaChi."</td>
				<td>".$row->Email."</td>
				<td>".$row->SDT."</td>
				<td>".anchor("delete/delete_bill/".$row->Id,"<div id='delete'></div>")."</td>
				</tr>
				<tr><td colspan='6'><div style='border:3px dashed #ddd;'></div></td></tr>
				";
				
	}
?>
</table>
<?php }?>