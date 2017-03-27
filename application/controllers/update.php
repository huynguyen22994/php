<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Update extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('idu_model');
			$this->load->model('products_model');
			$this->load->helper('form');
		}
		
		public function update_products($id)
		{	
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Update Sản Phẩm";
				$temp['template4'] = "skin/admin/upproducts_admin";
				$temp['title_products_admin'] = 'CẬP NHẬT SẢN PHẨM';
				$temp['data']['records_products_admin'] = $this->products_model->getproducts_id($id);
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				$temp['data']['TenHangSX'] = $this->products_model->getMaker();
				if($this->input->post('update'))
				{
					$this->idu_model->update_products($id);
					redirect('validation_session/index','refresh');
				}
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
		
		public function update_user($id)
		{	
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Đổi Mật Khẩu";
				$temp['template4'] = "skin/admin/upuser_admin";
				$temp['title_admin'] = 'THAY ĐỔI MẬT KHẨU QUẢN TRỊ';
				$temp['data']['records_member_admin'] = $this->products_model->getUser_id($id);
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				if($this->input->post('update'))
				{
					$this->idu_model->update_user($id);
					redirect('validation_session/user_admin','refresh');
				}
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}
				
		public function update_news($id)
		{	
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Update Tin Tức";
				$temp['template4'] = "skin/admin/upnews_admin";
				$temp['title_news_admin'] = 'CẬP NHẬT TIN TỨC';
				$temp['data']['records_news_admin'] = $this->products_model->getnews_id($id);
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				if($this->input->post('update'))
				{
					$this->idu_model->update_news($id);
					redirect('validation_session/viewnews','refresh');
				}
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}	
		
		public function update_slider($id)
		{	
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Update Slider";
				$temp['template4'] = "skin/admin/upslider_admin";
				$temp['title_slider_admin'] = 'CẬP NHẬT SLIDER';
				$temp['data']['records_slider_admin'] = $this->products_model->getslider_id($id);
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				if($this->input->post('update'))
				{
					$this->idu_model->update_slider($id);
					redirect('validation_session/viewslider','refresh');
				}
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}	
		
		public function update_about_us($id)
		{	
			
			$session_data = $this->session->userdata('logged_in');
			if($session_data['username']==TRUE && $session_data['level']==1)
			{
				
				$temp['level'] = $session_data['level'];
				$temp['username'] = $session_data['username'];
				$temp['title'] = "Update Giới Thiệu";
				$temp['template4'] = "skin/admin/upabout_us_admin";
				$temp['title_about_us_admin'] = 'CẬP NHẬT GIỚI THIỆU';
				$temp['data']['records_about_us_admin'] = $this->products_model->getabout_us_id($id);
				$temp['data']['currentPage'] = $this->uri->segment(2);//lay ten phuong thuc
				if($this->input->post('update'))
				{
					$this->idu_model->update_about_us($id);
					redirect('validation_session/viewabout_us','refresh');
				}
				$this->load->view('skin/admin/layout_admin',$temp);
			}
		}	
			
	}