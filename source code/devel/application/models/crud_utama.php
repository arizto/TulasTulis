<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  

      

class Crud_utama extends CI_Model {  



	private $table_name;   



	public function __construct()  

	{  

		parent::__construct();  

		$this->table_name = 'tb_comment'; //setting nama tabel

	}  



	function insert_comment($data) //untuk manambah record  

	{  

		$this->db->insert($this->table_name, $data);  

		if($this->db->affected_rows() > 0){  

			return true;  

		}else{  

			return false;  

		}  

	}  



	function baca_content($kode) //untuk membaca seluruh record  

	{  

		$id_account=$this->session->userdata('id_account');

		$sql = $this->db->select('tb_content.id_content as id_content,

									tb_content.id_bukuharian as id_bukuharian,

									DATE(tb_content.date) as date,

									TIME(tb_content.date) as time,

									tb_content.title as title, 

									tb_content.content as content,

									tb_bukuharian.cover as cover,

									tb_bukuharian.nama_bukuharian as nama_bukuharian')	

						->from('tb_content')

						->join('tb_bukuharian','tb_content.id_bukuharian=tb_bukuharian.id_bukuharian')

						->where('tb_content.id_bukuharian', $kode)

						->where('tb_bukuharian.id_account',$id_account)

						->order_by('tb_content.date','asc')

						->get();   

		//  $sql = $this->db->get($this->table_name);  

		if($sql->num_rows() > 0){     

			foreach($sql->result() as $row){  

				$data[] = $row;  

			}     

			return $data;  

		}else{  

			return null;  

		}  

	}  



	function baca_category1($account_name) //untuk membaca seluruh record  

	{  

		$sql = $this->db->select('tb_bukuharian.id_bukuharian, tb_bukuharian.nama_bukuharian, tb_bukuharian.id_account, tb_bukuharian.status, tb_bukuharian.cover')

						->from('tb_bukuharian')

						->join('accounts','tb_bukuharian.id_account = accounts.id')

						->where('accounts.account_name', $account_name)

						->get();  

		if($sql->num_rows() > 0){     

			foreach($sql->result() as $row){  

				$data[] = $row;  

			}     

			return $data;  

		}else{  

			return null;  

		}  

	} 
	
	
	function baca_category($start,$per_page) //untuk membaca seluruh record  

	{  
		
		$id_account=$this->session->userdata('id_account');
		
		$sql = $this->db->select('tb_bukuharian.id_bukuharian, tb_bukuharian.nama_bukuharian, tb_bukuharian.id_account, tb_bukuharian.status, tb_bukuharian.cover')

						->from('tb_bukuharian')

						->where('tb_bukuharian.id_account', $id_account)
						
						->order_by('nama_bukuharian')
			 
						->limit($per_page,$start)

						->get();  

		if($sql->num_rows() > 0){     

			foreach($sql->result() as $row){  

				$data[] = $row;  

			}     

			return $data;  

		}else{  

			return null;  

		}  

	} 


	function update_content($kode,$data) //untuk meng-update record  

	{  

		$this->db->where('id_content', $kode);  

		$this->db->update($this->table_name, $data);  

		

		if($this->db->affected_rows() > 0){  

			return true;  

		}else{  

			return false;  

		}  

	}  



	function delete_content($kode) //untuk menghapus record  

	{  

		$this->db->where('id_content', $kode);  

		$this->db->delete($this->table_name); 

		

		if($this->db->affected_rows() > 0){  

			return true;  

		}else{  

			return false;  

		}      

	}  



	function get_content($kode) //untuk mengambil record berdasarkan kodenya  

	{  

		$query = $this->db->select('tb_content.id_content as id_content,

									tb_content.id_bukuharian as id_bukuharian,

									DATE(tb_content.date) as date,

									TIME(tb_content.date) as time,

									tb_content.title as title, 

									tb_content.content as content')	

							->from('tb_content')

							->where('id_content', $kode)

							->get(); 

		//$this->db->where('id_content', $kode);  

		//$query = $this->db->get($this->table_name);  

		if($query->num_rows() > 0){  

			return $query->row();  

		}else{  

			return null;  

		}  

	}



	function get_content_diary($kode) //untuk mengambil record berdasarkan kodenya  

	{  

		$query = $this->db->select('tb_bukuharian.cover as cover, tb_bukuharian.nama_bukuharian as nama_bukuharian')	

							->from('tb_bukuharian')

							//->join('tb_content','tb_content.id_bukuharian=tb_bukuharian.id_bukuharian')

							->where('tb_bukuharian.id_bukuharian', $kode)

							->get(); 

		//$this->db->where('id_content', $kode);  

		//$query = $this->db->get($this->table_name);  

		if($query->num_rows() > 0){  

			return $query->row();  

		}else{  

			return null;  

		}  

	}

}  

	

/* End of file crud_utama.php */

/* Location: ./application/models/crud_utama.php */