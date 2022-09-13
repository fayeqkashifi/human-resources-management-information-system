
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
                                <span>جزئیات کارمندان منفک شده</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->



 <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit ">
                          <div class="portlet-title">
                              <div class="caption">
                                  <i class="icon-settings font-red"></i>
                                  <span class="caption-subject font-red sbold uppercase">لیست کارمندان منفک شده</span>
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

					                                
                                             <a  id="btn_responsive" onclick="employeeIDs('<?=$row->Employee_id?>','<?=$row->Emp_ID?>','<?=$row->dis_date?>','<?=$row->dis_reason?>','<?=$row->dis_scan?>','<?=$row->dis_scan?>');" class="btn green btn-outline tooltips" data-original-title="ویرایش"  data-toggle="modal"   href="#responsive"><i class="fa fa-edit"></i>
                                            </a>
					                                 
                                          <a class="btn red btn-outline tooltips " data-toggle="confirmation" id="bs_confirmation_demo_1" data-toggle="tooltip" data-original-title="حذف" href="<?=base_url()?>DisjointController/DisjointDelete?Dis_id=<?=$row->dis_id?>&Employee_id=<?=$row->Employee_id?>" ><i class="fa fa-trash"></i></a>
					                                  
                             			 </td>
                                             </tr>
                                             <?php }?>
                                             
                                            
                                      </tbody>
                                 </table>
                                </div>
                            </div>


                             <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title">منفک کردن کارمند</h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- BEGIN FORM-->
                                        <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>DisjointController/EmployeeUpdate" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                        <label  class="control-label col-md-4">تاریخ منفکی 
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-5">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="date" id="dis_date" required="required" placeholder="تاریخ منفکی"   class="form-control" name="dis_date" /> </div>

                                                  </div>
                                                </div>
                                                <div class="form-group ">
                                                  <label class="control-label col-md-4" >دلیل منفکی 
                                                              <span class="required"> * </span>
                                                          </label>
                                                          <div class="col-md-5">
                                                              <div class="input-icon right ">
                                                                  <i class="fa"></i>
                                                                  <textarea type="text" id="dis_reason" required="required" placeholder="لطفا توضیح دهید"  class="form-control" name="dis_reason" /></textarea>
                                                                </div>

                                                          </div>
                                                </div>
                                                 <div class="form-group">
                                                     <label class="control-label col-md-4" >اسکن مکتوب منفکی
                                                              <span class="required"> * </span>
                                                          </label>
                                                    <div class="fileinput fileinput-new col-md-5" data-provides="fileinput">
                                                        <div  class="fileinput-preview thumbnail " data-trigger="fileinput" style="width: 220px; height: 200px;">
                                                          <img  id="dis_scan" >
                                                        </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> انتخاب  </span>
                                                                <span class="fileinput-exists">تغییر  </span>
                                                                <input type="file" name="dis_scan"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="hidden" id="E_id" name="Employee_id" >
                                                <input type="hidden" id="E_ID" name="Emp_ID" >
                                                <input type="hidden" id="previose_photo" name="previose_photo" >
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
                            
<script type="text/javascript">
  function employeeIDs(Employee_id,Emp_ID,dis_date,dis_reason,dis_scan,previose_photo){
      $('#E_id').val(Employee_id);
      $('#E_ID').val(Emp_ID);
      $('#dis_date').val(dis_date);
      $('#dis_reason').val(dis_reason);
      $('#dis_scan').attr("src",'<?=base_url()?>'+dis_scan);
      $('#previose_photo').val(previose_photo);   
  }
</script>
 </div>
</div>



