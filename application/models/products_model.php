<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Products_model extends CI_Model
	{
		// lay ve san  pham theo dang cap (cao cap, trung cap, pho thong)
		public function count_all_productLine($type_products_new)
		{
			$this->db->where('ChatLuong', $type_products_new);
			$this->db->from('tbldt');
			return $this->db->count_all_results();
		}
		
		public function getAll_productLine($type_products_new,$number, $offset)
		{	
			$this->db->where('ChatLuong',$type_products_new);
			$query = $this->db->get('tbldt',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve tat ca san pham cho trang index
		public function count_all_products()
		{
			$this->db->where('LoaiSP','DT');
			$this->db->from('tbldt');
			return $this->db->count_all_results();
		}
		
		public function get_products($number, $offset)
		{	
			$this->db->where('LoaiSP','DT');
			$query = $this->db->get('tbldt',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		//lay ve san pham ban chay
		public function getAll_moreBuy()
		{	
			/*$this->db->where('LoaiSP','DT');*/
			$this->db->where('BanChay','BC');
			$query = $this->db->get('tbldt');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		//lay ve ten hang san xuat lam menu		
		public function getMenu()
		{
			$query = $this->db->query("SELECT distinct HangSX FROM tbldt");
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve loai san pham tu hang san xuat
		public function count_all_type_maker($type_products_new)
		{
			$this->db->where('HangSX', $type_products_new);
			$this->db->from('tbldt');
			return $this->db->count_all_results();
		}
		
		public function getType_maker($type_products_new, $number, $offset)
		{
			$this->db->where('HangSX', $type_products_new);
			$query = $this->db->get('tbldt', $number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		
		// lay ve dong san pham de tao muc phan loai san pham
		public function getMaker()
		{
			$query = $this->db->query("SELECT distinct TenHangSX FROM tblmaker");
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve tin tuc
		public function count_all_news()
		{
			return $this->db->count_all('tblnews');
		}
		
		public function getNews($number, $offset)
		{
			$query = $this->db->get('tblnews',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}	
		
		// lay ve phu kien
		public function count_all_accessories()
		{
			$this->db->where('LoaiSP','PK');
			$this->db->from('tbldt');
			return $this->db->count_all_results();
		}
		
		public function getAccessories($number, $offset)
		{
			$this->db->where('LoaiSP','PK');
			$query = $this->db->get('tbldt',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}	
		
		// lay ve thong tin user
		public function getUser()
		{
			$query = $this->db->get('tbluser');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve ket qua tim kiem
		public function count_all_search($keyword_new)
		{
			$this->db->like('TenSP',$keyword_new);
			$this->db->from('tbldt');
			return $this->db->count_all_results();
		}
		
		public function getSearch($keyword_new, $number, $offset)
		{	
			$this->db->like('TenSP',$keyword_new);
			$query = $this->db->get('tbldt', $number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve hoa don
		function count_all_bill()
		{
			return $this->db->count_all('tblpayment');
		}
		
		function getBill($number, $offset)
		{
			$query = $this->db->get('tblpayment',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve cac tin lien he
		public function count_all_contact()
		{
			return $this->db->count_all('tbllienhe');
		}
		
		public function getContact($number, $offset)
		{
			$query = $this->db->get('tbllienhe',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve slider
		public function count_all_slider()
		{
			return $this->db->count_all('tblslider');
		}
		
		public function getSlider($number, $offset)
		{
			$query = $this->db->get('tblslider',$number, $offset);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		// lay ve thong tin gioi thieu cong ty
		public function getAbout_us()
		{
			$query = $this->db->get('tblgioithieu');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			else{
				return $data = 1;
			}
			return $data;
		}
		
		///////////////////////////////////////////// phan chuc nang update ////////////////////////////////////////////
		
		public function getUser_id($id)
		{	
			$this->db->where('id', $id);
			$query = $this->db->get('tbluser');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		
		public function getproducts_id($id)
		{	
			$this->db->where('Id', $id);
			$query = $this->db->get('tbldt');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		
		public function getnews_id($id)
		{	
			$this->db->where('id', $id);
			$query = $this->db->get('tblnews');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		
		public function getslider_id($id)
		{	
			$this->db->where('id', $id);
			$query = $this->db->get('tblslider');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		
		public function getabout_us_id($id)
		{	
			$this->db->where('id', $id);
			$query = $this->db->get('tblgioithieu');
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		
		public function get($id)
		{
			$results = $this->db->get_where('tbldt',array('Id'=> $id))->result();
			$result = $results[0];
			return $result;
		}
		
		//////////////////////////////////////////// kiem tra dang nhap///////////////////////////////////////////
		public function login($username,$password)
		{
			$this->db->select('Id, Username, Password, Level');
			$this->db->from('tbluser');
			$this->db->where('username = ' . "'" . $username . "'");			
			$this->db->where('password = ' . "'" . MD5($password) . "'");
			$this->db->limit(1);
			
			$query = $this->db->get();
			
			if($query->num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
	}
?>