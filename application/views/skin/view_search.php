<?php if($data['records_search'] == 1)//neu khong tim thay san pham thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px; margin-top:10px;'>
				Không tìm thấy sản phẩm cần tìm<br/> Mời bạn nhập lại tên máy hoặc tên hãng sản xuất!
			   </div>
			 ";
	  }
	  else
	  {
?>
<!--------------ton tai mot san pham tim thay---------------->
<div id="products">
    <ul class="products_ul">
        <?php foreach($data['records_search'] as $product): ?>
        <li class="products_li">
           <?php echo form_open('home/cart'); ?>	
                <!--------image--------->
                <div class="thumb">
                   <img src="<?php echo $product->Hinh;?>" width="120" height="120"/>
                </div>
                <!--------quantity--------->
                <div class="qty">
                    <input type="text" style="width:30px; text-align:center;" maxlength="2" value="1" name="qty"/>
                </div>
                <!--------name--------->
                <div class="name">
					<?php echo anchor("home/detail_products/".$product->Id,$product->TenSP); ?>
                </div>
                <!--------price--------->
                <div class="price"><?php echo number_format($product->Gia,0,'.','.'); ?> VND</div>
                
                <?php echo form_hidden('id',$product->Id);?>
                <input type="submit" class="addCart" name="add_cart" value="Mua Hàng"/>
            <?php echo form_close(); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<!---------tao link phan trang--------->
<div class="paging">
	<?php echo $this->pagination->create_links();?>
</div>	

<?php }?>

