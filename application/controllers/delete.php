<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Delete extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('idu_model');
		}
		

		function delete_products($id)
		{
			$this->idu_model->delete_products($id);
			redirect('validation_session/index','refresh');
		}
		
		function delete_slider($id)
		{
			$this->idu_model->delete_slider($id);
			redirect('validation_session/viewslider','refresh');
		}
		
		function delete_bill($id)
		{
			$this->idu_model->delete_bill($id);
			redirect('validation_session/listbill','refresh');
		}
		
		function delete_news($id)
		{
			$this->idu_model->delete_news($id);
			redirect('validation_session/viewnews','refresh');
		}
		
		function delete_contact($id)
		{
			$this->idu_model->delete_contact($id);
			redirect('validation_session/viewcontact','refresh');
		}
	}
?>