<?php

class ConversionModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function retrieveConversions(){
		$this->db->from('conversion_table');
		return $this->db->get()->result();
	}
	function insertConversionForm($data){
		$this->db->insert('conversion_table',$data);
		return $this->db->insert_id();
	}
	function retrieveConversionById($id){
		$this->db->where('Conversion_id',$id);
		$this->db->from('conversion_table');
		return $this->db->get()->result();
	}
	function removeConversion($id){
		$this->db->where('Conversion_id',$id);
		return $this->db->delete('conversion_table');
	}
	function updateConversion($id,$data){
		$this->db->where('Conversion_id',$id);
		return $this->db->update('conversion_table',$data);
	}
	
}
?>