<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
      parent::__construct();
		$this->load->library('session');
		$this->is_logged_in();
    }

	public function index()
	{
		$this->load->helper('form');
		$data['content']='home';
		$this->load->view('templatehome', $data);
	}
	
	public function is_logged_in()
	{
		$is_logged_in=$this->session->userdata('is_logged_in');
		if($is_logged_in == true)
		{
			redirect('dashboard');
		}
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */