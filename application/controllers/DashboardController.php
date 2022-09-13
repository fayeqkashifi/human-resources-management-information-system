<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class DashboardController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('DashboardModel');
		$this->load->model('DepartmentModel');
		
	}
	function index(){
		
		
		// $CountProduct = $this->DashboardModel->retrieveCountProducts();
		$CountUsers = $this->DashboardModel->retrieveCountUsers();
		// $CountGenerators = $this->DashboardModel->retrieveCountGenerators();
		// $CountPhotos = $this->DashboardModel->retrieveCountPhotos();
		$HeaderData = $this->DepartmentModel->retrieveDepartment();

		$this->load->view('include/header.inc.php', array('HeaderData'=> $HeaderData));
		$this->load->view('DashboardView',array('data'=>'',
				'CountProduct'=>'',
				'CountUsers'=>$CountUsers,
				'CountGenerators'=>'',
				'CountPhotos'=>''));
		$this->load->view('include/footer.inc.php');
	}

}

?>
