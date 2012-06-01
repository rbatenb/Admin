<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		modules::run('login/is_logged_in');
		
		 
	}
}

/* End of file user.php */
/* Location: ./application/modules/user/controllers/user.php */