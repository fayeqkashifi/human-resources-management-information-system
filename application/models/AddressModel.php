<?php

class AddressModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function retrieveAddress(){
		$this->db->from('address_table');
		return $this->db->get()->result();
	}
	function insertAddressForm($data){
		return $this->db->insert('address_table',$data);
	}
	function retrieveAddressById($id){
		$this->db->where('Address_id',$id);
		$this->db->from('address_table');
		return $this->db->get()->result();
	}
	function retrieveAddressByEmployeeId($id,$type){
		$this->db->where('Employee_id',$id);
		$this->db->where('Addr_type',$type);
		$this->db->from('address_table');
		return $this->db->get()->result();
	}
	function removeAddress($id){
		$this->db->where('Address_id',$id);
		return $this->db->delete('address_table');
	}
	
	function updateAddress($id,$data){
		$this->db->where('Address_id',$id);
		return $this->db->update('address_table',$data);
	}
	
}
?>