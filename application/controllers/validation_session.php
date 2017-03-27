<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Validation_session extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->model("products_model");
		}
		
		public function index()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/index');
				$config['total_rows'] = $this->products_model->count_all_products();
				$config['per_page'] = 3;
				$config['uri_segment'] = 3;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Admin";
				$temp['template4'] = "skin/admin/products_admin";
				$temp['data']['records_admin'] = $this->products_model->get_products($config['per_page'],$this->uri->segment(3));
				$temp['sum_products'] = $this->products_model->count_all_products();
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
			else
			{
				redirect('home/login', 'refresh');
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		public function user_admin()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = 'Thông Tin Quản Trị';
				$temp['template4'] = 'skin/admin/user_admin';
				$temp['data']['records_user_admin'] = $this->products_model->getUser();
				$temp['data']['currentPage'] = $this->uri->segment(2);
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function addproducts()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['state'] = '';
				$temp['title'] = "Thêm Sản Phẩm";
				$temp['template4'] = "skin/admin/addproducts_admin";
				$temp['data']['records_products_admin'] = 'THÊM SẢN PHẨM MỚI';
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$temp['data']['TenHangSX'] = $this->products_model->getMaker();
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function addnews()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['state'] = '';
				$temp['title'] = "Thêm Tin Tức";
				$temp['template4'] = "skin/admin/addnews_admin";
				$temp['data']['records_news_admin'] = 'THÊM MỘT BẢN TIN MỚI';
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function addmaker()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['state'] = '';
				$temp['title'] = "Thêm Sản Phẩm";
				$temp['template4'] = "skin/admin/addmaker_admin";
				$temp['data']['records_products_admin'] = 'THÊM HÃNG SẢN XUẤT ĐIỆN THOẠI MỚI';
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function addslider()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['state'] = '';
				$temp['title'] = "Thêm Hình Slider";
				$temp['template4'] = "skin/admin/addslider_admin";
				$temp['data']['records_slider_admin'] = 'THÊM HÌNH SLIDER';
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function viewnews()
		{

			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/viewnews');
				$config['total_rows'] = $this->products_model->count_all_news();
				$config['per_page'] = 3;
				$config['uri_segment'] = 3;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
			
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "QL Tin Tức";
				$temp['sum_news'] = $this->products_model->count_all_news();
				$temp['template4'] = "skin/admin/viewnews_admin";
				
				$temp['data']['records_viewnews_admin'] = $this->products_model->getNews($config['per_page'],$this->uri->segment(3));
				
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function viewslider()
		{

			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/viewslider');
				$config['total_rows'] = $this->products_model->count_all_slider();
				$config['per_page'] = 3;
				$config['uri_segment'] = 3;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
			
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "QL Slider";
				$temp['sum_slider'] = $this->products_model->count_all_slider();
				$temp['template4'] = "skin/admin/viewslider_admin";
				$temp['data']['records_viewslider_admin'] = $this->products_model->getSlider($config['per_page'],$this->uri->segment(3));
				
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		//////////////////////////////////////////////////////////////////////////////
		
		function viewaccessories()
		{

			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/viewaccessories');
				$config['total_rows'] = $this->products_model->count_all_accessories();
				$config['per_page'] = 3;
				$config['uri_segment'] = 3;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
			
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Xem Phụ Kiện";
				$temp['sum_accessories'] = $this->products_model->count_all_accessories();
				$temp['template4'] = "skin/admin/viewaccessories_admin";
				
				$temp['data']['records_viewaccessories_admin'] = $this->products_model->getAccessories($config['per_page'],$this->uri->segment(3));
				
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		///////////////////////////////////////////////////////////
		
		public function search()
    	{
			
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
				return preg_replace('/ /', '-',$str);
			}
						
			$string = $this->input->post('txtsearch');

			
			$keyword = vn_str_filter($string);
			redirect("validation_session/searching/".$keyword);
			
    	}
		public function searching($keyword)
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$keyword_new = preg_replace('/-/', ' ', $keyword);
	
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/searching/'.$keyword);
				$config['total_rows'] = $this->products_model->count_all_search($keyword_new);
				$config['per_page'] = 3;
				$config['uri_segment'] = 4;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "TÌM KIẾM";
				//$temp['title_main'] = 'Sản Phẩm Tìm Thấy :'.$this->products_model->count_all_search($keyword_new);
				$temp['sum_search'] = $this->products_model->count_all_search($keyword_new);
				$temp['template4'] = 'skin/admin/viewsearch_admin';
				$temp['data']['records_search_admin'] = $this->products_model->getSearch($keyword_new,$config['per_page'],$this->uri->segment(4));
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
						
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		///////////////////////////////////////////////////////////
		
		function listbill()
		{

			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/listbill');
				$config['total_rows'] = $this->products_model->count_all_bill();
				$config['per_page'] = 5;
				$config['uri_segment'] = 3;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
			
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "DS Hóa Đơn";
				$temp['sum_bill'] = $this->products_model->count_all_bill();
				$temp['template4'] = "skin/admin/listbill_admin";
				
				$temp['data']['records_listbill_admin'] = $this->products_model->getBill($config['per_page'],$this->uri->segment(3));
				
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		///////////////////////////////////////////////////////////
		
		public function viewcontact()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$this->load->library('pagination');
				
				$config['base_url'] = base_url('validation_session/viewcontact');
				$config['total_rows'] = $this->products_model->count_all_contact();
				$config['per_page'] = 5;
				$config['uri_segment'] = 3;
				
				//dinh dang lai phan trang
				$config['cur_tag_open'] = '<li class="CurrentPage"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="digit">';
				$config['num_tag_close'] = '</li>';
				
				$config['next_link'] = '»';
				$config['next_tag_open'] = '<div class="Next">';
				$config['next_tag_close'] = '</div>';
				
				$config['prev_link'] = '«';
				$config['prev_tag_open'] = '<div class="Previous">';
				$config['prev_tag_close'] = '</div>';
				
				$config['first_link'] = 'Đầu';
				$config['first_tag_open'] = '<div class="FirstLink">';
				$config['first_tag_close'] = '</div>';
				
				$config['last_link'] = 'Cuối';
				$config['last_tag_open'] = '<div class="LastLink">';
				$config['last_tag_close'] = '</div>';
				
				$this->pagination->initialize($config);
			
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = 'LIÊN HỆ';
				$temp['sum_contact'] = $this->products_model->count_all_contact();
				$temp['template4'] = 'skin/admin/viewcontact_admin';
				$temp['data']['records_viewcontact_admin'] =$this->products_model->getContact($config['per_page'],$this->uri->segment(3));
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		///////////////////////////////////////////////////////////
		
		public function viewabout_us()
		{
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = 'GIỚI THIỆU';
				$temp['template4'] = 'skin/admin/viewabout_us_admin';
				$temp['data']['records_about_us_admin'] = $this->products_model->getAbout_us();
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
	}