<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
      
class Crud_category extends CI_Model {  
	private $table_name;   
	var $upload_path;

	public function __construct()  
	{  
		parent::__construct();  
		$this->table_name = 'tb_bukuharian'; //setting nama tabel

		$this->upload_path = realpath(APPPATH . '../uploads');
		$this->upload_path_url = base_url().'uploads/';
	}  

	function insert_category($data) //untuk manambah record  
	{  
		$this->db->insert($this->table_name, $data);  
		
		if($this->db->affected_rows() > 0){  
			return true;  
		}else{  
			return false;  
		}  
	}  

	function baca_category() //untuk membaca seluruh record  
	{  
		$id_account=$this->session->userdata('id_account');
		$this->db->where('id_account', $id_account);
		$sql = $this->db->get($this->table_name);
		
		if($sql->num_rows() > 0){     
			foreach($sql->result() as $row){  
				$data[] = $row;  
			}     
			return $data;  
		}else{  
			return null;  
		}  
	}  

	function update_category($kode,$data) //untuk meng-update record  
	{  
		$this->db->where('id_bukuharian', $kode);  
		$this->db->update($this->table_name, $data);  
		
		if($this->db->affected_rows() > 0){  
			return true;  
		}else{  
			return false;  
		}  
	}  

	function delete_category($kode) //untuk menghapus record  
	{  
		$this->db->where('id_bukuharian', $kode);  
		$this->db->delete($this->table_name); 
		
		if($this->db->affected_rows() > 0){  
			return true;  
		}else{  
			return false;  
		}      
	}  

	function get_category($kode) //untuk mengambil record berdasarkan kodenya  
	{  
		$this->db->where('id_bukuharian', $kode);  
		$query = $this->db->get($this->table_name);  
		
		if($query->num_rows() > 0){  
			return $query->row();  
		}else{  
			return null;  
		}  
	}
}  

/* End of file crud_category.php */
/* Location: ./application/models/crud_category.php */