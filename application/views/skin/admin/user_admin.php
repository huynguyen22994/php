<div style="font-family:Verdana, Geneva, sans-serif;">
<table style="margin:auto;margin-top:0px; padding-top:10px; width:960px;">
    <tr style='background:#4e4f4f; color:#00d2ff; text-align:center;'>
    	<td>STT</td>
    	<td>Tên Thành Viên</td>
        <td>Password</td>
        <td>Cấp Độ</td>
        <td>Edit</td>
    </tr>
	<?php
		$sodong = 0;
		$STT_ao = 1;
	 	foreach($data['records_user_admin'] as $row)
		{
			if($sodong%2==0)
			{
				echo"
				<tr style='font-size:14px;'>
					<td>".$STT_ao++."</td>
					<td>".$row->Username."</td>
					<td>".$row->Password."</td>
					<td>".$row->Level."</td>
					<td>".anchor("update/update_user/".$row->Id,"<div id='pencel'></div>")."</td>
				</tr>";
				$sodong = $sodong+1;
			}
			else
			{
				echo"
					<tr style='font-size:14px; background:#a3a3a3;'>
						<td>".$STT_ao++."</td>
						<td>".$row->Username."</td>
						<td>".$row->Password."</td>
						<td>".$row->Level."</td>
						<td>".anchor("update/update_user/".$row->Id,"<div id='pencel'></div>")."</td>
					</tr> "; 
				$sodong = $sodong+1;
			}
	}
    ?>   
</table>
</div>