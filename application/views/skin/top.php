<div id='top'>
	<div align="right" style="margin-right:100px">
    <embed height="150" width="960" type="application/x-shockwave-flash" wmode="transparent" allowscriptaccess="always"  allowfullscreen="false" scale="noborder" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="<?php echo base_url();?>public/images/data/18.swf" title=""/>
    </div>
    <div id='navigation'>
    	<div id='cssmenu'>
            <ul>
            	<?php $currentPage = $data['currentPage'];?>
                <li <?php if($currentPage == '' || $currentPage == 'home' || $currentPage == 'cart' || $currentPage == 'type_maker' || $currentPage == 'searching' || $currentPage == 'detail_products' || $currentPage == 'buy_product' || $currentPage == 'index' || $currentPage == 'product_line'){echo "class='active'";}?>>
                    <?php echo anchor('home','Trang Chủ');?>
                </li>
                <li <?php if($currentPage == 'about_us'){echo "class='active'";}?>>
                    <?php echo anchor('home/about_us','Giới Thiệu');?>
                </li>
                <li <?php if($currentPage == 'news' || $currentPage == 'detail_news'){echo "class='active'";}?>>
                    <?php echo anchor('home/news','Tin Tức');?>
                </li>
                <li <?php if($currentPage == 'accessories'){echo "class='active'";}?>>
                    <?php echo anchor('home/accessories','Phụ Kiện');?>
                </li>
                <li <?php if($currentPage == 'contact' || $currentPage == 'insert_contact'){echo "class='active'";}?>>
                    <?php echo anchor('home/contact','Liên Hệ');?>
                </li>
            </ul>
			 <?php echo anchor("home/cart","<div id='view_cart'></div>");
				  echo "<div class='total_items'>".$this->cart->total_items()." SP</div>";
			 ?>
        </div>
        <div id='search'>
        	<?php echo form_open('home/search');?>
				<?php
                    
                    $txtsearch = array(
                        'name' => 'txtsearch',
                        'id' => 'txtsearch',
                        'value' => 'Tìm sản phẩm',
						'onfocus' => "if (this.value == 'Tìm sản phẩm') {this.value = '';}",
                        'onblur' => "if (this.value == '') {this.value = 'Tìm sản phẩm';}"
                    );
                
                    $search = array(
                        'type' => 'image',
                        'name' => 'search',
                        'id' => 'TimKiem',
                        'src' => base_url().'public/images/data/btnbg.png'
                    );
                    
                ?>
                <div class='searchBg'>
                    <?php echo form_input($txtsearch);?>
                </div>
                <div class='searchBtn'>
                    <?php echo form_input($search);?>
                </div>
            <?php echo form_close();?>
        </div>
    </div> 
</div>