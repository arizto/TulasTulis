<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('account_model');				
	}

	public function index()
	{
		redirect('home');
	}
	
	public function register_account($key)
	{
		if($this->account_model->is_valid_key($key))
		{
			if($newemail=$this->account_model->add_account($key)){
				
				$datam=array(
					'email'=>$newemail,
					'is_logged_in'=>1
				);
				$this->session->set_userdata($datam);
				redirect('dashboard');			
			}else{
				$data['content']='registration/signup_failed';
				$this->load->view('template', $data);	
			}
		}else
		{
			$data['content']='registration/invalid_key';
			$this->load->view('template', $data);	
		}
	}
	
	public function signup()
	{
		$emailto=$this->input->post('email');
		$key=md5(uniqid());
		$config = Array(
  			'protocol' => 'smtp',
  			'smtp_host' => 'ssl://server01-iix.secureserver.web.id',
  			'smtp_port' => 465,
  			'smtp_user' => 'info@tulastulis.com', // change it to yours
  			'smtp_pass' => 'infotulastulis@)!@', // change it to yours
  			'mailtype' => 'html',
  			'charset' => 'iso-8859-1'
		);
		
		$this->load->library('email', $config);
		$this->load->library('parser');
		$this->email->clear();
		$this->email->set_newline("\r\n");
		$this->email->from('info@tulastulis.com', 'TulasTulis.com');
		$this->email->to($emailto);
		$this->email->subject("Activate Your TulasTulis.com Account");
		$data['key'] = $key;
		$message = $this->parser->parse('email_activation', $data, true);

		$this->email->message($message);
		
		if($this->account_model->add_temp_account($key)){
			if($this->email->send())
			{
				$data['content']='registration/need_confirm';
				$this->load->view('template', $data);
			}
			else
			{
				redirect('home');
			}
		}else{
			redirect('home');
		}
	}
	
	public function validate_login()
	{
		$this->load->database();
		$query=$this->account_model->validate();
		if($query)
		{
			$infoaccount = $this->account_model->getinfoaccount();
			$session=array(
				'email'=>$this->input->post('email'), 
				'id_account'=>$infoaccount->id,
				'account_name'=>$infoaccount->account_name,
				'is_logged_in'=>true
			);
			$this->session->set_userdata($session);
			redirect('dashboard');
		}
		else
		{
			redirect('account/signin');
		}
	}
	
	public function signin()
	{
		$this->load->helper('form');
		$data['content']='signin';
		$this->load->view('template', $data);
	}
	
	public function signout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_account');
		$this->session->unset_userdata('account_name');
		$this->session->unset_userdata('is_logged_in');
		redirect('home');
	}
	
	public function check_email_exists()
	{
		if (array_key_exists('email',$_POST)) {
			if ( $this->email_exists($this->input->post('email')) == TRUE ) {
			  echo json_encode(FALSE);
			} else {
			  echo json_encode(TRUE);
			}
		}
	}
	
	private function email_exists($email)
	{
	  $this->load->database();
	  $this->load->model('account_model');
	  $this->db->where('email', $email);
	  $query = $this->db->get('accounts');
	  if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */