<!-- BEGIN PAGE LEVEL PLUGINS -->
   <!-- END PAGE LEVEL PLUGINS -->

   <!-- BEGIN THEME GLOBAL STYLES -->

   <!-- END THEME GLOBAL STYLES -->

   <!-- END THEME LAYOUT STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->

   <!-- END PAGE LEVEL STYLES -->
<!DOCTYPE html>
<html>
<head>
<title >شرکت ساختمانی و تخنیکی مجتبی علی</title>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?=base_url();?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

<link href="<?=base_url();?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?=base_url();?>/assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?=base_url();?>/assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?=base_url();?>/assets/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?=base_url();?>/assets/layouts/layout2/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?=base_url();?>/assets/pages/css/portfolio-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?=base_url();?>/assets/pages/css/invoice-2-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- <link href="<?=base_url();?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="<?=base_url();?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" /> -->
<!-- END PAGE LEVEL PLUGINS -->



</head>
<body >

<style type="text/css">
   td {
       padding: 5px;
   }
</style>

          <div id="print">
                  <?php foreach ($data as $row) { ?>
                
                              <div class="content" style="width:1024px;height: 1450px;margin:0 auto;vertical-align: center;">
                                  <table    style="width:100%; border-collapse:collapse; margin-top: 10px;text-align: right;direction: rtl;" >
                                   <tr>
                                     <td style="width: 25%" colspan="2">
                                       <br><br><br>
                                         <h5 style="text-align:right;"><b>تاریخ  استخدام : <?=$row->Emp_start_date?> </b> </h5>
                                           <h5 style="text-align:right;"><b>ای دی کارمند    :  <?=$row->Emp_ID?>    </b> </h5>
                                         <h5 style="text-align:right;"><b> نوعیت کارمند   : <?=$row->Emp_type?></b></h5>
                                         
                                     </td>

                                       <td style="width: 50%" colspan="2">


                                             <h5 style="font-family:Calibri;text-align: center;font-weight:bold;font-size:40px;margin-bottom: -20px"> <b style="color:green">شرکت تخنیکی </b><b style="color:red"> و انجنیری </b><b style="color:black"> مجتبی علی </b> </h5>
                                               <h5 style="font-family:Calibri;text-align: center;font-weight:bold;font-size:20px;  color:black; margin-bottom: -25px">مدیریت منابع بشری </h5>
                                                <h5 style="font-family:Calibri;text-align: center;font-weight:bold;font-size:20px;color:black;margin-bottom: -25px">مدیریت دیتابیس </h5>
                                                 <h5 style="font-family:Calibri;text-align: center;font-weight:bold;font-size:20px;color:black;margin-bottom: 5px">فورم هویت کارمند </h5>
                                       </td>
                                       <td style="width: 25%;text-align: center;" colspan="2">
                                               <img src="<?=base_url();?>/assets/logo/Logo2.png"   width="180px" alt="">
                                       </td>

                                   </tr>
                                  
                                 </table>
                               <table   style="font-family:Calibri;width:100%; border-collapse:collapse;margin-top: 10px;text-align: right;direction: rtl;" border="1" >
                                <caption style="background-color:lightblue;font-size: 25px;font-weight: bolder">معلومات کارمند</caption>
                                    <tr style="width: 100%;height: 50px">
                                        
                                      <th style="width: 15%;font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        اســــــم
                                      </th>
                                       <th style="width: 20%;font-size: 20px;text-align: center;">
                                       <?=$row->Emp_name?>    
                                                           
                                      </th>
                                       <th style="width: 15%;font-size: 20px;text-align: center;background-color: #E1E5EC">
                                          پوهنتون 
                                      </th>
                                       <th style="width: 20%;font-size: 20px;text-align: center;">
                                        
                                           <?=$row->Emp_education_university?>
                                      </th>
                                      <td style="width: 30%;font-size: 20px;text-align: center;" rowspan="6">
                                        
                                        <img width='250px' height="300px" src="<?=base_url()?><?=$row->Emp_photo?>">
                                                                 

                                      </td>

                                       
                                   

                                      

                                    </tr> 
                                     <tr style="width: 100%;height: 50px">
                                        
                                      <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                          ولــــد
                                      </th>
                                       <th style="font-size: 20px;text-align: center;">
                                         <?=$row->Emp_father_name?>    
                                                          
                                      </th>
                                       <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        رشته تحصیلی
                                      </th>
                                      <th style="width: 10%;font-size: 20px;text-align: center;">
                                        <?=$row->Emp_education_field?>
                                                       
                                      </th>


                                      

                                    </tr> 
                                     <tr style="width: 100%;height:50px">
                                        
                                      <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        تخلــــــــص
                                      </th>

                                       <th style="font-size: 20px;text-align: center;">
                                         <?=$row->Emp_last_name?>  
                                      </th>
                                       <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        درجه تحصیل
                                      </th>
                                      <th style="width: 10%;font-size: 20px;text-align: center;">
                                        <?=$row->Emp_education_degree?>  
                                      </th>

                                      

                                    </tr> 
                                    <tr style="width: 100%;height:50px">
                                        
                                      <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        نمبر تذکره
                                        
                                      </th>

                                       <th style="font-size: 20px;text-align: center;">
                                          <?=$row->Emp_Tazkira_number?>  
                                      </th>
                                        <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        گروپ خون
                                      </th>
                                      <th style="width: 10%;font-size: 20px;text-align: center;">
                                        <?=$row->Emp_Blood_group?>    
                                      </th>

                                      

                                    </tr> 
                                     <tr style="width: 100%;height:50px">
                                        
                                      <th style="width: 15%;font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        جنسیت 
                                      </th>
                                       <th style="width: 20%;font-size: 20px;text-align: center;">
                                         <?php if ($row->Emp_gender==1) {
                                             echo 'مذکر';

                                              }elseif ($row->Emp_gender==2){
                                              echo 'مونث' ;
                                          }?>
                                       <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        شماره تماس
                                      </th>
                                      <th style="width: 10%;font-size: 20px;text-align: center;">
                                            <?=$row->Emp_telephone?>    
                                      </th>

                                      

                                    </tr> 
                                     <tr style="width: 100%;height:50px">
                                        
                                     <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        حالت مدنی
                                      </th>
                                      <th style="width: 10%;font-size: 20px;text-align: center;">
                                        <?php if ($row->Emp_status==1) {
                                             echo 'مجرد';

                                              }elseif ($row->Emp_status==2){
                                              echo 'متاهل' ;
                                          }?>
                                      </th>
                                       <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">
                                        ID
                                      </th>
                                      <th style="width: 10%;font-size: 20px;text-align: center;">
                                             <?=$row->Emp_ID?>    
                                      </th>

                                      

                                    </tr> 
                                  
                                 </table>


                                  <table   style="font-family:Calibri;width:100%; border-collapse:collapse; margin-top: 10px;text-align: right;direction: rtl;" border="1" >
                                      <caption style="background-color:lightblue;font-size: 25px;font-weight: bolder">آدرس کارمند</caption>
                                          <tr style="width: 100%;height: 50px">
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC" > سکونت 
                                            </th>
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC" > ولایت </th>
                                             <th  style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC" > ناحیه</th>
                                            <th  style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC" > قریه</th>
                                            

                                          </tr> 
                                          <tr style="width: 100%;height: 50px">
                                            <?php foreach ($current as $key) {?>    
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC"> اصـــــلی </th>
                                            <th style="font-size: 20px;text-align: center;"> <?=$key->Addr_Province?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;">  <?=$key->Addr_district?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;"> <?=$key->Addr_detail?>
                                            </th>
                                            
                                              <?php } ?>
                                          </tr>
                                            <tr style="width: 100%;height: 50px">
                                              <?php foreach ($present as $key) {?>
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">فعلـــــــی</th>
                                             <th style="font-size: 20px;text-align: center;"> <?=$key->Addr_Province?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;">  <?=$key->Addr_district?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;"> <?=$key->Addr_detail?>
                                            </th>
                                            
                                              <?php } ?>
                                            

                                          </tr>
                                  
                                 </table>
                                 <table   style="font-family:Calibri;width:100%; border-collapse:collapse; margin-top: 10px;text-align: right;direction: rtl;" border="1" >
                                      <caption style="background-color:lightblue;font-size: 25px;font-weight: bolder">ارتباط گیرنده ها</caption>
                                          <tr style="width: 100%;height: 50px">
                                              
                                            <th colspan="2" style="width: 50%;font-size: 20px;text-align: center;background-color: #E1E5EC" > اقارب  
                                            </th >
                                            
                                             <th colspan="2" style="width: 50%;font-size: 20px;text-align: center;background-color: #E1E5EC" > ضمانت کننده</th>
                                            

                                          </tr> 
                                          <tr style="width: 100%;height: 50px">
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC"> اســــم </th>
                                            <th style="width: 25%;font-size: 20px;text-align: center;">  <?=$row->Emp_relatives_name?>
                                            </th>
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">  اســــم
                                            </th>
                                            <th style="width: 25%;font-size: 20px;text-align: center;">  <?=$row->Emp_guarantor_name?>
                                                      
                                            </th>
                                            
                                        
                                          </tr>
                                            <tr style="width: 100%;height: 50px">
                                    
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">قرابت </th>
                                             <th style="font-size: 20px;text-align: center;"> 
                                              <?=$row->Emp_relatives_relation?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;background-color: #E1E5EC">  ارگان مربوطه 
                                            </th>
                                            <th style="font-size: 20px;text-align: center;">      <?=$row->Emp_guarantor_work_place?>
                                            </th>
                                            

                                          </tr>
                                           <tr style="width: 100%;height: 50px">
                                              
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">وظیفه</th>
                                             <th style="font-size: 20px;text-align: center;"> <?=$row->Emp_relatives_work_place?> 
                                            </th>
                                            <th style="font-size: 20px;text-align: center;background-color: #E1E5EC"> وظیفه 
                                            </th>
                                            <th style="font-size: 20px;text-align: center;">     <?=$row->Emp_guarantor_job?>
                                            </th>
                                            
                                             
                                            

                                          </tr>
                                           <tr style="width: 100%;height: 50px">
                                             
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">شماره تماس</th>
                                             <th style="font-size: 20px;text-align: center;"> <?=$row->Emp_relatives_telephone?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;background-color: #E1E5EC"> شماره تماس
                                            </th>
                                            <th style="font-size: 20px;text-align: center;"> <?=$row->Emp_guarantor_telephone?>
                                            </th>
                                            
                                            
                                            

                                          </tr>
                                  
                                 </table>



                                    <table   style="font-family:Calibri;width:100%; border-collapse:collapse; margin-top: 10px;text-align: right;direction: rtl;" border="1" >
                                      <caption style="background-color:lightblue;font-size: 25px;font-weight: bolder">معلومات اداری</caption>
                                          <tr style="width: 100%;height: 50px">
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC" > دیپارتمنت 
                                            </th>
                                            <th style="width: 25%;font-size: 20px;text-align: center;" > 
                                                                       <?php foreach (  $Department as $key ) {?>
                                                                       <?php if ($row->Department_id==$key->Department_id) {
                                                                        echo  $key->Dept_name;

                                                                       } ?>
                                                                    <?php } ?>  
                                                                   </th>
                                             <th  style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC" > اسم سوپروایزر</th>
                                            <th  style="width: 25%;font-size: 20px;text-align: center;" > <?=$row->Emp_supervisor_name?>
                                                    </th>
                                            

                                          </tr> 
                                          <tr style="width: 100%;height: 50px">
                                               
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">موقف</th>
                                            <th style="font-size: 20px;text-align: center;"> 
                                                        <?php foreach (  $Position as $key ) {?>
                                                                        <?php if ($row->Position_id==$key->Position_id) {
                                                                          echo $key->Posi_name;
                                                                        } ?> 
                                                                          
                                                        <?php } ?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;background-color: #E1E5EC"> محل وظیفه
                                            </th>
                                            <th style="font-size: 20px;text-align: center;"> <?=$row->Emp_work_place?>
                                            </th>
                                            
                                          </tr>
                                            <tr style="width: 100%;height: 50px">
                                             
                                              
                                            <th style="width: 25%;font-size: 20px;text-align: center;background-color: #E1E5EC">عنوان وظیفه</th>
                                             <th style="font-size: 20px;text-align: center;">   <?=$row->Emp_job_title?>
                                            </th>
                                            <th style="font-size: 20px;text-align: center;background-color: #E1E5EC"> معاش ماهوار
                                            </th>
                                            <th style="font-size: 20px;text-align: center;">  <?=$row->Emp_monthly_salary?>
                                            </th>
                                            
                                              
                                            

                                          </tr>
                                  
                                 </table>

                                    
                                     

                    <?php } ?>
                    <!-- END FORM-->









            </div>
          </div>
       
   
</body>
</html>



<script type="text/javascript">
  window.print();

</script>
