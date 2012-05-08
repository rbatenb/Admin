<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller 
{
	public function index()
	{
		$this->load->view('login');
	}
	
	private function is_logged_in()
	{
		echo 'You are not logged in';
		die(); 
	}
}

/* End of file login.php */
/* Location: ./application/modules/login/controllers/login.php */