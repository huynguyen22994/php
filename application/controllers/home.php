<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('products_model','',TRUE);
			
			
		}
		
		public function index()
		{
			$this->load->library('pagination');
			
			$config['base_url'] = base_url('home/index');
			$config['total_rows'] = $this->products_model->count_all_products();
			$config['per_page'] = 8;
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
			
			$temp['title'] = "ĐIỆN THOẠI DI ĐỘNG";
			$temp['template1'] = 'skin/index_layout';
			$temp['template2'] = 'skin/product2';
			$temp['data']['records'] = $this->products_model->get_products($config['per_page'],$this->uri->segment(3));
			$temp['data']['records2'] = $this->products_model->getAll_moreBuy();
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			$temp['data']['currentPage2'] = '';//lay ten phuong thuc
			
			$this->load->view("skin/layout_main",$temp);
		}
		
		///////////////////////////////////////////////////////////////
		
		public function type_maker($type_maker)
		{
			
			$type_maker_new = preg_replace('/-/', ' ', $type_maker);
			
			$this->load->library('pagination');
			
			$config['base_url'] = base_url('home/type_maker/'.$type_maker);
			$config['total_rows'] = $this->products_model->count_all_type_maker($type_maker_new);
			$config['per_page'] = 12;
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
			
			$temp['title'] = "ĐIỆN THOẠI DI ĐỘNG";
			$temp['title_main'] = $type_maker_new;
			$temp['template3'] = 'skin/index_layout';
			$temp['data']['records'] = $this->products_model->getType_maker($type_maker_new, $config['per_page'],$this->uri->segment(4));
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view("skin/layout_sub",$temp);
		}
		
		///////////////////////////////////////////////////////////////
		
		public function product_line($type_products)
		{
			
			$type_products_new = preg_replace('/-/', ' ', $type_products);
			
			$this->load->library('pagination');
			
			$config['base_url'] = base_url('home/'.$type_products);
			$config['total_rows'] = $this->products_model->count_all_productLine($type_products_new);
			$config['per_page'] = 9;
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
			
			$temp['title'] = "ĐIỆN THOẠI DI ĐỘNG";
			$temp['template1'] = 'skin/index_layout';
			$temp['template2'] = 'skin/product2';
			$temp['data']['records'] = $this->products_model->getAll_productLine($type_products_new, $config['per_page'],$this->uri->segment(4));
			$temp['data']['records2'] = $this->products_model->getAll_moreBuy();
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			$temp['data']['currentPage2'] = $this->uri->segment(3);//lay ten phuong thuc
			
			$this->load->view("skin/layout_main",$temp);
		}
		
		///////////////////////////////////////////////////////////
		
		public function news()
		{
			$this->load->library('pagination');
			
			$config['base_url'] = base_url('home/news');
			$config['total_rows'] = $this->products_model->count_all_news();
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
			
			$temp['title'] = "TIN TỨC";
			$temp['title_main'] = 'Thông Tin ICT';
			$temp['template3'] = 'skin/news';
			$temp['data']['records_news'] = $this->products_model->getNews($config['per_page'],$this->uri->segment(3));
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp); 	
		}
		
		///////////////////////////////////////////////////////////
		
		public function detail_news($id)
		{
			$temp['title'] = "XEM TIN TỨC";
			$temp['title_main'] = 'Tin ICT';
			$temp['template3'] = 'skin/view_detail_news';
			$temp['data']['detail_news'] = $this->products_model->getnews_id($id);
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
						
			$this->load->view('skin/layout_sub',$temp);
		}
		
		///////////////////////////////////////////////////////////
		
		public function accessories()
		{
			$this->load->library('pagination');
			
			$config['base_url'] = base_url('home/accessories');
			$config['total_rows'] = $this->products_model->count_all_accessories();
			$config['per_page'] = 12;
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
			
			$temp['title'] = "PHỤ KIỆN";
			$temp['title_main'] = '	Phụ Kiện Điện Thoại';
			$temp['template3'] = 'skin/accessories';
			$temp['data']['records_accessories'] = $this->products_model->getAccessories($config['per_page'],$this->uri->segment(3));
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp); 	
		}
		
		///////////////////////////////////////////////////////////
		
		public function detail_products($id)
		{
			$temp['title'] = "CHI TIẾT SẢN PHẨM";
			$temp['title_main'] = 'Chi Tiết Sản Phẩm';
			$temp['template3'] = 'skin/view_detail_products';
			$temp['data']['detail_products'] = $this->products_model->getproducts_id($id);
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp);
		}
		
		///////////////////////////////////////////////////////////
		
		public function contact()
		{
			$temp['title'] = 'LIÊN HỆ';
			$temp['template3'] = 'skin/contact';
			$temp['title_main'] = 'Liên Hệ';
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp);
		}
		
		///////////////////////////////////////////////////////////
		
		public function about_us()
		{
			$temp['title'] = 'GIỚI THIỆU';
			$temp['template3'] = 'skin/about_us';
			$temp['title_main'] = 'Thông Tin Về Công Ty';
			$temp['data']['records_about_us'] = $this->products_model->getAbout_us();
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp);
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
			redirect("home/searching/".$keyword);
			
    	}
		public function searching($keyword)
		{
			
			$keyword_new = preg_replace('/-/', ' ', $keyword);

			$this->load->library('pagination');
			
			$config['base_url'] = base_url('home/searching/'.$keyword);
			$config['total_rows'] = $this->products_model->count_all_search($keyword_new);
			$config['per_page'] = 8;
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
			
			
			$temp['title'] = "TÌM KIẾM";
			$temp['title_main'] = 'Sản Phẩm Tìm Thấy :'.$this->products_model->count_all_search($keyword_new);
			$temp['template3'] = 'skin/view_search';
			$temp['data']['records_search'] = $this->products_model->getSearch($keyword_new,$config['per_page'],$this->uri->segment(4));
			
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp);

		}
		
		///////////////////////////////////////////////////////////
		
		public function cart()
		{
			
			if($this->input->post('add_cart'))
			{
				$id = $this->input->post('id');
				$qty = $this->input->post('qty');
				$product = $this->products_model->get($id);
				
					$insert = array(
						'id' => $id,
						'qty' => $qty,
						'price' => $product->Gia,
						'name' => $product->TenSP
					);
				$this->cart->insert($insert);
			}
			elseif($this->input->post('update_cart'))
			{
				
				$item = $this->input->post('rowid');
				$qty = $this->input->post('up_qty');
			
					$data = array(
						'rowid' => $item,
						'qty' => $qty
					);
					$this->cart->update($data);
			}
			elseif($this->input->post('remove'))
			{
				$item = $this->input->post('rowid');
				
				$data = array(
					'rowid' => $item,
					'qty' => 0
				);
				$this->cart->update($data);
			}
			
			$temp['title'] = "GIỎ HÀNG";
			$temp['title_main'] = 'Giỏ Hàng Của Bạn';
			$temp['template3'] = 'skin/view_cart';
			//$temp['data']['cart'] = '';
			$temp['data']['menu'] = $this->products_model->getMenu();
			$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
			
			$this->load->view('skin/layout_sub',$temp);
		}
		
		///////////////////////////////////////////////////////////
		
		public function login()
		{
			$this->load->view("skin/viewLogin");
		}
		
		public function verifylogin()
		{
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('user_name', 'Tên người dùng', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'trim|required|xss_clean|callback_check_database');
			
			if($this->form_validation->run() == FALSE)
			{	
				$this->load->view('skin/viewLogin');
			}
			else
			{
				redirect('validation_session/index','refresh');
			}
		}
		
		public function check_database($password)
		{
			
			$username = $this->input->post('user_name');
		
			
			$result = $this->products_model->login($username,$password);
			
			if($result)
			{
				foreach($result as $row)
				{
					$data = array(
						'id' => $row->Id,
						'username' => $row->Username,
						'level' => $row->Level
 					);	
					$this->session->set_userdata('logged_in', $data);
				}
				return TRUE;
			}	
			else
			{
				$this->form_validation->set_message('check_database','Tên truy cập hoặc mật khẩu sai !');
				return FALSE;
			}
		}
		
	}
?>