<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */