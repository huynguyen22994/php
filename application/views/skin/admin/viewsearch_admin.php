<!--------------thong bao neu khong co san pham nao trong he thong---------------->
<?php if($data['records_search_admin'] == 1)//neu khong tim thay san pham thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px; margin-top:10px;'>
				Không tìm thấy sản phẩm cần tìm<br/> Mời bạn nhập lại tên máy hoặc tên hãng sản xuất!
			   </div>
			 ";
	  }
	  else
	  {
?>
 <!--------------neu san pham ton tai---------------->
<div class="paging">
	<?php echo $this->pagination->create_links();?>
    <div style="font-family:Verdana, Geneva, sans-serif; width:600px;">
    	Tổng số sản phẩm :<?php echo $sum_search;?>
    </div>
</div>

<div style="font-family:Verdana, Geneva, sans-serif;">
<table style="margin:auto;margin-top:0px; padding-top:10px; width:960px;">
	<tr style='background:#4e4f4f; color:#00d2ff; text-align:center;'>
    	<td>STT</td>
    	<td>Hình</td>
        <td>Tên SP</td>
        <td>Thông Tin</td>
        <td>Giá</td>
        <td>Hãng SX</td>
        <td>Loại SP</td>
        <td>Chất Lượng</td>
        <td>Ngày Cập Nhật</td>
        <td>Edit</td>
        <td>Del</td>
    </tr>
	<?php
		$sodong = 0; $STT_ao = 1;
		foreach($data['records_search_admin'] as $row)
		{
		if($sodong%2==0)
		{
			echo"
			<tr style='font-size:14px;'>
				<td>".$STT_ao++."</td>
				<td><img src='".$row->Hinh."' width='150' height='120' /></td>
				<td>".$row->TenSP."</td>
				<td><div class='products_contents'>".$row->TTSP."</div></td>
				<td>".$row->Gia."</td>
				<td>".$row->HangSX."</td>
				<td>".$row->LoaiSP."</td>
				<td>".$row->ChatLuong."</td>
				<td>".$row->NgayCapNhat."</td>
				  
				<td>".anchor("update/update_products/".$row->Id,"<div id='pencel'></div>")."</td>
				<td>".anchor("delete/delete_products/".$row->Id,"<div id='delete'></div>")."</td>
			</tr>";
			$sodong = $sodong+1;
		}
		else
		{
			echo"
				<tr style='font-size:14px; background:#a3a3a3;'>
					<td>".$STT_ao++."</td>
					<td><img src='".$row->Hinh."' width='150' height='120' /></td>
					<td>".$row->TenSP."</td>
					<td><div class='products_contents'>".$row->TTSP."</div></td>
					<td>".$row->Gia."</td>
					<td>".$row->HangSX."</td>
					<td>".$row->LoaiSP."</td>
					<td>".$row->ChatLuong."</td>
					<td>".$row->NgayCapNhat."</td>  
					
					<td>".anchor("update/update_products/".$row->Id,"<div id='pencel'></div>")."</td>
					<td>".anchor("delete/delete_products/".$row->Id,"<div id='delete'></div>")."</td>
				</tr> "; 
			$sodong = $sodong+1;
		}
	}
    ?>   
</table>
</div>
<?php }?>