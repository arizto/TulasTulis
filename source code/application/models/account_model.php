<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model{

	public function validate()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		
		$get=$this->db->get('accounts');
		
		if($get->num_rows==1)
		{
			return true;
		}
	}
	
	public function check_email_exist($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('accounts');
		if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }		
	}
	
	public function add_temp_account($key)
	{
		$this->load->database();
		$data=array(
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'key'=>$key,
			'account_name'=>$this->input->post('accountname')
		);
		$query=$this->db->insert('temp_accounts', $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	public function is_valid_key($key)
	{
		$this->load->database();
		$this->db->where('key', $key);
		$query=$this->db->get('temp_accounts');
		
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}
	
	public function add_account($key)
	{
		$this->load->database();
		$this->db->where('key', $key);
		$temp_acc=$this->db->get('temp_accounts');
		
		if($temp_acc){
			$row=$temp_acc->row();
			
			$data=array(
				'email'=>$row->email,
				'password'=>$row->password,
				'account_name'=>$row->account_name
			);
			
			$did_add_user=$this->db->insert('accounts', $data);
		}
		
		if($did_add_user){
			$this->db->where('key', $key);
			$this->db->delete('temp_accounts');
			return $data['email'];
		}else{
			return false;
		}
	}
	
	public function getinfoaccount(){
		$this->db->where('email', $this->input->post('email'));
		$this->db->select('id,account_name');
		$get=$this->db->get('accounts');
		if($get->num_rows==1)
		{
	       return $get->row();
		   //$idaccount=$row->id;
		   //$account_name = $row->account_name;
		}
		//return $idaccount,$account_name;
	}
	
	public function getaccountname(){
		$this->db->where('id', $this->session->userdata('id_account'));
		$this->db->select('account_name');
		$get=$this->db->get('accounts');
		if($get->num_rows==1)
		{
	       $row=$get->row();
		   $accountname=$row->account_name;
		}
		return $accountname;
	}
}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */