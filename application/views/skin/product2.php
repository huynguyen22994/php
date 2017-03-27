<!--------------thong bao neu khong co san pham nao trong he thong---------------->
<?php if($data['records2'] == 1)//neu khong tim thay san pham thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px; margin-top:10px;'>
				Hiện hệ thống không có sản phẩm nào !
			   </div>
			 ";
	  }
	  else
	  {
?>
<div id="wrap">
  <div class=" jcarousel-skin-tango">
      <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
          <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
           
           <!--------------neu san pham ton tai---------------->
            <div id="products">
                <ul class="jcarousel-list jcarousel-list-horizontal" id="mycarousel" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 950px;">
                    <?php foreach($data['records2'] as $product): ?>
                     
        <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none outside none; width:160px; height:250px; padding:4px;	margin-right:25px;	border:1px solid #ddd;	background-color:#eee;" jcarouselindex="1">
                        
                        <?php echo form_open('home/cart'); ?>	
                            <!--------image--------->
                            <div class="thumb">
                               <img src="<?php echo $product->Hinh;?>" width="140" height="120"/>
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
                            <div class="price"><?php echo number_format($product->Gia,0,'.','.') ;?> VND</div>
                            
                            <?php echo form_hidden('id',$product->Id);?>
                            <input type="submit" class="addCart" name="add_cart" value="Mua Hàng"/>
                        <?php echo form_close(); ?>
                        
                     </li>
                    
                    <?php endforeach; ?>
                </ul>
            </div>
      
          </div>
      <div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="true"></div>
      <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;" disabled="false"></div>
      </div>
  </div>

</div>
<?php }?>