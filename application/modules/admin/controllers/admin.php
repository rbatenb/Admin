<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller 
{
	public function index()
	{
		modules::run('login/is_logged_in');
		
		$this->load->view('admin'); 
	}
	
	public function forgot_password()
	{
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		
		if($this->form_validation->run())
		{
			$this->uri->redirect('admin/index');
		}
	
		$this->load->view('forgot_password');
	}
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */