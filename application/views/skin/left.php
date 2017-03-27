<?php
//ham chuyen chu Unicode thanh nonUnicode
function vn_str_filter ($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
		return preg_replace('/ /', '-',$str);//chuyen chuoi tu "a%20b" thanh "a-b"
    }
?>

<!--<div class='left_title'>Tư Vấn</div>
<div class='left_contents'>
	<center>
    <a href="ymsgr:sendim?darklqt_2008" />
        <img src="http://opi.yahoo.com/online?u=darklqt_2008&m=g&t=14&l" border=0 />
    </a><br>
    </center>
</div>-->

<div class='left_title'>Sản Phẩm</div>
<div class='left_contents'>
	<ul>
        <!--------------thong bao neu khong co san pham nao trong he thong---------------->
        <?php if($data['menu'] == 1)//neu khong tim thay san pham thi bao loi nay
              { 
                echo "<div style='color:#f00; font-family:Tahoma, Geneva, sans-serif;'>
                        Menu không tồn tại !
                       </div>
                     ";
              }
              else
              {
        ?>
         <!--------------neu san pham ton tai---------------->
                <?php foreach($data['menu'] as $menu) {?>
                    <li>
                        <?php echo anchor("home/type_maker/".vn_str_filter($menu->HangSX),$menu->HangSX);?>
                    </li>
                <?php } ?>
         <?php }?>
    </ul>
</div>