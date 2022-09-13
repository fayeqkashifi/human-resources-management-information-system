<?php

class ScanFilesModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function retrieveScanFiles(){
		$this->db->from('scanfiles_table');
		return $this->db->get()->result();
	}
	function insertScanFilesForm($data){
		$this->db->insert('scanfiles_table',$data);
		return $this->db->insert_id();
	}
	function retrieveScanFilesById($id){
		$this->db->where('ScanFile_id',$id);
		$this->db->from('scanfiles_table');
		return $this->db->get()->result();
	}
	function removeScanFiles($id){
		$this->db->where('ScanFile_id',$id);
		return $this->db->delete('scanfiles_table');
	}
	function updateScanFiles($id,$data){
		$this->db->where('ScanFile_id',$id);
		return $this->db->update('scanfiles_table',$data);
	}
	
}
?>