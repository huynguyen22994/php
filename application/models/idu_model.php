<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Idu_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		// function insert hoa don ban hang
		public function insert_buy($tt_hoadon, $tenkhachhang, $diachi, $email, $sdt)
		{
			$data = array(
				'TT_HoaDon' => $tt_hoadon,
				'TenKhachHang' => $tenkhachhang,
				'DiaChi' => $diachi,
				'Email' => $email,
				'SDT' => $sdt
				
			);
			$this->db->insert('tblpayment', $data);
		}
		
		// function them san pham dien thoai
		public function addproducts_model($ten_hinh,$tensp,$ttsanpham,$hangsx,$gia,$loaisp,$chatluong,$ngaycn)
		{
			$data = array(
				'Hinh' => $ten_hinh,
				'TenSP' => $tensp,
				'TTSP' => $ttsanpham,
				'HangSX' => $hangsx,
				'Gia' => $gia,
				'LoaiSP' => $loaisp,
				'ChatLuong' => $chatluong,
				'NgayCapNhat' => $ngaycn
			);
			$this->db->insert('tbldt', $data);
		}
		
		// function them hang san xuat dien thoai
		public function addmaker_model($tenhangsx)
		{
			$data = array(
				'TenHangSX' => $tenhangsx,
			);
			$this->db->insert('tblmaker', $data);
		}
		
		// function them ban tin 
		public function addnews_model($tenbantin, $tomtatbantin, $noidung, $ten_hinh)
		{
			$data = array(
				'TenBanTin' => $tenbantin,
				'TomTatBanTin' => $tomtatbantin,
				'NoiDung' => $noidung,
				'Hinh' => $ten_hinh
			);
			$this->db->insert('tblnews', $data);
		}
		
		// function them hinh slider 
		public function addslider_model($tenhinh, $tieude, $link)
		{
			$data = array(
				'Hinh' => $tenhinh,
				'TieuDe' => $tieude,
				'Link' => $link,
			);
			$this->db->insert('tblslider', $data);
		}
		
		// function them tin lien he 
		public function addcontact_model($username, $email, $title_contact, $content_contact)
		{
			$data = array(
				'Ten' => $username,
				'Email' => $email,
				'TieuDe' => $title_contact,
				'NoiDung' => $content_contact
			);
			$this->db->insert('tbllienhe', $data);
		}
		
		
		/////////////////////////////////////////////////////update///////////////////////////////////////////////
		// function xu ly thay doi mat khau
		public function update_user($id)
		{
			$password_new = $this->input->post('password_new');
			$md5_password = md5($password_new);
			$data = array(
			   'Password' => $md5_password,
			);
			if($this->input->post('update'))
			{
				$this->db->where('id', $id);
				$this->db->update('tbluser', $data); 
			}
		}
		
		// function cap nhat san pham
		
		public function update_products($id)
		{
			
			$ngaycn = date("d/m/Y");
			
			$data = array(
			   'TenSP' => $this->input->post('tensanpham'),
			   'TTSP' => $this->input->post('ttsanpham'),
			   'HangSX' => $this->input->post('hangsx'),
			   'Gia' => $this->input->post('gia'),
			   'LoaiSP' => $this->input->post('loaisanpham'),
			   'ChatLuong' => $this->input->post('chatluong'),
			   'BanChay' => $this->input->post('banchay'),
			   'NgayCapNhat' => $ngaycn
			);
			if($this->input->post('update'))
			{
				$this->db->where('id', $id);
				$this->db->update('tbldt', $data); 
			}
		}
		
		// function cap nhat ban tin
		
		public function update_news($id)
		{
			
			$data = array(
			   'TenBanTin' => $this->input->post('tenbantin'),
			   'TomTatBanTin' => $this->input->post('tomtatbantin'),
			   'NoiDung' => $this->input->post('noidung')
			);
			if($this->input->post('update'))
			{
				$this->db->where('id', $id);
				$this->db->update('tblnews', $data); 
			}
		}
		
		// function cap nhat slider
		
		public function update_slider($id)
		{
			
			$data = array(
			   'Hinh' => $this->input->post('ten_hinh'),
			   'TieuDe' => $this->input->post('tieude'),
			   'Link' => $this->input->post('link')
			);
			if($this->input->post('update'))
			{
				$this->db->where('id', $id);
				$this->db->update('tblslider', $data); 
			}
		}
		
		// function cap nhat gioi thieu
		
		public function update_about_us($id)
		{
			$data = array(
			   'NoiDung' => $this->input->post('noidung')
			);
			if($this->input->post('update'))
			{
				$this->db->where('id', $id);
				$this->db->update('tblgioithieu', $data); 
			}
		}
		
		
		
		/////////////////////////////////////////////////////delete///////////////////////////////////////////////
		// function xoa san pham
		
		function delete_products($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tbldt');
		}
		
		// function xoa slider
		function delete_slider($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tblslider');
		}
		
		// function xoa hoa don
		
		function delete_bill($id)
		{
			$this->db->where('Id', $id);
			$this->db->delete('tblpayment');
		}
		
		// function xoa ban tin
		
		function delete_news($id)
		{
			$this->db->where('Id', $id);
			$this->db->delete('tblnews');
		}
		
		// function xoa lien he
		
		function delete_contact($id)
		{
			$this->db->where('Id', $id);
			$this->db->delete('tbllienhe');
		}
		
	}