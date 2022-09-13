<?php

class DepartmentModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function retrieveDepartment(){
		$this->db->from('Department_table');
		return $this->db->get()->result();
	}
	function insertDepartmentForm($data){
		return $this->db->insert('Department_table',$data);
	}
	function retrieveDepartmentById($id){
		$this->db->where('Department_id',$id);
		$this->db->from('Department_table');
		return $this->db->get()->result();
	}
	function removeDepartment($id){
		$this->db->where('Department_id',$id);
		return $this->db->delete('Department_table');
	}
	
	function updateDepartment($id,$data){
		$this->db->where('Department_id',$id);
		return $this->db->update('Department_table',$data);
	}
	
}
?>