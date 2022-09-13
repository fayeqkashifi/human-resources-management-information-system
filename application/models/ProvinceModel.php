<?php

class ProvinceModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function retrieveProvince(){
		$this->db->from('province_table');
		return $this->db->get()->result();
	}
	function insertProvinceForm($data){
		return $this->db->insert('province_table',$data);
	}
	function retrieveProvinceById($id){
		$this->db->where('province_id',$id);
		$this->db->from('province_table');
		return $this->db->get()->result();
	}
	function removeProvince($id){
		$this->db->where('province_id',$id);
		return $this->db->delete('province_table');
	}
	
	function updateProvince($id,$data){
		$this->db->where('province_id',$id);
		return $this->db->update('province_table',$data);
	}
	
}
?>