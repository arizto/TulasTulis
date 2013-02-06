<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  

      

class Category extends CI_Controller   

{  

	var $upload_path;

	var $upload_path_url;



	public function __construct()  

	{  

		parent::__construct();  

		$this->load->model('crud_category');  

	}  



	function index() //untuk menampilkan form awal yaitu form tambah data category 

	{  

		$data['category'] = '';  

		$data['category_row'] = $this->crud_category->baca_category();  

		$this->load->view('header2'); 

		$this->load->view('category_view', $data); 

		$this->load->view('footer2');

	}  



	function edit() //untuk menampilkan form edit data category 

	{  

		$this->load->helper('form');

		$id_bukuharian = $this->security->xss_clean($this->uri->segment(3));  

		$result = $this->crud_category->get_category($id_bukuharian); 

		

		if ($result == null) redirect('category');  

		else $data['datacat'] = $result;  

		

		$data['datacat_row'] = $this->crud_category->baca_category(); 



		$this->load->view('header2'); 

		$this->load->view('category_insert_view', $data);  

		$this->load->view('footer2'); 

	}  



	function delete() //untuk menghapus data category 

	{     

		$this->load->helper('form');

		$id_bukuharian = $this->security->xss_clean($this->uri->segment(3));  

		$result = $this->crud_category->get_category($id_bukuharian);

		

		if ($result == null) redirect('category');  

		else $this->crud_category->delete_category($id_bukuharian);  

		

		redirect('category');  

	}  



	function insert_view() //untuk menampilkan form awal yaitu form tambah data category

	{  

		$this->load->helper('form');

		$this->load->view('header2'); 

		$this->load->view('category_insert_view');  

		$this->load->view('footer2'); 

	}  



	function insert() //untuk menambah data category 

	{  

		//BuAt GeNeraTE kode uNiK Cekali buat id BuKu Harian

		$this->load->helper('string');

		$id_random=random_string('alnum',5);



		//upload ma RezIze

		if ($this->input->post('category')) {

			$this->upload_path = 'uploads/';



			$config=array(

						'allowed_types' => 'jpg|jpeg|gif|png',

						'upload_path' => $this->upload_path,

						'max_size' => 2000

					);



			$this->load->library('upload', $config);

			$this->upload->do_upload('cover');

			$cover_data = $this->upload->data();



			$config=array(

						'source_image' => $cover_data['full_path'],

						'new_image' => $this->upload_path,

						'maintain_ration' => true,

						'width' => 400,

						'height' => 600

					);



			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

		}



		// cukup sudah sampai di sini si UpReZize na Gan kkkkkkkkkkkkkkkkkkkk



		$data=array(  

					'id_bukuharian' => $id_random,  

					'nama_bukuharian' => $this->input->post('nama_bukuharian'),  

					'id_account' => $this->session->userdata('id_account'),

					'status'		  => $this->input->post('status'),

					'cover'=> $cover_data['file_name']

				); 



		$this->crud_category->insert_category($data);  



		redirect('category');  

	}  



	function update() //untuk meng-update data category 

	{  

		$this->load->helper('form');

		$id_bukuharian = $this->input->post('id_bukuharian');  



		if($_FILES['cover']['name'] == ""){ //cek si Ucer upload file apa g ?

			$data = array(  

						'nama_bukuharian' => $this->input->post('nama_bukuharian'),  

						'status'		  => $this->input->post('status'),

						'cover'		  => $this->input->post('cover_asli')

					);  

		}

		else{

			//upload ma RezIze

			if ($this->input->post('category')) {

				$this->upload_path = 'uploads/';



				$config = array(

								'allowed_types' => 'jpg|jpeg|gif|png',

								'upload_path' => $this->upload_path,

								'max_size' => 2000

							);



				$this->load->library('upload', $config);

				$this->upload->do_upload('cover');

				$cover_data = $this->upload->data();



				$config = array(

								'source_image' => $cover_data['full_path'],

								'new_image' => $this->upload_path,

								'maintain_ration' => true,

								'width' => 400,

								'height' => 600

							);



				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				

				$data = array(  

								'nama_bukuharian' => $this->input->post('nama_bukuharian'),  

								'status'		  => $this->input->post('status'),

								'cover'		  => $cover_data['file_name']



							);  

			}

		}

		$this->crud_category->update_category($id_bukuharian,$data);  

		redirect('category');  

	}    

}  



/* End of file category.php */

/* Location: ./application/controllers/category.php */