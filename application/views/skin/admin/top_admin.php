<div id='top'> 
    <div id='navigation'>
    	<!-------------------------menu------------------------->
        <!--lay ve ten trang hien tai-->
		<?php $currentPage = $data['currentPage'];
            switch($currentPage)
            {
                case 'listmember':
                    $changePass = 'id="here"';
                    $listbillHere = NULL;
                break;
                
                case 'listbill':
                    $listbillHere = 'id="here"';
                    $changePass = NULL;
                break;
                
                case 'update_member':
                    $changePass = 'id="here"';
                    $listbillHere = NULL;
                break;	
                
                default:
                    $changePass = NULL;	
                    $listbillHere = NULL;
            }
        ?>
        <!---------kiểm tra đăng nhập------->
       
            <div id="container">
                <ul>
                    <li <?php if($currentPage == 'index' || $currentPage == 'addproducts' || $currentPage== 'update_products' || $currentPage == 'insert_products' || $currentPage == 'viewaccessories'){echo 'id="here"';}?>>
                    	<a href="#" >Sản Phẩm</a>
                        <ul>
                            <li><?php echo anchor('validation_session/addproducts','Thêm Sản Phẩm');?></li>
                            <li><?php echo anchor('validation_session/index','Xem Điện Thoại');?></li>
                            <li><?php echo anchor('validation_session/viewaccessories','Xem Phụ Kiện');?></li>
                        </ul>	
                    </li>
                    <li <?php if($currentPage == 'addmaker' || $currentPage == 'insert_maker'){echo 'id="here"';}?>>
						<?php echo anchor('validation_session/addmaker','Thêm Hãng ĐT');?>
                    </li>
                    <li <?php if($currentPage == 'addnews' || $currentPage == 'viewnews' || $currentPage == 'update_news' || $currentPage == 'insert_news'){echo 'id="here"';}?>><a href="#">Tin Tức</a>
                        <ul>
                            <li><?php echo anchor('validation_session/addnews','Thêm Tin Tức');?></li>
                            <li><?php echo anchor('validation_session/viewnews','Xem Tin Tức');?></li>
                        </ul>	
                    </li>
                    <li <?php if($currentPage == 'addslider' || $currentPage == 'viewslider' || $currentPage == 'insert_slider' || $currentPage == 'update_slider'){echo 'id="here"';}?>><a href="#">Hình Slider</a>
                    	<ul>
                            <li><?php echo anchor('validation_session/addslider','Thêm Hình Slider');?></li>
                            <li><?php echo anchor('validation_session/viewslider','Xem Hình Slider');?></li>
                        </ul>
                    </li>	
                    <li <?php if($currentPage == 'viewcontact' || $currentPage == 'viewabout_us' || $currentPage == 'user_admin' || $currentPage == 'listbill' || $currentPage == 'update_about_us' || $currentPage == 'update_user'){ echo 'id="here"';}?>>
                    	<a href="#">Mục Khác</a>
                        <ul>
                            <li><?php echo anchor('validation_session/viewcontact','Liên Hệ');?></li>
                            <li><?php echo anchor('validation_session/viewabout_us','Giới Thiệu');?></li>
                            <li><?php echo anchor('validation_session/user_admin','Đổi Password',$changePass);?></li>
                            <li><?php echo anchor('validation_session/listbill','QL Hóa Đơn',$listbillHere);?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        
        
        <!---------------------tim kiem------------------------->
        <div id='search'>
        	<?php echo form_open('validation_session/search');?>
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
        <!-------phần login--------->
          <div class="login">
             <div id="username"><?php echo $username;?>|</div>
             <div id="exit">
                <?php echo anchor(base_url()."logout","Thoát");?>
             </div>
          </div>

    </div> 
</div>