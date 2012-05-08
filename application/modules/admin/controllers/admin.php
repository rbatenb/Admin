<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller 
{
	public function __construct()
	{
		modules::run('login/is_logged_in');
	}

	public function index()
	{
		$this->load->view('admin');
	}
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */