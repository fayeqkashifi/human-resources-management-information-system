<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class DisjointController extends MY_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->model('DisjointModel');
        $this->load->model('LockFileModel');
	}
	function index(){
        $this->load->model('DepartmentModel');
        $HeaderData = $this->DepartmentModel->retrieveDepartment();
        $this->load->view('include/header.inc.php', array('HeaderData'=> $HeaderData));
		$data = $this->DisjointModel->retrieveDisjoint();
        $this->load->view('Disjoint/listDisjoint', array('data' => $data));
        $this->load->view('include/footer.inc.php');
	}
	function insertForm(){
		$error_photo='';
        $error = false;
        if(isset($_POST['add'])){
        	// ------------------------ Image validation ---------------
            if (isset($_FILES["dis_scan"]) and $_FILES["dis_scan"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["dis_scan"]["type"] != "image/jpeg" && $_FILES["dis_scan"]["type"] != "image/png") {
                    $error_dis_scan = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["dis_scan"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_dis_scan = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_dis_scan = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_dis_scan = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }
		 if(!$error){
            if(!is_dir("./Uploads/Mujtaba_Ali_Employees/")){
                mkdir("./Uploads/Mujtaba_Ali_Employees/");
            }
		 	if (!empty($_FILES["dis_scan"]) and $_FILES["dis_scan"]["error"] == UPLOAD_ERR_OK){
                if(!(is_dir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_". $_POST['Emp_ID']))){
                    mkdir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']);
                }
                $destination = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID'];
				move_uploaded_file($_FILES['dis_scan']['tmp_name'], $destination ."/Disjoint_Image_". $_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['dis_scan']['type'], 6, 5));
		 		$image = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']."/Disjoint_Image_".$_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['dis_scan']['type'], 6, 5);
		 	 	}
                if(empty($_FILES["dis_scan"]["name"])){
            	$image = "";
        	}
			////// photo resize //////
			$config['image_library'] = 'gd2';
			$config['source_image'] = $image;
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
            $config['rotation_angle'] = '90';
			
			$data = getimagesize($image);
			$width= $data[0];
			$height= $data[1];
			$config['height']       = 720;
			$config['width']         = 1024;
			$this->load->library('image_lib', $config);
			if($height > $width){
				$this->image_lib->rotate();
				
			}
			$this->image_lib->resize();
			///// photo resize //////

            $failed_data=array(
                'dis_date' => $_POST['dis_date'],
                'dis_reason' => $_POST['dis_reason'],
                'dis_scan ' => $image,
                'Employee_id'=>$_POST['Employee_id'],
                'create_at' => date('Y-m-d h-m-s'),
                'update_at' => date('Y-m-d h-m-s'),
            );
            $Employee_id = $_POST['Employee_id'];
            $this->DisjointModel->insertDisjointForm($failed_data);
            $lock_data = array(
                'name' =>  $_SESSION['name'],
                'last_name' => $_SESSION['last_name'],
                'father_name' => $_SESSION['father_name'],
                'photo'=> $_SESSION['image'],
                'signature_photo'=> $_SESSION['signature_image'],
                'lock_type'=>'منفکی',
                'lock_action'=>'ثبت',
                'Employee_id'=>$Employee_id,
                'create_at' => date('Y-m-d h-m-s'),
             );
            $this->LockFileModel->insertLockFileForm($lock_data);
			redirect('DisjointController/index');
           }
           else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Employee/index', array(
                'error_dis_scan'=>$error_dis_scan,
            ));
            $this->load->view('include/footer.inc.php');
		}
	}
	function EmployeeUpdate(){
		$error_photo='';
        $error = false;
        if(isset($_POST['add'])){
        	// ------------------------ Image validation ---------------
            if (isset($_FILES["dis_scan"]) and $_FILES["dis_scan"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["dis_scan"]["type"] != "image/jpeg" && $_FILES["dis_scan"]["type"] != "image/png") {
                    $error_dis_scan = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["dis_scan"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_dis_scan = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_dis_scan = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_dis_scan = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }
		 if(!$error){
            if(!is_dir("./Uploads/Mujtaba_Ali_Employees/")){
                mkdir("./Uploads/Mujtaba_Ali_Employees/");
            }
		 	if (!empty($_FILES["dis_scan"]) and $_FILES["dis_scan"]["error"] == UPLOAD_ERR_OK){
                if(!(is_dir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_". $_POST['Emp_ID']))){
                    mkdir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']);
                }
                $destination = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID'];
				move_uploaded_file($_FILES['dis_scan']['tmp_name'], $destination ."/Disjoint_Image_". $_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['dis_scan']['type'], 6, 5));
		 		$image = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']."/Disjoint_Image_".$_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['dis_scan']['type'], 6, 5);
		 	 	}
                if(empty($_FILES["dis_scan"]["name"])){
            	$image = "";
        	}
			////// photo resize //////
			$config['image_library'] = 'gd2';
			$config['source_image'] = $image;
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
            $config['rotation_angle'] = '90';
			
			$data = getimagesize($image);
			$width= $data[0];
			$height= $data[1];
			$config['height']       = 720;
			$config['width']         = 1024;
			$this->load->library('image_lib', $config);
			if($height > $width){
				$this->image_lib->rotate();
				
			}
			$this->image_lib->resize();
			///// photo resize //////


		
			if($image=="") {
				$failed_data=array(
                'dis_date' => $_POST['dis_date'],
                'dis_reason' => $_POST['dis_reason'],
                'Employee_id'=>$_POST['Employee_id'],
                'update_at' => date('Y-m-d h-m-s'),
           	 	);
            	$this->DisjointModel->updateDisjoint($_POST['Employee_id'],$failed_data);
                $Employee_id = $_POST['Employee_id'];
                $lock_data = array(
                    'name' =>  $_SESSION['name'],
                    'last_name' => $_SESSION['last_name'],
                    'father_name' => $_SESSION['father_name'],
                    'photo'=> $_SESSION['image'],
                    'signature_photo'=> $_SESSION['signature_image'],
                    'lock_type'=>'منفکی',
                    'lock_action'=>'ویرایش',
                    'Employee_id'=>$Employee_id,
                    'create_at' => date('Y-m-d'),
                );
                $this->LockFileModel->insertLockFileForm($lock_data); 
            	redirect('DisjointController/index');
			}else{
	            $failed_data=array(
	                'dis_date' => $_POST['dis_date'],
	                'dis_reason' => $_POST['dis_reason'],
	                'dis_scan ' => $image,
	                'Employee_id'=>$_POST['Employee_id'],
	                'update_at' => date('Y-m-d h-m-s'),
	            );
	            ///file delete ///
                $file =  explode("'", $_POST['previose_photo']);
                unlink($file[0]);
				///file delete ///
	           $this->DisjointModel->updateDisjoint($_POST['Employee_id'],$failed_data);
	           $Employee_id = $_POST['Employee_id'];
               $lock_data = array(
                    'name' =>  $_SESSION['name'],
                    'last_name' => $_SESSION['last_name'],
                    'father_name' => $_SESSION['father_name'],
                    'photo'=> $_SESSION['image'],
                    'signature_photo'=> $_SESSION['signature_image'],
                    'lock_type'=>'منفکی',
                    'lock_action'=>'ویرایش',
                    'Employee_id'=>$Employee_id,
                    'create_at' => date('Y-m-d h-m-s'),
                );
                $this->LockFileModel->insertLockFileForm($lock_data);
				redirect('DisjointController/index');
			}
        }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Employee/index', array(
                'error_dis_scan'=>$error_dis_scan,
            ));
            $this->load->view('include/footer.inc.php');
		}
	}
	function DisjointDelete(){
        $Employee_id = $_GET['Employee_id'];
		$Dis_id = $_GET['Dis_id'];
        $this->DisjointModel->removeDisjoint($Dis_id);
        $lock_data = array(
                    'name' =>  $_SESSION['name'],
                    'last_name' => $_SESSION['last_name'],
                    'father_name' => $_SESSION['father_name'],
                    'photo'=> $_SESSION['image'],
                    'signature_photo'=> $_SESSION['signature_image'],
                    'lock_type'=>'منفکی',
                    'lock_action'=>'حذف',
                    'Employee_id'=>$Employee_id,
                    'create_at' => date('Y-m-d h-m-s'),
                );
        $this->LockFileModel->insertLockFileForm($lock_data);
        $this->index();
	}
}
?>