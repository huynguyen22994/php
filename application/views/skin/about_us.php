<!--------------thong bao neu khong co san pham nao trong he thong---------------->
<?php if($data['records_about_us'] == 1)//neu khong tim thay san pham thi bao loi nay
	  { 
	  	echo "<div style='width:300px; border:1px solid #ddd; color:#f00; text-align:center; padding:5px; margin:auto; margin-bottom:10px; margin-top:10px;'>
				Hiện hệ thống không có thông tin giới thiệu !
			   </div>
			 ";
	  }
	  else
	  {
?>
        <!--------------neu san pham ton tai---------------->
        <?php foreach($data['records_about_us'] as $row){?>
        <div class='about_us'>
            <?php echo $row->NoiDung;?>
        </div>    
        <?php }?>

<?php }?>