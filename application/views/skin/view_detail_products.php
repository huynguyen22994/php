<?php foreach($data['detail_products'] as $row){?>
	<div id="detail_products">
    	<div class="detail1">
        	<div style="margin:5px 5px; width:180px; padding:10px 0; border:1px solid #ddd;">
    		<?php echo anchor($row->Hinh,"<img src='".$row->Hinh."'width='180' height='180'>","class='fancybox-effects-a'");?>
    		</div>
            <table>
                <tr>
                    <td width="115"><label>Tên sản phẩm:</label></td>
                    <td style="color:#111; font-weight:bold;"><?php echo $row->TenSP;?></td>
                </tr>
                 <tr>
                    <td><label>Hãng sản xuất:</label></td><td><?php echo $row->HangSX;?></td>
                </tr>
                <tr>
                    <td><label>Ngày cập nhật:</label></td><td><?php echo $row->NgayCapNhat;?></td>
                </tr>
                <tr>
                    <td><label>Giá:</label></td><td><?php echo number_format($row->Gia,0,'.','.');?> VND</td>
                </tr> 
          
              </table>
                
                    <?php echo form_open('home/cart'); ?>	   	
                    <?php
                        $add_cart = array(
                            'name' => 'add_cart',
                            'value' => 'Add to cart',
                            'class' => 'addCart'
                        );
                    ?>
                    
                    <?php echo form_hidden('id',$row->Id);?>
                    <?php echo form_hidden('qty',1);?>
                    <?php echo form_submit($add_cart);?>
                 <?php echo form_close(); ?>
        </div>
        
        <div class="detail2">
        	<table>
            	<tr><td><label>Thông tin sản phẩm:</label></td></tr>
            	<tr>
            		<td><?php echo $row->TTSP;?></td>
            	</tr>
            </table>
        </div>
    </div>
    
<?php }?>