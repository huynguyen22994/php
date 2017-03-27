<!--------------thong bao neu khong co san pham nao trong he thong---------------->
<?php if($data['records_accessories'] == 1)//neu khong tim thay san pham thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px;'>
				Hiện hệ thống không có sản phẩm nào !
			   </div>
			 ";
	  }
	  else
	  {
?>
 <!--------------neu san pham ton tai---------------->
<div id="products">
    <ul class="products_ul">
        <?php foreach($data['records_accessories'] as $product): ?>
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
                <!---------name--------->
            	<div class="name">
					<?php echo anchor("home/detail_products/".$product->Id,$product->TenSP); ?>
                </div>
                <!--------price--------->
                <div class="price"><?php echo number_format($product->Gia,0,'.','.') ;?> VND</div>
                
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