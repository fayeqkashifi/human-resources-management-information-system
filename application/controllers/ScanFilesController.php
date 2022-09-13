<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class ScanFilesController extends MY_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->model('ScanFilesModel');
	}
	function insertForm(){
        $error = false;
		if(!$error){
           if(!is_dir("./Uploads/Mujtaba_Ali_Employees/")){
                mkdir("./Uploads/Mujtaba_Ali_Employees/");
            }
            if (!empty($_FILES["file_link"]) and $_FILES["file_link"]["error"] == UPLOAD_ERR_OK){
                if(!(is_dir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_". $_POST['Emp_ID']))){
                    mkdir("./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']);
                }
                $destination = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID'];
                move_uploaded_file($_FILES['file_link']['tmp_name'], $destination ."/Employee_Scan_File_". $_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['file_link']['type'], 6, 5));
                $image = "./Uploads/Mujtaba_Ali_Employees/Employee_ID_".$_POST['Emp_ID']."/Employee_Scan_File_".$_POST['Emp_ID']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['file_link']['type'], 6, 5);
            }
         if(empty($_FILES["file_link"]["name"])){
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
            'file_detail' => $_POST['file_detail'],
            'file_link' => $image,
            'Employee_id'=>$_POST['Employee_id'],
            'create_at' => date('Y-m-d h-m-s'),
            'update_at' => date('Y-m-d h-m-s'),
        );
        $this->ScanFilesModel->insertScanFilesForm($failed_data);
       
    //     $lock_data = array(
	//             'name' =>  $_SESSION['name'],
	//             'last_name' => $_SESSION['last_name'],
	//             'father_name' => $_SESSION['father_name'],
	//             'photo'=> $_SESSION['image'],
	//             'signature_photo'=> $_SESSION['signature_image'],
	//             'g_r_id' => $g_r_id,
	//             'create_at' => date('Y-m-d'),
	//          );
    //        $this->GeneratorDetailRegisterModel->insertGeneratorRegisterForm_LOCK_FILE($lock_data);
        exit();
        $Employee_id = $_POST['Employee_id'];
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