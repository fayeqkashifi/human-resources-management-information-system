
<!-- BEGIN CONTENT -->
          <div  class="page-content-wrapper" >
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE HEADER-->
                <div class="page-bar" >
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?=base_url();?>DashboardController">صفحه اصـــلی</a>
                            <i class="fa fa-angle-left"></i>
                        </li>
                        <li>
                            <span>اضافه کردن کارمند</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                <div class="invoice-content-2 " >
                  <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>EmployeeController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                    <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                               <label style="font-weight:bolder;text-align: center;font-size: 20px">معلومات کارمند</label>
                       </div>
                  <div class="row" >
                      
                       <div class="col-md-9" >

                           <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ID
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا ای دی  را وارد نمایید."  class="form-control " readonly="readonly" id="ID" name="Emp_ID" />
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">اسم
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا اسم  را وارد نمایید."  class="form-control " name="Emp_name" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ولد
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا ولد  را وارد نمایید."  class="form-control " name="Emp_father_name" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">تخلص
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا تخلص  را وارد نمایید."  class="form-control " name="Emp_last_name" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">جنسیت
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="md-radio-inline">
                                                  <div class="md-radio has-success">
                                                      <input type="radio" id="radio53" name="Emp_gender" class="md-radiobtn" value="1">
                                                      <label for="radio53" style="font-weight: bolder;color:black;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> مذکر </label>
                                                  </div>
                                                  <div class="md-radio has-info">
                                                      <input type="radio" id="radio54" name="Emp_gender" class="md-radiobtn" value="2"  checked>
                                                      <label for="radio54" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box" ></span> مونث </label>
                                                  </div>

                                              </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">حالت مدنی
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="md-radio-inline">
                                                  <div class="md-radio has-error">
                                                      <input type="radio" id="radio56" name="Emp_status" class="md-radiobtn" value="1">
                                                      <label for="radio56" style="font-weight: bolder;color:black;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> مجرد </label>
                                                  </div>
                                                  <div class="md-radio has-warning">
                                                      <input type="radio" id="radio57" name="Emp_status" class="md-radiobtn" value="2"  checked>
                                                      <label for="radio57" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box" ></span> متاهل </label>
                                                  </div>

                                              </div>
                                  </div>
                            </div>
                                                             
                            <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">تاریخ استخدام
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" class="form-control pdate" id="Emp_start_date" placeholder=""  name="Emp_start_date"  value="">
                                         
                                      </div>
                                  </div>
                            </div>

                          <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">نمبر تذکره
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا نمبر تذکره  را وارد نمایید."  class="form-control " name="Emp_Tazkira_number" />
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">شماره تماس
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا شماره تماس  را وارد نمایید."  class="form-control " name="Emp_telephone" />
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> گروپ خون

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                <select class="form-control" required="required " name="Emp_Blood_group">

                                                      <option value=" "....</option>
                                                      <option value="O−">O−</option>
                                                      <option value="O+">O+</option>
                                                      
                                                      <option value="AB+">AB+</option>
                                                      <option value="AB-">AB-</option>
                                                      <option value="B-">B-</option>
                                                      <option value="B+">B+</option>
                                                      <option value="A-">A-</option>
                                                      <option value="A+">A+</option>
                                                  </select>
                                      </div>
                                  </div>
                            </div>

                      </div>
                      <div class="col-md-3 col-xs-12" >

                                      <div class="col-md-12">
                                          <div class="fileinput fileinput-new" data-provides="fileinput">
                                              <div class="fileinput-preview thumbnail " data-trigger="fileinput" style="width: 200px; height: 200px;"> </div>
                                              <div>
                                                  <span class="btn red btn-outline btn-file">
                                                      <span class="fileinput-new"> انتخاب  </span>
                                                      <span class="fileinput-exists">تغییر  </span>
                                                      <input type="file" name="Emp_photo" required="required"> </span>
                                                  <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                              </div>
                                          </div>

                                      </div>

                      </div>

                  </div>
                  <!-- END PAGE HEADER-->
               <!--  <div class="col-md-12" style="border:solid purple 1px">

                      <div class="col-md-4" >

                      </div>
                </div> -->
                
                <div class="row" style="margin-top: 20px" >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center;font-size: 20px">سکونت اصلی</label>
                              </div>

                               <div class="form-group col-md-12" >
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ولایت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                 <select class="form-control" required="required " name="Addr_Province">

                                                      <option value="">ولایات</option>

                                                  <?php foreach (  $province as $key ) {?>
                                                    <option value="<?=$key->province_name?>"><?=$key->province_name?></option>
                                                  <?php } ?>   
                                                  </select>
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ناحیه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا ناحیه  را وارد نمایید."  class="form-control " name="Addr_district" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> قریه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا قریه  را وارد نمایید."  class="form-control " name="Addr_detail" />
                                      </div>
                                  </div>
                            </div>
                            <input type="hidden" name="Addr_type" value="اصلی">

                          </div>
                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center;font-size: 20px">سکونت فعلی</label>
                              </div>

                                 <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ولایت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                 <select class="form-control" required="required " name="pre_Addr_Province">
                                                <option value="">ولایات</option>

                                                  <?php foreach (  $province as $key ) {?>
                                                    <option value="<?=$key->province_name?>"><?=$key->province_name?></option>
                                                  <?php } ?>   
                                                  </select>
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ناحیه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا ناحیه  را وارد نمایید."  class="form-control " name="pre_Addr_district" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> قریه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا قریه  را وارد نمایید."  class="form-control " name="pre_Addr_detail" />
                                      </div>
                                  </div>
                            </div>
                      </div>
                      <input type="hidden" name="pre_Addr_type" value="فعلی">
                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>

                   <div class="row"  >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center ;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center;font-size: 20px">معلومات تحصیلی</label>
                              </div>

                               <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> پوهنتون

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا پوهنتون  را وارد نمایید."  class="form-control " name="Emp_education_university" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> رشته تحصیلی

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا رشته تحصیلی  را وارد نمایید."  class="form-control " name="Emp_education_field" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder">درجه تحصیلی

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                 <select class="form-control" required="required " name="Emp_education_degree">

                                                      <option value="">....</option>
                                                      <option value="تحت بکلوریا">تحت بکلوریا</option>
                                                      <option value="بکلوریا">بکلوریا</option>
                                                      <option value="فوق بکلوریا">فوق بکلوریا</option>
                                                      <option value="لیسانس">لیسانس</option>
                                                      <option value="ماستر">ماستر</option>
                                                      <option value="دکتور">دکتور</option>
                                                  </select>
                                      </div>
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6">
                              <div class="col-md-12" style="text-align: center ;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center;font-size: 20px">معلومات اقارب</label>
                              </div>

                                <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا اسم  را وارد نمایید."  class="form-control " name="Emp_relatives_name" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> شماره تماس

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا شماره تماس  را وارد نمایید."  class="form-control " name="Emp_relatives_telephone" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> محل وظیفه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا محل وظیفه  را وارد نمایید."  class="form-control " name="Emp_relatives_work_place" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> قرابت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا محل وظیفه  را وارد نمایید."  class="form-control " name="Emp_relatives_relation" />
                                      </div>
                                  </div>
                            </div>
                      </div>

                   </div>
                  <div class="row" >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:lightblue;margin-bottom: 20px ">
                                   <label style="font-weight:bolder;text-align: center;font-size: 20px">معلومات ضمانت کننده</label>
                              </div>

                               <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم 

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا اسم  را وارد نمایید."  class="form-control " name="Emp_guarantor_name" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> وظیفه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا وظیفه  را وارد نمایید."  class="form-control " name="Emp_guarantor_job" />
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ارگان مربوطه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا ارگان مربوطه  را وارد نمایید."  class="form-control " name="Emp_guarantor_work_place" />
                                      </div>
                                  </div>
                            </div>
                              <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder">شماره تماس

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا شماره تماس  را وارد نمایید."  class="form-control " name=" Emp_guarantor_telephone" />
                                      </div>
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6">
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center;font-size: 20px">معلومات اداری کارمند</label>
                              </div>

                                <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> دیپارتمنت مربوطه
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                  <select class="form-control" required="required " name="Department_id">

                                                      <option value="">....</option>
                                                     <?php foreach (  $Department as $key ) {?>
                                                    <option value="<?=$key->Department_id?>"><?=$key->Dept_name?></option>
                                                  <?php } ?>  
                                                  </select>
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> موقف

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                  <select class="form-control" required="required " name="Position_id">

                                                      <option value="">....</option>
                                                      <?php foreach (  $Position as $key ) {?>
                                                      <option value="<?=$key->Position_id?>"><?=$key->Posi_name?></option>
                                                      <?php } ?>  
                                                  </select>
                                      </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> عنوان وظیفه

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا عنوان وظیفه  را وارد نمایید."  class="form-control " name="Emp_job_title" />
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم سوپروایزر

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا  اسم سوپروایزر  را وارد نمایید."  class="form-control " name="Emp_supervisor_name" />
                                      </div>
                                  </div>
                            </div>
                             <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> معاش ماهوار

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا  معاش ماهوار  را وارد نمایید."  class="form-control " name="Emp_monthly_salary" />
                                      </div>
                                  </div>
                            </div>

                      </div>

                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>
                   <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:lightblue;margin-bottom: 20px">
                          <label style="font-weight:bolder;text-align: center;font-size: 20px">موقعیت وظیفوی کارمند</label>
                     </div>
                   <div class="row">
                    
                          <div class="col-md-6 col-xs-6" >


                               <div class=" col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> نوعیت کارمند

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <div class="col-md-8">
                                      <div class="md-radio-inline">
                                                  <div class="md-radio has-error">
                                                      <input type="radio" id="radio60" name="Emp_type" class="md-radiobtn" value="ساحوی">
                                                      <label for="radio60" style="font-weight: bolder;color:black;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> ساحوی </label>
                                                  </div>
                                                  <div class="md-radio has-warning">
                                                      <input type="radio" id="radio61" name="Emp_type" class="md-radiobtn" value="مرکزی"  checked>
                                                      <label for="radio61" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box" ></span> مرکزی </label>
                                                  </div>

                                              </div>
                                  </div>  




                                  
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6" >

                            <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> موقعیت وظیفه
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا موقعیت وظیفه را وارد نمایید."  class="form-control " name="Emp_work_place" />
                                      </div>
                                  </div>
                            </div>

                               
                      </div>


                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>
                        <div class="form-actions" style="margin-top: 20px">
                            <div class="row">
                                <div class="col-md-offset-10 col-md-2">
                                  <!-- <button type="button" class="btn default">بازگشت</button> -->
                                    <button type="submit" class="btn green col-md-12" value="add">ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->









</div>
</div>
</div>
<script src="<?=base_url();?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">

jQuery(document).ready(function() {
   var ID = $("#ID").val();
      if(ID=="not"){
          window.alert("good time");
          $("#submit").css("");
      }
      $.ajax({
          type: "POST",
          url: "<?=base_url();?>index.php/EmployeeController/getRondamEmployeeID",
          dataType: "JSON",
          success: function(data) {
              if (data.length==0){
                $("#ID").val('MA-0001');
              }
              for(var i = 0; i < data.length; i++){
                   $("#ID").val('MA-000'+(parseInt(data[i]['Employee_id'])+1));
               }
          },
          error: function(err) {
            window.alert("موجود نسیت");
          }
      });
});
function ID(){
  var ID = $("#ID").val();
      if(ID=="not"){
          window.alert("good time");
          $("#submit").css("");
      }
      $.ajax({
          type: "POST",
          url: "<?=base_url();?>index.php/EmployeeController/getRondamEmployeeID",
          dataType: "JSON",
          success: function(data) {
              if (data.length==0){
                $("#ID").val('MA-0001');
              }
              for(var i = 0; i < data.length; i++){
                   $("#ID").val('MA-000'+(parseInt(data[i]['Employee_id'])+1));
               }
          },
          error: function(err) {
            window.alert("موجود نسیت");
          }
      });

}
setInterval(ID,'1000');

</script>

 
 <script type="text/javascript">
    var objCal2 = new AMIB.persianCalendar('Emp_start_date', {
            initialDate: '1398/2/2',
        }
        );
 </script>