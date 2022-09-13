
 <div class="page-content-wrapper" >
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->

                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?=base_url();?>DashboardController">صفحه اصـــلی</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                            <li>
                                <span>جزئیات کارمندان</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->



 <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit ">
                          <div class="portlet-title">
                              <div class="caption">
                                  <i class="icon-settings font-red"></i>
                                  <span class="caption-subject font-red sbold uppercase">لیست کارمندان <?=$Dept_name?> </span>
                              </div>
                              
                          </div>
                            <div class="portlet-body">
                           
                                
                                  
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                          <thead>
                                          <tr>
                                              
                                              <th style="text-align:center">ID</th>
                                              <th style="text-align:center">اســم</th>
                                              <th style="text-align:center">ولد</th>
                                              <th style="text-align:center">تخلص</th>
                                              <!-- <th style="text-align:center">رشته تحصیلی</th> -->
                                              <th style="text-align:center">درجه تحصیلی</th>
                                           
                                              <th style="text-align:center">نوعیت کارمند</th>
                                              <th style="text-align:center">عنوان وظیفه</th>
                                              <th style="text-align:center">محل کار</th>
                                              <th style="text-align:center">شماره تماس</th>
                                              <th style="text-align:center">عملکرد ها</th>
                                          </tr>
                                  </thead>
                                     <tbody>
                                             
                                             <?php foreach ($data as $row) { ?>
                                             <tr>
                                                 

                                                 <td style="text-align:center"><?=$row->Emp_ID?></td>

                                                 <td style="text-align:center"><?=$row->Emp_name?></td>
                                                 <td style="text-align:center"><?=$row->Emp_father_name?></td>
                                                 <td style="text-align:center"><?=$row->Emp_last_name?></td>
                                                 <!-- <td style="text-align:center"><?=$row->Emp_education_field?></td> -->
                                                 <td style="text-align:center"><?=$row->Emp_education_degree?></td>
                                                 <td style="text-align:center"><?=$row->Emp_type?></td>
                                                 <td style="text-align:center"><?=$row->Emp_job_title?></td>
                                                 <td style="text-align:center"><?=$row->Emp_work_place?></td>
                                                 <td style="text-align:center"><?=$row->Emp_telephone?></td>
                                            
                                                 
                                            
                                                

                                                  <td class="nowrap" style="width:25% ;text-align:center">
		                                
					                              

					                               
					                                <a class="btn purple btn-outline tooltips " type="button" data-placement="top" data-toggle="tooltip" data-original-title="نمایش جزئیات" href="<?=base_url()?>EmployeeController/EmployeeDetail?Emp_id=<?=$row->Employee_id?>"><i class="fa fa-eye"></i></a>

					                               
					                                  <a class="btn blue btn-outline tooltips" type="button" data-placement="top" data-toggle="tooltip" data-original-title="ویرایش" href="<?=base_url()?>EmployeeController/EmployeeEdit?Emp_id=<?=$row->Employee_id?>" ><i class="fa fa-pencil"></i></a>

					                                 
                                        

					                                    <a class="btn red btn-outline tooltips " data-toggle="confirmation" id="bs_confirmation_demo_1" data-toggle="tooltip" data-original-title="حذف" href="<?=base_url()?>EmployeeController/EmployeeDelete?Emp_id=<?=$row->Employee_id?>" ><i class="fa fa-trash"></i></a>
					                                  
                             			 </td>
                                             </tr>
                                             <?php }?>
                                             
                                            
                                      </tbody>
                                 </table>
                                </div>
                            </div>


               

 </div>
</div>



