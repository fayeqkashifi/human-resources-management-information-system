<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class EmployeeController extends MY_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->model('EmployeeModel');
        $this->load->model('AddressModel');
        $this->load->model('ProvinceModel');
        $this->load->model('DepartmentModel');
        $this->load->model('PositionModel');
        $this->load->model('LockFileModel');
       
	}
	function index(){

        $province=$this->ProvinceModel->retrieveProvince();
        $Position=$this->PositionModel->retrievePosition();
        $Department=$this->DepartmentModel->retrieveDepartment();
        $this->load->view('include/header.inc.php', array('HeaderData'=> $Department));

		$this->load->view('Employee/insertEmployee', array('province' => $province, 'Position'=>$Position,'Department'=>$Department));
		$this->load->view('include/footer.inc.php');
	}
    function EmployeeList(){
        $data = $this->EmployeeModel->retrieveEmployee();
        $this->load->view('include/header.inc.php');
        $this->load->view('Employee/listEmployee', array('data' => $data));
        $this->load->view('include/footer.inc.php');
    }
    function EmployeeListByDepartment(){
        $id=$_GET['id'];
        $Dept_name = $_GET['Dept_name'];
        $data = $this->EmployeeModel->retrieveEmployeeByDepartmentIdes($id);
        $HeaderData = $this->DepartmentModel->retrieveDepartment();
        $this->load->view('include/header.inc.php', array('HeaderData'=> $HeaderData));
        $this->load->view('Employee/listEmployeeByDepartmentIdes', array('data' => $data , 'Dept_name'=>$Dept_name));
        $this->load->view('include/footer.inc.php');
    }
    function EmployeeDelete(){
        $Emp_id = $_GET['Emp_id'];
        $this->EmployeeModel->removeEmployee($Emp_id);
        $this->EmployeeList();
    }
    function EmployeeEdit(){
        $Emp_id = $_GET['Emp_id'];
        $data = $this->EmployeeModel->retrieveEmployeeById($Emp_id);
        $current = $this->AddressModel->retrieveAddressByEmployeeId($Emp_id,'فعلی');
        $present = $this->AddressModel->retrieveAddressByEmployeeId($Emp_id,'اصلی');
        $province=$this->ProvinceModel->retrieveProvince();
        $Position=$this->PositionModel->retrievePosition();
        $Department=$this->DepartmentModel->retrieveDepartment();
        $this->load->view('include/header.inc.php');
        $this->load->view('Employee/editEmployee', array('data' => $data , 'current' => $current , 'present'=> $present,'province' => $province, 'Position'=>$Position,'Department'=>$Department));
        $this->load->view('include/footer.inc.php');
    }
    function EmployeeDetail(){
     $Emp_id = $_GET['Emp_id'];
        $data = $this->EmployeeModel->retrieveEmployeeById($Emp_id);
        $current = $this->AddressModel->retrieveAddressByEmployeeId($Emp_id,'فعلی');
        $present = $this->AddressModel->retrieveAddressByEmployeeId($Emp_id,'اصلی');
        $province=$this->ProvinceModel->retrieveProvince();
        $Position=$this->PositionModel->retrievePosition();
        $Department=$this->DepartmentModel->retrieveDepartment();
        $this->load->view('include/header.inc.php');
        $this->load->view('Employee/detailEmployee', array('data' => $data , 'current' => $current , 'present'=> $present,'province' => $province, 'Position'=>$Position,'Department'=>$Department));
        $this->load->view('include/footer.inc.php');   
    }
    function Employeeprint(){
        $Emp_id = $_GET['Emp_id'];
        $data = $this->EmployeeModel->retrieveEmployeeById($Emp_id);
        $current = $this->AddressModel->retrieveAddressByEmployeeId($Emp_id,'فعلی');
        $present = $this->AddressModel->retrieveAddressByEmployeeId($Emp_id,'اصلی');
        $province=$this->ProvinceModel->retrieveProvince();
        $Position=$this->PositionModel->retrievePosition();
        $Department=$this->DepartmentModel->retrieveDepartment();
        $this->load->view('Employee/printEmployee', array('data' => $data , 'current' => $current , 'present'=> $present,'province' => $province, 'Position'=>$Position,'Department'=>$Department));   
    }
	function insertForm(){

		$error_Emp_photo='';
        $error = false;
        if(isset($_POST['add'])){
             // ------------------------ Image validation ---------------
            if (isset($_FILES["Emp_photo"]) and $_FILES["Emp_photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["Emp_photo"]["type"] != "image/jpeg" && $_FILES["Emp_photo"]["type"] != "image/png") {
                    $error_Emp_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["Emp_photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_Emp_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_Emp_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_Emp_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }

        if(!$error){
                 if(!is_dir("./Uploads/Mujtaba_Ali_Employees/")){
                            mkdir("./Uploads/Mujtaba_Ali_Employees/");
                   }

			
		 	if (!empty($_FILES["Emp_photo"]) and $_FILES["Emp_photo"]["error"] == UPLOAD_ERR_OK){
                if(!(is_dir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_". $_POST['Emp_ID']))){
                    mkdir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']);
                }
                $destination = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID'];
				move_uploaded_file($_FILES['Emp_photo']['tmp_name'], $destination ."/Employee_Image_". $_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['Emp_photo']['type'], 6, 5));
		 		$image = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']."/Employee_Image_".$_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['Emp_photo']['type'], 6, 5);
		 	 }
                         if(empty($_FILES["Emp_photo"]["name"])){
            	$image = "";
        	}
					////// photo resize //////
					$config['image_library'] = 'gd2';
					$config['source_image'] = $image;
					$config['create_thumb'] = false;
					$config['maintain_ratio'] = false;
                    
					
                   
                    $config['height']       = 720;
                    $config['width']         = 1024;
                    $this->load->library('image_lib', $config);
                    
                     
                        
                 
                    $this->image_lib->resize();
                    ///// photo resize //////

            $failed_data=array(
                'Emp_ID' => $_POST['Emp_ID'],
                'Emp_name' => $_POST['Emp_name'],
                'Emp_last_name' => $_POST['Emp_last_name'],
                'Emp_father_name' => $_POST['Emp_father_name'],
                'Emp_gender' => $_POST['Emp_gender'],
                'Emp_status ' => $_POST['Emp_status'],
                'Emp_start_date'=>$_POST['Emp_start_date'],
                'Emp_Tazkira_number'=>$_POST['Emp_Tazkira_number'],
                'Emp_education_university'=>$_POST['Emp_education_university'],
                'Emp_education_field'=>$_POST['Emp_education_field'],
                'Emp_education_degree'=>$_POST['Emp_education_degree'],
                'Emp_telephone'=>$_POST['Emp_telephone'],
                'Emp_guarantor_work_place'=>$_POST['Emp_guarantor_work_place'],
                'Emp_guarantor_job'=>$_POST['Emp_guarantor_job'],
                'Emp_guarantor_name'=>$_POST['Emp_guarantor_name'],
                'Emp_guarantor_telephone'=>$_POST['Emp_guarantor_telephone'],
                'Emp_relatives_work_place'=>$_POST['Emp_relatives_work_place'],
                'Emp_relatives_name'=>$_POST['Emp_relatives_name'],
                'Emp_relatives_telephone'=>$_POST['Emp_relatives_telephone'],
                'Emp_relatives_relation'=>$_POST['Emp_relatives_relation'],
                'Emp_Blood_group'=>$_POST['Emp_Blood_group'],
                'Emp_type'=>$_POST['Emp_type'],
                'Emp_job_title'=>$_POST['Emp_job_title'],
                'Emp_supervisor_name'=>$_POST['Emp_supervisor_name'],
                'Emp_work_place'=>$_POST['Emp_work_place'],
                'Emp_monthly_salary'=>$_POST['Emp_monthly_salary'],
                'Emp_photo'=>$image,
                'Department_id' => $_POST['Department_id'],
                'Position_id' => $_POST['Position_id'],
                'create_at' => date('Y-m-d h-m-s'),
                'update_at' => date('Y-m-d h-m-s'),
            );
            $Employee_id = $this->EmployeeModel->insertEmployeeForm($failed_data);
   	        $failed_data_current =array(
                'Addr_type'=>$_POST['Addr_type'],
                'Addr_Province'=>$_POST['Addr_Province'],
                'Addr_district'=>$_POST['Addr_district'],
                'Addr_detail'=>$_POST['Addr_detail'],
                'Employee_id'=>$Employee_id,
                'create_at' => date('Y-m-d h-m-s'),
                'update_at' => date('Y-m-d h-m-s'),
            );
            $this->AddressModel->insertAddressForm($failed_data_current);
            $failed_data_present =array(
                'Addr_type'=>$_POST['pre_Addr_type'],
                'Addr_Province'=>$_POST['pre_Addr_Province'],
                'Addr_district'=>$_POST['pre_Addr_district'],
                'Addr_detail'=>$_POST['pre_Addr_detail'],
                'Employee_id'=>$Employee_id,
                'create_at' => date('Y-m-d h-m-s'),
                'update_at' => date('Y-m-d h-m-s'),
            );
            $this->AddressModel->insertAddressForm($failed_data_present);
             $lock_data = array(
   	            'name' =>  $_SESSION['name'],
   	            'last_name' => $_SESSION['last_name'],
   	            'father_name' => $_SESSION['father_name'],
   	            'photo'=> $_SESSION['image'],
   	            'signature_photo'=> $_SESSION['signature_image'],
                'lock_type'=>'ثبت',
   	            'lock_action'=>'ثبت',
                'Employee_id'=>$Employee_id,
   	            'create_at' => date('Y-m-d h-m-s'),
   	         );
            $this->LockFileModel->insertLockFileForm($lock_data);
		      redirect('EmployeeController/index');
           }
           else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Employee/insertEmployee', array(
                'error_Emp_photo'=>$error_g_s_photo,
            ));
            $this->load->view('include/footer.inc.php');
		}
	}
    function EmployeeUpdate(){
        $error_Emp_photo='';
        $error = false;
        if(isset($_POST['add'])){
             // ------------------------ Image validation ---------------
            if (isset($_FILES["Emp_photo"]) and $_FILES["Emp_photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["Emp_photo"]["type"] != "image/jpeg" && $_FILES["Emp_photo"]["type"] != "image/png") {
                    $error_Emp_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["Emp_photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_Emp_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_Emp_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_Emp_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }


        if(!$error){
            if(!is_dir("./Uploads/Mujtaba_Ali_Employees/")){
                        mkdir("./Uploads/Mujtaba_Ali_Employees/");
               }    
            if (!empty($_FILES["Emp_photo"]) and $_FILES["Emp_photo"]["error"] == UPLOAD_ERR_OK){
                if(!(is_dir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_". $_POST['Emp_ID']))){
                            mkdir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']);
                }
                $destination = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID'];
                move_uploaded_file($_FILES['Emp_photo']['tmp_name'], $destination ."/Employee_Image_". $_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['Emp_photo']['type'], 6, 5));
                $image = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']."/Employee_Image_".$_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['Emp_photo']['type'], 6, 5);
             }
                         if(empty($_FILES["Emp_photo"]["name"])){
                $image = "";
            }
            ////// photo resize //////
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image;
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['height']       = 720;
            $config['width']         = 1024;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            ///// photo resize //////
            if($image=="") {
                    $failed_data=array(
                        'Emp_ID' => $_POST['Emp_ID'],
                        'Emp_name' => $_POST['Emp_name'],
                        'Emp_last_name' => $_POST['Emp_last_name'],
                        'Emp_father_name' => $_POST['Emp_father_name'],
                        'Emp_gender' => $_POST['Emp_gender'],
                        'Emp_status ' => $_POST['Emp_status'],
                        'Emp_start_date'=>$_POST['Emp_start_date'],
                        'Emp_Tazkira_number'=>$_POST['Emp_Tazkira_number'],
                        'Emp_education_university'=>$_POST['Emp_education_university'],
                        'Emp_education_field'=>$_POST['Emp_education_field'],
                        'Emp_education_degree'=>$_POST['Emp_education_degree'],
                        'Emp_telephone'=>$_POST['Emp_telephone'],
                        'Emp_guarantor_work_place'=>$_POST['Emp_guarantor_work_place'],
                        'Emp_guarantor_job'=>$_POST['Emp_guarantor_job'],
                        'Emp_guarantor_name'=>$_POST['Emp_guarantor_name'],
                        'Emp_guarantor_telephone'=>$_POST['Emp_guarantor_telephone'],
                        'Emp_relatives_work_place'=>$_POST['Emp_relatives_work_place'],
                        'Emp_relatives_name'=>$_POST['Emp_relatives_name'],
                        'Emp_relatives_telephone'=>$_POST['Emp_relatives_telephone'],
                        'Emp_relatives_relation'=>$_POST['Emp_relatives_relation'],
                        'Emp_Blood_group'=>$_POST['Emp_Blood_group'],
                        'Emp_type'=>$_POST['Emp_type'],
                        'Emp_job_title'=>$_POST['Emp_job_title'],
                        'Emp_supervisor_name'=>$_POST['Emp_supervisor_name'],
                        'Emp_work_place'=>$_POST['Emp_work_place'],
                        'Emp_monthly_salary'=>$_POST['Emp_monthly_salary'],
                        'Department_id' => $_POST['Department_id'],
                        'Position_id' => $_POST['Position_id'],
                        'create_at' => date('Y-m-d h-m-s'),
                        'update_at' => date('Y-m-d h-m-s'),
                    );
                    $Employee_id = $_POST['hidden_btn'];
                    $current_id = $_POST['current_id'];
                    $present_id =  $_POST['present_id'];
                    $this->EmployeeModel->updateEmployee($Employee_id,$failed_data);
                    $failed_data_current =array(
                        'Addr_type'=>$_POST['Addr_type'],
                        'Addr_Province'=>$_POST['Addr_Province'],
                        'Addr_district'=>$_POST['Addr_district'],
                        'Addr_detail'=>$_POST['Addr_detail'],
                        'create_at' => date('Y-m-d h-m-s'),
                        'update_at' => date('Y-m-d h-m-s'),
                    );
                    $this->AddressModel->updateAddress($current_id,$failed_data_current);
                    $failed_data_present =array(
                        'Addr_type'=>$_POST['pre_Addr_type'],
                        'Addr_Province'=>$_POST['pre_Addr_Province'],
                        'Addr_district'=>$_POST['pre_Addr_district'],
                        'Addr_detail'=>$_POST['pre_Addr_detail'],
                        'create_at' => date('Y-m-d h-m-s'),
                        'update_at' => date('Y-m-d h-m-s'),
                    );
                    $this->AddressModel->updateAddress($present_id,$failed_data_present);
                    
                     $lock_data = array(
                        'name' =>  $_SESSION['name'],
                        'last_name' => $_SESSION['last_name'],
                        'father_name' => $_SESSION['father_name'],
                        'photo'=> $_SESSION['image'],
                        'signature_photo'=> $_SESSION['signature_image'],
                        'lock_type'=>'ثبت',
                        'lock_action'=>'ویرایش',
                        'Employee_id'=>$Employee_id,
                        'create_at' => date('Y-m-d h-m-s'),
                     );
                    $this->LockFileModel->insertLockFileForm($lock_data);
                    redirect('EmployeeController/EmployeeList');
                  
                
            }else{
                 $failed_data=array(
                        'Emp_ID' => $_POST['Emp_ID'],
                        'Emp_name' => $_POST['Emp_name'],
                        'Emp_last_name' => $_POST['Emp_last_name'],
                        'Emp_father_name' => $_POST['Emp_father_name'],
                        'Emp_gender' => $_POST['Emp_gender'],
                        'Emp_status ' => $_POST['Emp_status'],
                        'Emp_start_date'=>$_POST['Emp_start_date'],
                        'Emp_Tazkira_number'=>$_POST['Emp_Tazkira_number'],
                        'Emp_education_university'=>$_POST['Emp_education_university'],
                        'Emp_education_field'=>$_POST['Emp_education_field'],
                        'Emp_education_degree'=>$_POST['Emp_education_degree'],
                        'Emp_telephone'=>$_POST['Emp_telephone'],
                        'Emp_guarantor_work_place'=>$_POST['Emp_guarantor_work_place'],
                        'Emp_guarantor_job'=>$_POST['Emp_guarantor_job'],
                        'Emp_guarantor_name'=>$_POST['Emp_guarantor_name'],
                        'Emp_guarantor_telephone'=>$_POST['Emp_guarantor_telephone'],
                        'Emp_relatives_work_place'=>$_POST['Emp_relatives_work_place'],
                        'Emp_relatives_name'=>$_POST['Emp_relatives_name'],
                        'Emp_relatives_telephone'=>$_POST['Emp_relatives_telephone'],
                        'Emp_relatives_relation'=>$_POST['Emp_relatives_relation'],
                        'Emp_Blood_group'=>$_POST['Emp_Blood_group'],
                        'Emp_type'=>$_POST['Emp_type'],
                        'Emp_photo'=>$image,
                        'Emp_job_title'=>$_POST['Emp_job_title'],
                        'Emp_supervisor_name'=>$_POST['Emp_supervisor_name'],
                        'Emp_work_place'=>$_POST['Emp_work_place'],
                        'Emp_monthly_salary'=>$_POST['Emp_monthly_salary'],
                        'Department_id' => $_POST['Department_id'],
                        'Position_id' => $_POST['Position_id'],
                        'create_at' => date('Y-m-d h-m-s'),
                        'update_at' => date('Y-m-d h-m-s'),
                    );
                    $Employee_id = $_POST['hidden_btn'];
                    $current_id = $_POST['current_id'];
                    $present_id =  $_POST['present_id'];
                    $this->EmployeeModel->updateEmployee($Employee_id,$failed_data);
                    $failed_data_current =array(
                        'Addr_type'=>$_POST['Addr_type'],
                        'Addr_Province'=>$_POST['Addr_Province'],
                        'Addr_district'=>$_POST['Addr_district'],
                        'Addr_detail'=>$_POST['Addr_detail'],
                        'create_at' => date('Y-m-d h-m-s'),
                        'update_at' => date('Y-m-d h-m-s'),
                    );
                    $this->AddressModel->updateAddress($current_id,$failed_data_current);
                    $failed_data_present =array(
                        'Addr_type'=>$_POST['pre_Addr_type'],
                        'Addr_Province'=>$_POST['pre_Addr_Province'],
                        'Addr_district'=>$_POST['pre_Addr_district'],
                        'Addr_detail'=>$_POST['pre_Addr_detail'],
                        'create_at' => date('Y-m-d h-m-s'),
                        'update_at' => date('Y-m-d h-m-s'),
                    );
                     $this->AddressModel->updateAddress($present_id,$failed_data_present);
                         ///file delete ///
                            $file =  explode("'", $_POST['previose_photo']);
                            unlink($file[0]);
                            ///file delete ///
                    $lock_data = array(
                        'name' =>  $_SESSION['name'],
                        'last_name' => $_SESSION['last_name'],
                        'father_name' => $_SESSION['father_name'],
                        'photo'=> $_SESSION['image'],
                        'signature_photo'=> $_SESSION['signature_image'],
                        'lock_type'=>'ثبت',
                        'lock_action'=>'ویرایش',
                        'Employee_id'=>$Employee_id,
                        'create_at' => date('Y-m-d h-m-s'),
                     );
                    $this->LockFileModel->insertLockFileForm($lock_data);
                    redirect('EmployeeController/EmployeeList');
                         }
            }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Employee/editEmployee', array(
                'error_Emp_photo'=>$error_g_s_photo,
            ));
            $this->load->view('include/footer.inc.php');
            }
        }
        function getRondamEmployeeID(){
            $data = $this->EmployeeModel->retrieveEmployees();
            echo json_encode($data);
        }

}

?>
