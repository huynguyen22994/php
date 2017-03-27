<!--------------thong bao neu khong co san pham nao trong he thong---------------->
<?php if($data['records_news'] == 1)//neu khong tim thay san pham thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px;'>
				Hiện hệ thống không có bản tin nào !
			   </div>
			 ";
	  }
	  else
	  {
?>

 <!--------------neu san pham ton tai---------------->
<?php foreach($data['records_news'] as $row){?>
<div class='news'>
	<div class='news_col1'><img src="<?php echo $row->Hinh;?>" width="150" height="120"/></div>
    
    <div class='news_col2'>
    	<div class='news_title'>
			<?php 
                echo anchor("home/detail_news/".$row->Id,$row->TenBanTin);
            ?>
        </div>
        
        <div class='news_short'>
		   <?php 
                echo $row->TomTatBanTin; 
            ?>
        </div>
    </div>
</div>    
<?php }?>

<!---------tao link phan trang--------->
<div class="paging">
	<?php echo $this->pagination->create_links();?>
</div>

<?php }?>