<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		modules::run('login/is_logged_in');
		
		$this->load->model('admin_model');
		$data = $this->admin_model->fetch_all();
		
		$this->load->view('admin/index', $data);
	}
	
	public function logout()
	{
		modules::run('login/is_logged_in');
	
		session_destroy();
		redirect('admin/login');
	}
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */