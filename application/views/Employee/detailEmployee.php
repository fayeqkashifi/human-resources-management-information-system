
<!-- BEGIN CONTENT -->
          <div class="page-content-wrapper" >
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE HEADER-->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?=base_url();?>DashboardController">صفحه اصـــلی</a>
                            <i class="fa fa-angle-left"></i>
                        </li>
                        <li>
                            <span>نمایش جزئیات کارمند</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->

                <div class="invoice-content-2 " >
           
              <?php foreach ($data as $row) { ?>                
                              <p> 
                                  <a id="btn_responsive"  href="#Disjoint"  data-toggle="modal"   class="btn red btn-outline">منفکی </a>
                                  <a id="btn_responsive"  href="#conversion"  data-toggle="modal"    class="btn blue btn-outline">تبدیلی</a>
                                  <a id="btn_responsive"  href="#improvesalary"  data-toggle="modal"    class="btn green btn-outline">اضافه معاش </a>
                                  <a id="btn_responsive"  href="#scanpapers"  data-toggle="modal"    class="btn purple btn-outline">اضافه کردن اسکن اوراق</a>

              
                                  
                                  <a type="button" href="<?=base_url();?>EmployeeController/Employeeprint?Emp_id=<?=$row->Employee_id?>" class="btn dark btn-outline" target="blank">پرنت</a>
                                  <a type="button" href="#" class="btn red btn-outline">بایومتریک</a>
                              </p>
                             
                                                       
                 
                  
                <div class="content" >
                  <div class="col-md-12" style="text-align: center;font-size: 20px; border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                               <label style="font-weight:bolder;">معلومات کارمند</label>
                       </div>
                  <div class="row"  >
                      
                       <div class="col-md-8" >

                           <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ID
                                    <span class="required"> * </span>
                                   </label>

                                  <div class="col-md-8" >
                                      <div class="input-icon right">
                                      <?=$row->Emp_ID?>    
                                         
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group col-md-6">

                                  <label class="control-label col-md-4" style="font-weight:bolder">اسم
                                      <span class="required"> * </span>
                                  </label>

                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                           <?=$row->Emp_name?>    
                                         
                                         
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ولد
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      
                                         <?=$row->Emp_father_name?>    
                                        
                                          
                                     
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">تخلص
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      
                                          <?=$row->Emp_last_name?>    
                                      
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">جنسیت
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                        
                                          <?php if ($row->Emp_gender==1) {
                                                 echo 'مذکر';

                                                  }elseif ($row->Emp_gender==2){
                                                  echo 'مونث' ;
                                                  }?>

                                                     

                                          
                                  </div>
                            </div>

                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">حالت مدنی
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                       
                                                 <?php if ($row->Emp_status==1) {
                                                 echo 'مجرد';

                                                  }elseif ($row->Emp_status==2){
                                                  echo 'متاهل' ;
                                                  }?>

                                         
                                                     
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">تاریخ استخدام
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                     
                                          <?=$row->Emp_start_date?>    
                                        
                                          
                                    
                                  </div>
                            </div>

                          <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">نمبر تذکره
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      
                                             <?=$row->Emp_Tazkira_number?>    
                                         
                                      
                                  </div>
                            </div>
                             <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">شماره تماس
                                      <span class="required"> * </span>
                                  </label>

                                  <div class="col-md-8">
                                     
                                            <?=$row->Emp_telephone?>    
                                      
                                  </div>
                            </div>
                             <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> گروپ خون

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <?=$row->Emp_Blood_group?>                                      
                                  </div>
                            </div>

                      </div>
                      <div class="col-md-4 col-xs-12" >

                                      <div class="col-md-12 ">
                                            
                                                <img width="200px" height="230"  src="<?=base_url()?><?=$row->Emp_photo?>">
                                               
                                         

                                      </div>

                      </div>

                  </div>
                  <!-- END PAGE HEADER-->
               <!--  <div class="col-md-12" style="border:solid purple 1px">

                      <div class="col-md-4" >

                      </div>
                </div> -->
                
                <div class="row" style="margin-top:  20px" >
                         
                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">سکونت اصلی</label>
                              </div>
                               <?php foreach ($current as $key) {?>
                               <div class="form-group col-md-12" >
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ولایت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <?=$key->Addr_Province?>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ناحیه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">

                                    <?=$key->Addr_district?>
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> قریه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                  
                                        <?=$key->Addr_detail?>
                                        
                                  </div>
                            </div>
                            <input type="hidden" name="Addr_type" value="اصلی">
                            <?php } ?>
                          </div>
                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">سکونت فعلی</label>
                              </div>
                               <?php foreach ($present as $key) {?>
                                 <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ولایت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$key->Addr_Province?>
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ناحیه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$key->Addr_district?>
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> قریه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$key->Addr_detail?>
                                      
                                  </div>
                            </div>
                      </div>
                      <input type="hidden" name="pre_Addr_type" value="فعلی">
                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                      <?php } ?>
                  </div>

                   <div class="row"  >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center ;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">معلومات تحصیلی</label>
                              </div>

                               <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> پوهنتون

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_education_university?>
                                     
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> رشته تحصیلی

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_education_field?>
                                     
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder">درجه تحصیلی

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_education_degree?>
                                     
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6">
                              <div class="col-md-12" style="text-align: center ;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">معلومات اقارب</label>
                              </div>

                                <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_relatives_name?>
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> شماره تماس

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_relatives_telephone?>
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> محل وظیفه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_relatives_work_place?>
                                     
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> قرابت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_relatives_relation?>
                                     
                                  </div>
                            </div>
                      </div>

                   </div>
                  <div class="row" >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px ">
                                   <label style="font-weight:bolder;text-align: center">معلومات ضمانت کننده</label>
                              </div>

                               <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم 

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_guarantor_name?>
                                    
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> وظیفه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_guarantor_job?>
                                     
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ارگان مربوطه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_guarantor_work_place?>
                                      
                                  </div>
                            </div>
                              <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder">شماره تماس

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_guarantor_telephone?>
                                     
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6">
                              <div class="col-md-12" style="text-align: center;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">معلومات اداری کارمند</label>
                              </div>

                                <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> دیپارتمنت مربوطه
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                     
                                                  
                                                     <?php foreach (  $Department as $key ) {?>
                                                     <?php if ($row->Department_id==$key->Department_id) {


                                                     } ?>
                                                     <?=$key->Dept_name?>
                                                  <?php } ?>  
                                                
                                      
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> موقف

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      
                                                      <?php foreach (  $Position as $key ) {?>
                                                      <?php if ($row->Position_id==$key->Position_id) {



                                                      } ?> <?=$key->Posi_name?>
                                                      <?php } ?>  
                                                
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> عنوان وظیفه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_job_title?>
                                      
                                  </div>
                            </div>
                             <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم سوپروایزر

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_supervisor_name?>
                                  
                                  </div>
                            </div>
                             <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> معاش ماهوار

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_monthly_salary?>
                                      
                                  </div>
                            </div>

                      </div>

                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>
                  <div class="col-md-12" style="text-align: center;font-size: 20px;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                          <label style="font-weight:bolder;text-align: center">موقعیت وظیفوی کارمند</label>
                     </div>
                   <div class="row">
                     
                          <div class="col-md-6 col-xs-6" >


                               <div class=" col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> نوعیت کارمند

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    
                                      <?php if ($row->Emp_type=='ساحوی') {
                                                 echo 'ساحوی';

                                                  }elseif ($row->Emp_type=='مرکزی'){
                                                  echo 'مرکزی' ;
                                                  }?>
                                      



                                  
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6" >

                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> موقعیت وظیفه
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <?=$row->Emp_work_place?>
                                                                        </div>
                            </div>

                               
                      </div>


                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>
                        
                    
                    <!-- END FORM-->


                          <div id="Disjoint" class="modal fade in" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title" style="text-align: center; font-weight: bolder;" >منفک کردن کارمند</h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- BEGIN FORM-->
                                        <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>DisjointController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                        <label  class="control-label col-md-4">تاریخ منفکی 
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-5">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="text" class="form-control pdate" id="dis_date" placeholder="لطفا تاریخ منفکی  را وارد نمایید."  name="dis_date">
                                                          </div>
                                                  </div>
                                                </div>
                                                <div class="form-group ">
                                                  <label class="control-label col-md-4" >دلیل منفکی 
                                                              <span class="required"> * </span>
                                                          </label>
                                                          <div class="col-md-5">
                                                              <div class="input-icon right ">
                                                                  <i class="fa"></i>
                                                                  <textarea type="text" required="required" placeholder="لطفا توضیح دهید"  class="form-control" name="dis_reason" /></textarea>
                                                                </div>

                                                          </div>
                                                </div>
                                                 <div class="form-group">
                                                     <label class="control-label col-md-4" >اسکن مکتوب منفکی
                                                              <span class="required"> * </span>
                                                          </label>
                                                    <div class="fileinput fileinput-new col-md-5" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail " data-trigger="fileinput" style="width: 220px; height: 200px;"> </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> انتخاب  </span>
                                                                <span class="fileinput-exists">تغییر  </span>
                                                                <input type="file" name="dis_scan" required="required"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="hidden" name="Employee_id" value="<?=$row->Employee_id?>">
                                                <input type="hidden" name="Emp_ID" value="<?=$row->Emp_ID?>" >
                                               
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-8 col-md-4">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">بازگشت</button>
                                                        <button type="submit" class="btn green" value="add">ذخیره</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                        </div>
                                  </div>
                              </div>
                           </div>
                        
                          <div id="conversion" class="modal fade" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title" style="text-align: center; font-weight: bolder;">فورم تبدیلی</h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- BEGIN FORM-->
                                        <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>ConversionController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                              <label  class="control-label col-md-4">تاریخ
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-6">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="text" required="required" id="con_date" placeholder="تاریخ تبدی"   class="form-control pdate" name="con_date" /> </div>

                                                  </div>
                                              </div>
                                              <div class="form-group ">
                                                 <label  class="control-label col-md-4"> دیپارتمنت مربوطه 
                                                    <span class="required"> * </span>
                                                </label>
                                              <div class="col-md-6">
                                                  <div class="input-icon right">
                                                      <i class="fa"></i>
                                                            <select class="form-control" required="required " name="Department_id">
                                                              <?php foreach ($Department as $key) {?>
                                                                <option value="<?=$key->Department_id?>"><?=$key->Dept_name?></option>
                                                              <?php } ?>
                                                              </select>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="form-group ">
                                                 <label  class="control-label col-md-4"> موقف  
                                                    <span class="required"> * </span>
                                                </label>
                                              <div class="col-md-6">
                                                  <div class="input-icon right">
                                                      <i class="fa"></i>
                                                            <select class="form-control" required="required " name="Position_id">
                                                              <?php foreach ($Position as $key) {?>
                                                                <option value="<?=$key->Position_id?>"><?=$key->Posi_name?></option>
                                                              <?php } ?>
                                                              </select>
                                                      </div>
                                                </div>
                                          </div>

                                              <div class="form-group">
                                               <label  class="control-label col-md-4"> اسم سوپروایزر
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-6">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="text" required="required" placeholder="لطفا اسم سوپروایزر جدید را وارد نمایید."   class="form-control" name="supervisor_name" /> </div>

                                                  </div>
                                            </div>
                                             <div class="form-group">
                                               <label  class="control-label col-md-4"> عنوان وظیفه
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-6">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="text" required="required" placeholder="لطفا عنوان وظیفه جدید را وارد نمایید."   class="form-control" name="job_title" /> </div>

                                                  </div>
                                            </div>
                                            <div class="form-group">
                                               <label  class="control-label col-md-4"> موقعیت وظیفه 
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-6">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="text" required="required" placeholder="لطفا موقعیت جدید را ورارد نمایدد."   class="form-control" name="current_site" /> </div>

                                                  </div>
                                            </div>
                                            
                                           <div class="form-group">
                                                <label  class="control-label col-md-4"> نوعیت کارمند 
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                       <div class="md-radio-inline">
                                                                <div class="md-radio has-error">
                                                                    <input type="radio" id="radio60" name="current_emp_type" class="md-radiobtn" value="ساحوی">
                                                                    <label for="radio60" style="font-weight: bolder;color:black;"></>
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> ساحوی </label>
                                                                </div>
                                                                <div class="md-radio has-warning">
                                                                    <input type="radio" id="radio61" name="current_emp_type" class="md-radiobtn" value="مرکزی"  checked>
                                                                    <label for="radio61" style="font-weight: bolder; color:black">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box" ></span> مرکزی </label>
                                                                </div>

                                                            </div>
                                                </div>
                                          </div>
                                                                            
                                                <input type="hidden"  name="previous_site" value="<?=$row->Emp_work_place?>" >
                                                <input type="hidden"  name="previous_emp_type"  value="<?=$row->Emp_type?>">
                                                <input type="hidden"  name="previous_job_title" value="<?=$row->Emp_job_title?>" >
                                                <input type="hidden"  name="previous_supervisor_name" value="<?=$row->Emp_supervisor_name?>" >
                                                <input type="hidden"  name="previous_Department_id" value="<?=$row->Department_id?>" >
                                                <input type="hidden"  name="previous_Position_id" value="<?=$row->Position_id?>" >
                                                <input type="hidden"  name="Employee_id" value="<?=$row->Employee_id?>" >
                                               
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-8 col-md-4">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">بازگشت</button>
                                                        <button type="submit" class="btn green" value="add">ذخیره</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                        </div>
                                  </div>
                              </div>
                           </div>
  
                          <div id="improvesalary" class="modal fade" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title" style="text-align: center; font-weight: bolder;">فورم اضافه معاش </h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- BEGIN FORM-->
                                        <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>ImproveSalaryController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                               <label  class="control-label col-md-4"> تاریخ 
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-6">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="text" required="required"  id="salary_date" placeholder="تاریخ اضافه ماش"   class="form-control pdate" name="salary_date" /> </div>

                                                  </div>
                                            </div>
                                            <div class="form-group">
                                               <label  class="control-label col-md-4"> مقدار افزوده شده
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-6">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="number" required="required" placeholder="لطفا مقدار افزودی معاش را بنویسید"   class="form-control" name="Improve_salary" /> </div>

                                                  </div>
                                            </div>
                                               
                                               
                                            <input type="hidden" name="Previous_salary"  value="<?=$row->Emp_monthly_salary?>">
                                            <input type="hidden" name="Employee_id" value="<?=$row->Employee_id?>">
                                               
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-8 col-md-4">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">بازگشت</button>
                                                        <button type="submit" class="btn green" value="add">ذخیره</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                        </div>
                                  </div>
                              </div>
                           </div>
  

                          <div id="scanpapers" class="modal fade" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title" style="text-align: center; font-weight: bolder;">اضافه نمودن اوراق</h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- BEGIN FORM-->
                                     
       

                <form id="fileupload" data-parsley-validate action="<?=base_url()?>ScanFilesController/insertForm" method="POST" enctype="multipart/form-data">
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->

                    <div class="form-group">
                       <label  class="control-label col-md-4" style="font-size: 20px"> جزئیات عکس
                        <span class="required"> * </span>
                          </label>
                        <div class="col-md-6" >
                            <div class="input-icon right">
                              <i class="fa"></i>
                                <textarea type="text" required="required" placeholder="لطفا درمورد تصویر معلومات بدهید ." rows="5" class="form-control" name="file_detail" /></textarea>
                                <input type="hidden" name="Employee_id" value="<?=$row->Employee_id?>">
                                <input type="hidden" name="Emp_ID" value="<?=$row->Emp_ID?>">
                            </div>

                        </div>
                    </div>
                  </br>
                </br>
              </br>
                  </br>

                  <div class="row">     <div class="col-md-offset-4 col-md-8
                  margin-top-20 ">           <!-- The fileinput-button span is
                  used to style the file input field as button -->
                  <span class="btn blue fileinput-button btn-outline">
                  <i class="fa fa-plus"></i>               <span style="font-
                  size:13px"> اضــافه کنید </span>

                                <input type="file"  name="file_link" multiple=""> </span>
                               
                                 <button type="button" class="btn red btn-outline" data-dismiss="modal">
                                <i class="fa fa-reply"></i>
                                <span  style="font-size:13px"> بازگشت</span> 
                            </button>
                            
                            <span class="fileupload-process"> </span>
                        </div>

                        <!-- The global progress information -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                            </div>
                            <!-- The extended global progress information -->
                            <div class="progress-extended"> &nbsp; </div>
                        </div>
                    </div>



                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped clearfix">
                        <tbody class="files"> </tbody>
                    </table>

                </form>

        </div>
        <!-- The blueimp Gallery widget -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"> </div>
            <h3 class="title"></h3>
            <a class="prev"> ‹ </a>
            <a class="next"> › </a>
            <a class="close white"> </a>
            <a class="play-pause"> </a>
            <ol class="indicator"> </ol>
        </div>
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger label label-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                </td>
                <td > {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn green btn-outline start btn-sm" disabled>
                        <i class="fa fa-upload"></i>
                        <span>ذخیره </span>
                    </button> {% } %} {% if (!i) { %}
                    <button class="btn red btn-outline cancel btn-sm">
                        <i class="fa fa-ban"></i>
                        <span>منصرف</span>
                    </button> {% } %} </td>
            </tr> {% } %} </script>
        <!-- The template to display files available for download -->
        <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview"> {% if (file.thumbnailUrl) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                            <img src="{%=file.thumbnailUrl%}">
                        </a> {% } %} </span>
                </td>
                <td>

                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td> {% if (file.deleteUrl) { %}
                    <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                        <i class="fa fa-trash-o"></i>
                        <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                    <button class="btn purple btn-outline cancel btn-sm">
                        <i class="fa fa-ban"></i>
                        <span>ذخیره شد</span>
                    </button> {% } %} </td>
            </tr> {% } %} </script>
                                        </div>
                                  </div>
                              </div>
                           </div>
  





</div>
</div>
</div>
</div>
</div>
                          
 <?php } ?>
   <script type="text/javascript">
      var objCal2 = new AMIB.persianCalendar('dis_date', {
              initialDate: '1398/2/2',
          }
          );
   </script>
   <script type="text/javascript">
      var objCal2 = new AMIB.persianCalendar('con_date', {
              initialDate: '1398/2/2',
          }
          );
   </script>
   <script type="text/javascript">
      var objCal2 = new AMIB.persianCalendar('salary_date', {
              initialDate: '1398/2/2',
          }
          );
   </script>