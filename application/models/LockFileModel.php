<?php

class LockFileModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function retrieveLockFile($lock_type){
		$query = $this->db->query("SELECT * from  employee_table INNER JOIN  lock_file_table WHERE 	lock_type='$lock_type' AND  lock_file_table.Employee_id = employee_table.Employee_id;");
		return $query->result();
	}
	function retrieveLockFiles(){
		$this->db->from('lock_file_table');
		return $this->db->get()->result();
	}
	function insertLockFileForm($data){
		$this->db->insert('lock_file_table',$data);
		return $this->db->insert_id();
	}
	function retrieveLockFileById($id){
		$this->db->where('l_f_id',$id);
		$this->db->from('lock_file_table');
		return $this->db->get()->result();
	}
	function removeLockFile($id){
		$this->db->where('l_f_id',$id);
		return $this->db->delete('lock_file_table');
	}
	
	function updateLockFile($id,$data){
		$this->db->where('l_f_id',$id);
		return $this->db->update('lock_file_table',$data);
	}
	
}
?>