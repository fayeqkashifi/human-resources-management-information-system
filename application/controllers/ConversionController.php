<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class ConversionController extends MY_Controller
{
	function __construct(){
		parent::__construct();
    $this->load->model('ConversionModel');
    $this->load->model('EmployeeModel');
    $this->load->model('LockFileModel');
	}
	function insertForm(){
        $error = false;
		 if(!$error){
            $failed_data=array(
                'con_date' => $_POST['con_date'],
                'previous_job_title' => $_POST['previous_job_title'],
                'job_title' => $_POST['job_title'],
                'previous_supervisor_name' => $_POST['previous_supervisor_name'],
                'supervisor_name' => $_POST['supervisor_name'],
                'previous_site ' => $_POST['previous_site'],
                'current_site ' => $_POST['current_site'],
                'previous_emp_type' => $_POST['previous_emp_type'],
                'current_emp_type' => $_POST['current_emp_type'],
                'Department_id' => $_POST['Department_id'],
                'Position_id' => $_POST['Position_id'],
                'previous_Department_id' => $_POST['previous_Department_id'],
                'previous_Position_id' => $_POST['previous_Position_id'],
                'Employee_id'=>$_POST['Employee_id'],
                'create_at' => date('Y-m-d h-m-s'),
                'update_at' => date('Y-m-d h-m-s'),
            );
            $this->ConversionModel->insertConversionForm($failed_data);
            $EmployeeUpdate = array(
                'Emp_type' => $_POST['current_emp_type'],
                'Emp_supervisor_name' => $_POST['supervisor_name'],
                'Emp_job_title' => $_POST['job_title'],
                'Emp_work_place'=>$_POST['current_site'],
                'Department_id' => $_POST['Department_id'],
                'Position_id' => $_POST['Position_id'],
            );
            $Employee_id = $_POST['Employee_id'];
            $this->EmployeeModel->updateEmployee($Employee_id,$EmployeeUpdate);
           $lock_data = array(
                'name' =>  $_SESSION['name'],
                'last_name' => $_SESSION['last_name'],
                'father_name' => $_SESSION['father_name'],
                'photo'=> $_SESSION['image'],
                'signature_photo'=> $_SESSION['signature_image'],
                'lock_type'=>'تبدیلی',
                'lock_action'=>'ثبت',
                'Employee_id'=>$Employee_id,
                'create_at' => date('Y-m-d'),
             );
            $this->LockFileModel->insertLockFileForm($lock_data);
			redirect('EmployeeController/EmployeeDetail?Emp_id='.$Employee_id);
           }
           else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Employee/index', array(
                'error_dis_scan'=>$error_dis_scan,
            ));
            $this->load->view('include/footer.inc.php');
		}
	}
}
?>