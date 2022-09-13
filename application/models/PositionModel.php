<?php

class PositionModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function retrievePosition(){
		$this->db->from('Position_table');
		return $this->db->get()->result();
	}
	function insertPositionForm($data){
		return $this->db->insert('Position_table',$data);
	}
	function retrievePositionById($id){
		$this->db->where('Position_id',$id);
		$this->db->from('Position_table');
		return $this->db->get()->result();
	}
	function removePosition($id){
		$this->db->where('Position_id',$id);
		return $this->db->delete('Position_table');
	}
	
	function updatePosition($id,$data){
		$this->db->where('Position_id',$id);
		return $this->db->update('Position_table',$data);
	}
	
}
?>