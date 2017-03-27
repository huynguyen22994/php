<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Add extends CI_Controller
	{
		public function __construct()
		{
			parent::__Construct();
			$this->load->model('idu_model');
			$this->load->model('products_model');
			$this->load->helper('form');
			
			
		}
		
		/////////////////////////////////////////// function add hang san xuat//////////////////////////////////////////////
		public function insert_maker()
		{
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('tenhangsx', 'Tên Hãng Sản Xuất', 'trim|required|min_length[2]|max_length[35]|xss_clean');
				
				if($this->form_validation->run() == FALSE)
				{
					
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['state'] = '';
					$temp['title'] = "Thêm Hãng Sản Xuất";
					$temp['template4'] = "skin/admin/addmaker_admin";
					$temp['data']['records_products_admin'] = 'THÊM HÃNG SẢN XUẤT ĐIỆN THOẠI MỚI';
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				else
				{
					$tenhangsx = $this->input->post('tenhangsx');

					$this->idu_model->addmaker_model($tenhangsx);
				
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['state'] = 'Thêm Hãng Mới thành công !'; 
					$temp['title'] = "Thêm Hãng Sản Xuất";
					$temp['template4'] = "skin/admin/addmaker_admin";
					$temp['data']['records_products_admin'] = 'THÊM HÃNG SẢN XUẤT ĐIỆN THOẠI MỚI';
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				
			}
		}
		
		/////////////////////////////////////////// function add san pham ////////////////////////////////////////////// 
		public function insert_products()
		{
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('tensanpham', 'Tên sản phẩm', 'trim|required|min_length[6]|max_length[35]|xss_clean');
				$this->form_validation->set_rules('ttsanpham', 'TT sản phẩm', 'trim|required|min_length[6]|xss_clean');
				$this->form_validation->set_rules('ten_hinh','Hình','trim|required|min_length[3]|xss_clean');
				$this->form_validation->set_rules('gia', 'Giá', 'trim|numeric|required|min_length[3]|xss_clean');
				
				if($this->form_validation->run() == FALSE)
				{
					
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['state'] = 'Thêm sản phẩm không thành công !';
					$temp['title'] = "Thêm Sản Phẩm";
					$temp['template4'] = "skin/admin/addproducts_admin";
					$temp['data']['records_products_admin'] = 'THÊM SẢN PHẨM MỚI';
					$temp['data']['TenHangSX'] = $this->products_model->getMaker();
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				else
				{
					$ten_hinh = $this->input->post('ten_hinh');
					$tensp = $this->input->post('tensanpham');
					$loaisp = $this->input->post('loaisanpham');
					$ttsanpham = $this->input->post('ttsanpham');
					$hangsx = $this->input->post('hangsx');
					$gia = $this->input->post('gia');
					$chatluong = $this->input->post('chatluong');
					$banchay = $this->input->post('banchay');
					$ngaycn = date("d/m/Y");
					
					$this->idu_model->addproducts_model($ten_hinh,$tensp,$ttsanpham,$hangsx,$gia,$loaisp,$chatluong,$banchay,$ngaycn);
				
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['state'] = 'Thêm sản phẩm thành công !'; 
					$temp['title'] = "Thêm Sản Phẩm";
					$temp['template4'] = "skin/admin/addproducts_admin";
					$temp['data']['records_products_admin'] = 'THÊM SẢN PHẨM MỚI';
					$temp['data']['TenHangSX'] = $this->products_model->getMaker();
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				
			}
		}
		
		//////////////////////////////////////////////// function add ban tin//////////////////////////////////////////////
		public function insert_news()
		{
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('tenbantin', 'Tên bản tin', 'trim|required|min_length[6]|xss_clean');
				$this->form_validation->set_rules('tomtatbantin', 'Tóm tắt bản tin', 'trim|required|min_length[6]|xss_clean');
				$this->form_validation->set_rules('noidung', 'Nội dung', 'trim|required|min_length[6]');
				$this->form_validation->set_rules('ten_hinh','Hình','trim|required|min_length[3]|xss_clean');
				
				if($this->form_validation->run() == FALSE)
				{
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['state'] = 'Thêm bản tin không thành công !';
					$temp['title'] = "Thêm Tin Tức";
					$temp['template4'] = "skin/admin/addnews_admin";
					$temp['data']['records_news_admin'] = 'THÊM MỘT BẢN TIN MỚI';
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				else
				{
					
					$ten_hinh = $this->input->post('ten_hinh');
					$tenbantin = $this->input->post('tenbantin');
					$tomtatbantin = $this->input->post('tomtatbantin');
					$noidung = $this->input->post('noidung');
					
					$this->idu_model->addnews_model($tenbantin, $tomtatbantin, $noidung, $ten_hinh);
				
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['state'] = 'Thêm bản tin thành công !';
					$temp['title'] = "Thêm Tin Tức";
					$temp['template4'] = "skin/admin/addnews_admin";
					$temp['data']['records_news_admin'] = 'THÊM MỘT BẢN TIN MỚI';
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				
			}
		}
		
		//////////////////////////////////////////////// function payment//////////////////////////////////////////////
		
		function buy_product()
		{
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('us_name','Tên người mua','trim|required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('diachi','Địa Chỉ','trim|required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('email','Địa chỉ Email','trim|required|min_length[6]|xss_clean|valid_email');
			$this->form_validation->set_rules('sdt','Số điện thoại','trim|numeric|required|min_length[10]');
			
			if($this->form_validation->run() == FALSE)
			{
				$temp['title'] = "MUA HÀNG";
				$temp['title_main'] = 'Mua hàng không thành công !';
				$temp['template3'] = 'skin/view_cart';
				$temp['data']['menu'] = $this->products_model->getMenu();
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				
				$this->load->view('skin/layout_sub',$temp);
			}
			else
			{
				$tt_hoadon = $this->input->post('hoadon');
				$tenkhachhang = $this->input->post('us_name');
				$diachi = $this->input->post('diachi');
				$email = $this->input->post('email');
				$sdt = $this->input->post('sdt');
				
				$this->idu_model->insert_buy($tt_hoadon, $tenkhachhang, $diachi, $email, $sdt);
				
				$this->cart->destroy();//xoa gio hang khi giao dich thanh cong !
				
				$temp['title'] = "MUA HÀNG";
				$temp['title_main'] = 'MUA HÀNG THÀNH CÔNG !';
				$temp['template3'] = 'skin/view_buy';
				$temp['data']['menu'] = $this->products_model->getMenu();
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				
				$this->load->view('skin/layout_sub',$temp);

			}
		}
		
		// function lien he
		
		function insert_contact()
		{
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('us_name', 'Tên', 'trim|required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('email','Địa chỉ email','trim|required|min_length[6]|xss_clean|valid_email');
			$this->form_validation->set_rules('title_contact','Tiêu đề thông điệp','trim|required|xss_clean');
			$this->form_validation->set_rules('content_contact','Nội dung thông điệp', 'trim|required|xss_clean');
			
			if($this->form_validation->run() == FALSE)//nhap lieu khong thanh cong
			{
				$temp['title'] = 'LIÊN HỆ';
				$temp['template3'] = 'skin/contact';
				$temp['title_main'] = 'Gởi Không Thành Công !';
				$temp['data']['menu'] = $this->products_model->getMenu();
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/layout_sub',$temp);
			}
			else//nhap lieu thanh cong
			{
				$username = $this->input->post('us_name');
				$email = $this->input->post('email');
				$title_contact = $this->input->post('title_contact');
				$content_contact = $this->input->post('content_contact');
				$this->idu_model->addcontact_model($username, $email, $title_contact, $content_contact);
				
				$temp['title'] = 'LIÊN HỆ';
				$temp['template3'] = 'skin/contact';
				$temp['title_main'] = 'Gởi Thành Công !';
				$temp['data']['menu'] = $this->products_model->getMenu();
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/layout_sub',$temp);			
			}
			
		}
		
		// function lien he
		
		function insert_slider()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('ten_hinh', 'Tên Hình', 'trim|required|min_length[6]|xss_clean');
				$this->form_validation->set_rules('tieude','Tiêu Đề Hình','trim|required|min_length[6]|xss_clean');
				$this->form_validation->set_rules('link','Link','trim|required|xss_clean');
				
				if($this->form_validation->run() == FALSE)//nhap lieu khong thanh cong
				{
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$temp['title'] = 'THÊM HÌNH SLIDER';
					$temp['state'] = 'Thêm Slider Không Thành Công !';
					$temp['data']['records_slider_admin'] = 'THÊM HÌNH SLIDER';
					$temp['template4'] = 'skin/admin/addslider_admin';
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);
				}
				else//nhap lieu thanh cong
				{
					$temp['level'] = $session_data['level'];
					$temp['username'] = $session_data['username'];
					$tenhinh = $this->input->post('ten_hinh');
					$tieude = $this->input->post('tieude');
					$link = $this->input->post('link');
					$this->idu_model->addslider_model($tenhinh, $tieude, $link);
					
					$temp['title'] = 'THÊM HÌNH SLIDER';
					$temp['state'] = 'Thêm Slider Thành Công !';
					$temp['data']['records_slider_admin'] = 'THÊM HÌNH SLIDER';
					$temp['template4'] = 'skin/admin/addslider_admin';
					$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
					$this->load->view('skin/admin/layout_admin',$temp);			
				}
			}
		}
		
	}