<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller 
{
	public function index()
	{
		$this->load->view('login/index');
	}
	
	public function is_logged_in()
	{	
		if(!isset($_SESSION['login_salt']))
		{
			redirect('login/index');
		}
	}
	
	public function forgot_password()
	{
		$this->form_validation->set_rules('cms_username', 'Gebruikersnaam', 'required');
		$this->form_validation->set_rules('cms_password', 'Wachtwoord', 'required');
		
		if($this->form_validation->run())
		{
			$data = $this->forgot_password_model->fetch_details();
		
			if($data != false)
			{
				modules::run('admin/send_email', $data['email'], $this->config->item('subject', 'forgot_password'), $this->config->item('body', 'forgot_password'));
			}
		}
	
		$this->load->view('forgot_password/index');
	}
}

/* End of file login.php */
/* Location: ./application/modules/login/controllers/login.php */