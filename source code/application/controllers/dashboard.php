<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
      parent::__construct();
		$this->load->library('session');
		$this->is_logged_in();
		$this->load->model('crud_content');  
		$this->load->model('account_model');  
    }

	public function index()
	{
      $data['content'] = '';  
      $data['content_row'] = $this->crud_content->baca_content();  
	  $this->load->view('header2'); 
	  $this->load->view('harian_awal', $data); 
	  $this->load->view('footer2');
	}

	function edit() //untuk menampilkan form edit data content
	{  
		$this->load->helper('form');
		$id_content = $this->security->xss_clean($this->uri->segment(3));  
		$result = $this->crud_content->get_content($id_content);  
		
		if ($result == null) redirect('dashboard');  
		else $data['datacontent'] = $result;  
		
		$data['datacontent_row'] = $this->crud_content->baca_content(); 

		//BUaT Baca bukuharian doi apa aja GaN
		$data['category'] = '';  
		$data['category_row'] = $this->crud_content->baca_category(); 

		$this->load->view('header2'); 
		$this->load->view('content_insert_view', $data);  
		$this->load->view('footer2'); 
	}  

	function delete() //untuk menghapus data content  
	{     
		$id_content = $this->security->xss_clean($this->uri->segment(3));  
		$result = $this->crud_content->get_content($id_content); 
		
		if ($result == null) redirect('dashboard');  
		else $this->crud_content->delete_content($id_content);  
		
		redirect('dashboard');  
	}  
	
	function insert_view() //untuk menampilkan form awal yaitu form tambah data content
	{  
		$this->load->helper('form');
		$data['category'] = '';  
		$data['category_row'] = $this->crud_content->baca_category();  
		$this->load->view('header2'); 
		$this->load->view('content_insert_view',$data);  
		$this->load->view('footer2'); 
	}  

	function insert() //untuk menambah data content 
	{  
		$this->load->helper('string');
		$id_random=random_string('alnum',5);

		$data = array(  
					'id_content' => $id_random,  
					'id_bukuharian' => $this->input->post('id_bukuharian'),  
					'date' => $this->input->post('date').' '.$this->input->post('time'),  
					'title' => $this->input->post('title'), 
					'content' => $this->input->post('content')
				); 

		$this->crud_content->insert_content($data);  
		redirect('dashboard');  
	}  

	function update() //untuk meng-update data content 
	{  
		$id_content = $this->input->post('id_content');  
		$data = array(  
					'id_bukuharian' => $this->input->post('id_bukuharian'),  
					'date' => $this->input->post('date').' '.$this->input->post('time'),
					'title' => $this->input->post('title'), 
					'content' => $this->input->post('content')

				); 

		$this->crud_content->update_content($id_content,$data);  
		redirect('dashboard');  
	}  
	
	public function is_logged_in()
	{
		$is_logged_in=$this->session->userdata('is_logged_in');
		if($is_logged_in != true)
		{
			redirect('home');
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */