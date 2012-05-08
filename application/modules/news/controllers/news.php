<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MX_Controller 
{
	public function index()
	{
		$this->load->view('news');
	}
}

/* End of file login.php */
/* Location: ./application/modules/login/controllers/login.php */