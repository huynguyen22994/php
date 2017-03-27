<?php
	class Logout extends CI_Controller
	{
		function index()
		{
			$this->session->unset_userdata('logged_in');
			redirect('home', 'refresh');
		}
	}
?>