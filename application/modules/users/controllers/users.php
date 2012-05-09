<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		modules::run('login/is_logged_in');
		
		$this->load->view('users'); 
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */