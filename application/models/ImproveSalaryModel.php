<?php

class ImproveSalaryModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function retrieveImproveSalary(){
		$this->db->from('salary_table');
		return $this->db->get()->result();
	}
	function insertImproveSalaryForm($data){
		$this->db->insert('salary_table',$data);
		return $this->db->insert_id();
	}
	function retrieveImproveSalaryById($id){
		$this->db->where('Salary_id',$id);
		$this->db->from('salary_table');
		return $this->db->get()->result();
	}
	function removeImproveSalary($id){
		$this->db->where('Salary_id',$id);
		return $this->db->delete('salary_table');
	}
	function updateImproveSalary($id,$data){
		$this->db->where('Salary_id',$id);
		return $this->db->update('salary_table',$data);
	}
	
}
?>