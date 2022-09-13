
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
                                <span>جزئیات لاک فایل</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->



 <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit ">
                          <div class="portlet-title">
                              <div class="caption">
                                  <i class="icon-settings font-red"></i>
                                  <span class="caption-subject font-red sbold uppercase">لیست لاک فایل ها</span>
                              </div>
                              
                          </div>
                            <div class="portlet-body">
                           
                                
                                  
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                          <thead>
                                          <tr>
                                              
                                              <th style="text-align:center">ID</th>
                                              <th style="text-align:center">اســم کارمند</th>
                                              <th style="text-align:center">ولد کارمند</th>
                                              <th style="text-align:center">اسم کاربر</th>
                                              <!-- <th style="text-align:center">رشته تحصیلی</th> -->
                                              <th style="text-align:center">ولد کاربر</th>
                                              <th style="text-align:center">تخلص کاربر</th>
                                              <th style="text-align:center">عکس</th>
                                              <th style="text-align:center">بحش کار شده</th>
                                              <th style="text-align:center">کار انجام شده</th>
                                              <th style="text-align:center">تاریخ</th>
                                          </tr>
                                  </thead>
                                     <tbody>
                                             
                                             <?php foreach ($data as $row) { ?>
                                             <tr>
                                                 

                                                 <td style="text-align:center">
                                                    <a type="button" data-placement="top" data-toggle="tooltip" data-original-title="نمایش جزئیات" href="<?=base_url()?>EmployeeController/EmployeeDetail?Emp_id=<?=$row->Employee_id?>"><i class="fa fa-eye"></i><?=$row->Emp_ID?></a>
                                                  </td>
                                                 <td style="text-align:center"><?=$row->Emp_name?></td>
                                                 <td style="text-align:center"><?=$row->Emp_father_name?></td>
                                                 <!-- <td style="text-align:center"><?=$row->Emp_last_name?></td> -->
                                                 <!-- <td style="text-align:center"><?=$row->Emp_education_field?></td> -->
                                                 <!-- <td style="text-align:center"><?=$row->Emp_education_degree?></td> -->
                                                 <!-- <td style="text-align:center"><?=$row->Emp_type?></td> -->
                                                 <!-- <td style="text-align:center"><?=$row->Emp_job_title?></td> -->
                                                 <!-- <td style="text-align:center"><?=$row->Emp_work_place?></td> -->
                                                 <!-- <td style="text-align:center"><?=$row->Emp_telephone?></td> -->
                                                 <td style="text-align:center"><?=$row->name?></td>
                                                 <td style="text-align:center"><?=$row->father_name?></td>
                                                 <td style="text-align:center"><?=$row->last_name?></td>
                                                 <td style="text-align:center">
                                                  <img src="<?=base_url()?><?=$row->photo?>" width="100px">
                                                  </td>
                                                 <!-- <td style="text-align:center"><?=$row->signature_photo?></td> -->
                                                 <td style="text-align:center"><?=$row->lock_type?></td>
                                                 <td style="text-align:center"><?=$row->lock_action?></td>
                                                 <td style="text-align:center"><?=$row->create_at?></td>

                                             </tr>
                                             <?php }?>
                                             
                                            
                                      </tbody>
                                 </table>
                                </div>
                            </div>


               

 </div>
</div>



