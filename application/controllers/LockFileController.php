<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class LockFileController extends MY_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->model('ConversionModel');
        $this->load->model('EmployeeModel');
        $this->load->model('LockFileModel');
        $this->load->model('DepartmentModel');
	}
	function index(){
        $LockFile = $_GET['Action']; 
        $data = $this->LockFileModel->retrieveLockFile($LockFile);
        $HeaderData = $this->DepartmentModel->retrieveDepartment();
        $this->load->view('include/header.inc.php', array('HeaderData'=> $HeaderData));
        $this->load->view('LockFile/listLockFile', array('data' => $data));
        $this->load->view('include/footer.inc.php');
    }
}
?>