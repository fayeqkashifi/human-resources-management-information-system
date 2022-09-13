<?php

class EmployeeModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function retrieveEmployee(){
		$query = $this->db->query("SELECT * FROM employee_table WHERE Employee_id NOT IN (SELECT Employee_id FROM disjoint_table)");
		return $query->result();
	}
	function retrieveEmployeeByDepartmentIdes($id){
		$query = $this->db->query("SELECT * FROM employee_table WHERE Employee_id NOT IN (SELECT Employee_id FROM disjoint_table) AND Department_id=$id");
		return $query->result();
	}
	function retrieveEmployees(){
		$this->db->from('employee_table');
		return $this->db->get()->result();
	}
	function insertEmployeeForm($data){
		$this->db->insert('employee_table',$data);
		return $this->db->insert_id();
	}
	function retrieveEmployeeById($id){
		$this->db->where('Employee_id',$id);
		$this->db->from('employee_table');
		return $this->db->get()->result();
	}
	function removeEmployee($id){
		$this->db->where('Employee_id',$id);
		return $this->db->delete('employee_table');
	}
	
	function updateEmployee($id,$data){
		$this->db->where('Employee_id',$id);
		return $this->db->update('employee_table',$data);
	}
	
}
?>