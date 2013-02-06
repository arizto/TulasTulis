<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Utama extends CI_Controller {



	public function __construct()  

    {  

		parent::__construct();  
		$this->load->library('session');
		//$this->is_logged_in();

		$this->load->model('crud_utama');  

	}  



	function index() //untuk menampilkan form awal yaitu form tambah data content 

	{  

		$account_name=$this->uri->segment(1);
		
		$is_logged_in=$this->session->userdata('is_logged_in');
		
		if($is_logged_in != true){
		
		$data['id_account'] = '';
		
		$data['account_name'] = $account_name;
		
		$data['cat_row'] = $this->crud_utama->baca_category1_tamu($account_name);
		
		}
		else{
		
		$id_account= $this->session->userdata('id_account');
		
		$data['id_account'] = $id_account;
		
		$data['account_name'] = $account_name;
		
		$data['cat_row'] = $this->crud_utama->baca_category1($account_name);   //buat pagination
		
		}

		$this->load->view('headerutama'); 

		$this->load->view('utama_view', $data); 

		$this->load->view('footer2');

	}  
	
	function list_buku()	 
	{
		
		
		$page = $this->input->post('page');
		
		$cur_page = $page;
		
		$page -= 1;
		
		$per_page = 4; // Per page records
		
		$start = $page * $per_page;
		
		$data['utama'] = '';  
		
		$data['utama_row'] = $this->crud_utama->baca_category($start,$per_page);  
		
		$this->load->view('list_buku_view', $data); 
	}
	
	function list_buku_buat_tamu()	 
	{
		
		//$account_name=$this->uri->segment(1);
		
		$account_name = $this->input->post('account_name');
		
		$page = $this->input->post('page');
		
		$cur_page = $page;
		
		$page -= 1;
		
		$per_page = 4; // Per page records
		
		$start = $page * $per_page;
		
		//$data['utama'] = '';  
		
		$data['nama'] = $account_name;
		$data['page'] = $page;
		
		$data['utama_row'] = $this->crud_utama->baca_category_tamu($start,$per_page,$account_name);  
		
		$this->load->view('list_buku_view', $data); 
	}

	 

	function lihat_buku() //untuk menampilkan form awal yaitu form tambah data content 

	{ 

		//$tes = $this->security->xss_clean($this->uri->segment(3)); 

		$id_bukuharian = $this->input->post('id_bukuharian');

		//$data['tes']=$tes;



		$result = $this->crud_utama->get_content_diary($id_bukuharian);  

		//if ($result == null) redirect('utama_view');  

		//else 

		$data['buku'] = $result;

		$data['buku_row'] = $this->crud_utama->baca_content($id_bukuharian); 

		//$this->load->view('headerutama'); 

		//$this->load->view('utama_view', $data); 

		//$this->load->view('footer');

		$this->load->view('buku_view',$data);

	} 



	function edit() //untuk menampilkan form edit data content

	{  

		$id_content = $this->security->xss_clean($this->uri->segment(3));  

		$result = $this->crud_utama->get_content($id_content);  

		

		if ($result == null) redirect('dashboard');  

		else $data['datacontent'] = $result;  

		

		$data['datacontent_row'] = $this->crud_utama->baca_content(); 



		//BUaT Baca bukuharian doi apa aja GaN

		$data['category'] = '';  

		$data['category_row'] = $this->crud_utama->baca_category(); 



		$this->load->view('header2'); 

		$this->load->view('content_insert_view', $data);  

		$this->load->view('footer2'); 

	}  



	function delete() //untuk menghapus data content  

	{     

		$id_content = $this->security->xss_clean($this->uri->segment(3));  

		$result = $this->crud_utama->get_content($id_content);  

		

		if ($result == null) redirect('dashboard');  

		else $this->crud_utama->delete_content($id_content);  

		

		redirect('dashboard');  

	}  



	function insert_view() //untuk menampilkan form awal yaitu form tambah data content

	{  

		$data['category'] = '';  

		$data['category_row'] = $this->crud_utama->baca_category();  

		$this->load->view('header2'); 

		$this->load->view('content_insert_view',$data);  

		$this->load->view('footer2'); 

	}  



	function insert_comment() //untuk menambah data content 

	{  

		$this->load->helper('string');

		$id_random=random_string('alnum',5);



		$data = array(  

					'id_comment' => $id_random,  

					'id_content' => $this->input->post('id_content'),  

					'comment' => $this->input->post('comment')

				); 



		$this->crud_utama->insert_comment($data);  

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



		$this->crud_utama->update_content($id_content,$data);  

		redirect('dashboard');  

	} 
	
	/*

	public function is_logged_in()
	{
		$is_logged_in=$this->session->userdata('is_logged_in');
		if($is_logged_in != true)
		{
			redirect('home');
		}
	}

	*/	

}



/* End of file utama.php */

/* Location: ./application/controllers/utama.php */

