<div style="border:1px solid #ddd; width:200px; margin:auto; margin-top:10px; margin-bottom:10px; color:#f00; text-align:center;">
<?php 
    $total = $this->cart->total_items();
    if($total==0)
    {
        echo "Giỏ hàng hiện không có sản phẩm nào !";
    }
?>
</div>
<?php if($cart = $this->cart->contents()):?>

    <div id="cart">
        <table>
            <caption>Shopping cart</caption>
            <thead>
                <tr style="text-align:center;">
                    <th>STT</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Cập Nhật</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <?php $STT_ao = 1;?>            
            <?php foreach($cart as $item):?>
           
                <?php echo form_open('home/cart'); ?><!---form post update--->

                <tr style="text-align:center;">
                    <td><?php echo $STT_ao++ ;?></td><!---STT---->
                    <td><?php echo $item['name'];?></td><!---name--->
                    <?php
                        $update_qty = array(
                            'name' => 'up_qty',
                            'maxlength' => '2',
                            'value' => $item['qty'],
                            'style' => 'width:30px;text-align:center; margin:3px;'
                        );
                        
                        $remove = array(
                            'name' => 'remove',
                            'value' => 'Del',
                            'style' => 'border:1px solid #ddd; width:60px; color:#f00;'
                        );
                        
                        $submit = array(
                            'name' => 'update_cart',
                            'value' => 'Update cart',
                            'style' => 'border:1px solid #ddd; width:100px; color:#03C;'
                        );
                    ?>
                    <td>
                        <?php echo form_hidden('rowid', $item['rowid']); ?><!----post rowid-->
                        <?php echo form_input($update_qty);?><!---post quantity-->
                    </td>
                    <td><?php echo number_format($item['subtotal'],0,'.','.');?> VND</td><!---price--->
                    <td>
                    <?php echo form_submit($submit);?><!----update cart--->
                    </td>
                    <td class="remove">
                        <?php echo form_submit($remove);?><!----delete cart--->
                    </td>
                </tr>
               <?php echo form_close(); ?><!--ket thuc form--->
            <?php endforeach;?>
                <tr>
                    <td colspan="3"><strong>Tổng tiền</strong></td>
                    <td>
                        <div style="color:red; text-align:center;">
                        <?php echo number_format($this->cart->total(),0,'.','.');?> VND</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Số lượng hàng trong giỏ</strong></td>
                    <td style="text-align:center;"><?php echo $this->cart->total_items();?></td>
                    <td id= "buttonBuy">Mua hàng</td>
                </tr>
         </table>	
    </div>
        
    <div id="buy">     
       	<div class="buy1">
       		<?php
				$us_name = array(
					'name' => 'us_name',
					'id' => 'us_name',
					'value' => set_value('us_name'),
					'class' => 'form_input2'
				);
				$diachi = array(
					'name' => 'diachi',
					'id' => 'diachi',
					'value' => set_value('diachi'),
					'class' => 'form_input2'
				);
				$email = array(
					'name' => 'email',
					'id' => 'email',
					'value' => set_value('email'),
					'class' => 'form_input2'
				);
				$SDT = array(
					'name' => 'sdt',
					'id' => 'sdt',
					'value' => set_value('sdt'),
					'class' => 'form_input2'
				);
				 $buy = array(
					'name' => 'buy',
					'value' => 'Thanh Toán',
					'class' => 'payment'
				);
        	?>
                
			<?php echo form_open('add/buy_product'); ?> <!--form post mua hang--->  
                <!--------------------------post bang hoa don tinh tien-------------------------->
                 <?php $html = "
                        <table>
                            <thead>
                                <tr style='text-align:center;'>
                                    <th>STT</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>";
                             $STT_ao = 1;  
                            foreach($cart as $item)
                            {
                                $html = $html."<tr style='text-align:center;'>
                                    <td>".$STT_ao++."</td><!---STT---->
                                    <td>".$item['name']."</td><!---name--->
                                    <td>".$item['qty']."</td>
                                    <td>".number_format($item['subtotal'],0,'.','.')."VND</td><!---price--->
                                 </tr>";
                            }
                                $html = $html."<tr>
                                    <td colspan='3'><strong>Tổng tiền</strong></td>
                                    <td>
                                    <div style='color:red; text-align:center;'>".
                                    number_format($this->cart->total(),0,'.','.')."VND</div>
                                    </td>
                                 </tr>
                                <tr>
                                    <td colspan='2'><strong>Số lượng hàng trong giỏ</strong></td>
                                    <td style='text-align:center;'>".$this->cart->total_items()."</td>
                                </tr>
                        </table>";
                        $hoa_don = $html;
                        echo form_hidden('hoadon',$hoa_don);
                    ?>
                <!--------------------------///post bang hoa don tinh tien-------------------------->    
                        <table>
                            <tr>
                                <td>Họ tên:</td>
                                <td><?php echo form_input($us_name);?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ:</td>
                                <td><?php echo form_textarea($diachi);?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?php echo form_input($email);?></td>
                            </tr>
                            <tr>
                                <td>Điện thoại:</td>
                                <td><?php echo form_input($SDT);?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo form_submit($buy);?></td><!----Thanh toán--->
                            </tr>
                        </table>
              <?php echo form_close(); //ket thuc form mua hang?>
      	 </div>
       
       <div class="buy2">
       		<table>
                 <tr>
                    <td colspan="2"><?php echo validation_errors('<div id="errors">','</div>'); ?></td>
                </tr>
            </table>
       </div>
    </div> 
        			
<?php endif;?>
