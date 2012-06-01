<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MX_Controller 
{
	public function index()
	{
		$this->load->view('news/index');
	}
}

/* End of file news.php */
/* Location: ./application/modules/news/controllers/news.php */