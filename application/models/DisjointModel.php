<?php

class DisjointModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function retrieveDisjoint(){
		$query = $this->db->query("SELECT * from disjoint_table INNER JOIN employee_table WHERE disjoint_table.Employee_id = employee_table.Employee_id;");
		return $query->result();
	}
	function retrieveDisjoints(){
		$this->db->from('disjoint_table');
		return $this->db->get()->result();
	}
	function insertDisjointForm($data){
		$this->db->insert('disjoint_table',$data);
		return $this->db->insert_id();
	}
	function retrieveDisjointById($id){
		$this->db->where('dis_id',$id);
		$this->db->from('disjoint_table');
		return $this->db->get()->result();
	}
	function removeDisjoint($id){
		$this->db->where('dis_id',$id);
		return $this->db->delete('disjoint_table');
	}
	
	function updateDisjoint($id,$data){
		$this->db->where('Employee_id',$id);
		return $this->db->update('disjoint_table',$data);
	}
	
}
?>