<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class ImproveSalaryController extends MY_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->model('ImproveSalaryModel');
        $this->load->model('EmployeeModel');
        $this->load->model('LockFileModel');
	}
	function insertForm(){
        $error = false;
		 if(!$error){
        $failed_data=array(
            'salary_date' => $_POST['salary_date'],
            'Previous_salary' => $_POST['Previous_salary'],
            'Improve_salary' => $_POST['Improve_salary'],
            'Tatal_salary'=> ($_POST['Improve_salary']+$_POST['Previous_salary']),
            'Employee_id'=>$_POST['Employee_id'],
            'create_at' => date('Y-m-d h-m-s'),
            'update_at' => date('Y-m-d h-m-s'),
        );
        $this->ImproveSalaryModel->insertImproveSalaryForm($failed_data);
        $EmployeeUpdate = array(
            'Emp_monthly_salary' => ($_POST['Improve_salary'] + $_POST['Previous_salary']),
        );
        $Employee_id = $_POST['Employee_id'];
        $this->EmployeeModel->updateEmployee($Employee_id,$EmployeeUpdate);
        $lock_data = array(
            'name' =>  $_SESSION['name'],
            'last_name' => $_SESSION['last_name'],
            'father_name' => $_SESSION['father_name'],
            'photo'=> $_SESSION['image'],
            'signature_photo'=> $_SESSION['signature_image'],
            'lock_type'=>'اضافه معاش',
            'lock_action'=>'ثبت',
            'Employee_id'=>$Employee_id,
            'create_at' => date('Y-m-d h-m-s'),
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