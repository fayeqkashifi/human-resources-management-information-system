
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
                            <span>ویرایش کارمند</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                <div class="invoice-content-2 " >
                  <?php foreach ($data as $row) { ?>
                  
                  <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>EmployeeController/EmployeeUpdate" enctype="multipart/form-data"  class="form-horizontal">
                  <div class="row" style="border:1px solid black">
                      <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                               <label style="font-weight:bolder;text-align: center;">معلومات کارمند</label>
                       </div>
                       <div class="col-md-9" >

                           <div class="form-group col-md-6">
                                  <label class="control-label col-md-4" style="font-weight:bolder">ID
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" readonly="readonly" required="required" value="<?=$row->Emp_ID?>" placeholder="لطفا ای دی  را وارد نمایید."  class="form-control " name="Emp_ID" />
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
                                          <input type="text" required="required" value="<?=$row->Emp_name?>" placeholder="لطفا اسم  را وارد نمایید."  class="form-control " name="Emp_name" />
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
                                          <input type="text" required="required"  value="<?=$row->Emp_father_name?>" placeholder="لطفا ولد  را وارد نمایید."  class="form-control " name="Emp_father_name" />
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
                                          <input type="text" required="required" value="<?=$row->Emp_last_name?>" placeholder="لطفا تخلص  را وارد نمایید."  class="form-control " name="Emp_last_name" />
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
                                                      <input type="radio" id="radio53" name="Emp_gender" class="md-radiobtn" value="1" <?php if ($row->Emp_gender==1) { echo "checked='checked'"; } ?> >
                                                      <label for="radio53" style="font-weight: bolder;color:black;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> مذکر </label>
                                                  </div>
                                                  <div class="md-radio has-info">
                                                      <input type="radio" id="radio54" name="Emp_gender" class="md-radiobtn" value="2" <?php if ($row->Emp_gender==2) { echo "checked='checked'"; } ?> >
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
                                                      <input type="radio" id="radio56" name="Emp_status" class="md-radiobtn" value="1" <?php if ($row->Emp_status==1) { echo "checked='checked'"; } ?>>
                                                      <label for="radio56" style="font-weight: bolder;color:black;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> مجرد </label>
                                                  </div>
                                                  <div class="md-radio has-warning">
                                                      <input type="radio" id="radio57" name="Emp_status" class="md-radiobtn" value="2"  <?php if ($row->Emp_status==2) { echo "checked='checked'"; } ?>>
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
                                           <input type="text" class="form-control pdate" id="Emp_start_date" placeholder="لطفا ای دی  را وارد نمایید."  name="Emp_start_date"  value="<?=$row->Emp_start_date?>">
                                         
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
                                          <input type="text" required="required" placeholder="لطفا نمبر تذکره  را وارد نمایید."  class="form-control " name="Emp_Tazkira_number" value="<?=$row->Emp_Tazkira_number?>" />
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
                                          <input type="text" required="required" placeholder="لطفا شماره تماس  را وارد نمایید."  class="form-control " name="Emp_telephone" value="<?=$row->Emp_telephone?>" />
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
                                                      <option value="<?=$row->Emp_Blood_group?>"><?=$row->Emp_Blood_group?></option>
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
                                      <input type="hidden" name="previose_photo" value="<?=$row->Emp_photo?>">
                                      <div class="col-md-12">
                                          <div class="fileinput fileinput-new" data-provides="fileinput">
                                              <div class="fileinput-preview thumbnail " data-trigger="fileinput" style="width: 200px; height: 200px;">
                                                <img src="<?=base_url()?><?=$row->Emp_photo?>">
                                               </div>
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
                <hr style="border:solid black 1px">
                <div class="row"  >
                         
                          <div class="col-md-6 col-xs-12" >
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">سکونت اصلی</label>
                              </div>
                               <?php foreach ($current as $key) {?>
                               <input type="hidden" name="current_id" value="<?=$key->Address_id?>">
                               <div class="form-group col-md-12" >
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ولایت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                 <select class="form-control"  required="required " name="Addr_Province">

                                                      <option value="<?=$key->Addr_Province?>"><?=$key->Addr_Province?></option>

                                                  <?php foreach (  $province as $k ) {?>
                                                    <option value="<?=$k->province_name?>"><?=$k->province_name?></option>
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
                                          <input type="text" required="required" placeholder="لطفا ناحیه  را وارد نمایید."  class="form-control " name="Addr_district" value="<?=$key->Addr_district?>" />
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
                                          <input type="text" required="required" placeholder="لطفا قریه  را وارد نمایید."  class="form-control " name="Addr_detail" value="<?=$key->Addr_detail?>" />
                                      </div>
                                  </div>
                            </div>
                            <input type="hidden" name="Addr_type" value="اصلی">
                            <?php } ?>
                          </div>
                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">سکونت فعلی</label>
                              </div>
                               <?php foreach ($present as $key) {?>
                               <input type="hidden" name="present_id" value="<?=$key->Address_id?>">
                                 <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> ولایت

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                 <select class="form-control" required="required " name="pre_Addr_Province">
                                                <option value="<?=$key->Addr_Province?>"><?=$key->Addr_Province?></option>

                                                  <?php foreach (  $province as $k ) {?>
                                                    <option value="<?=$k->province_name?>"><?=$k->province_name?></option>
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
                                          <input type="text" required="required" placeholder="لطفا ناحیه  را وارد نمایید."  class="form-control " name="pre_Addr_district" value="<?=$key->Addr_district?>" />
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
                                          <input type="text" required="required" placeholder="لطفا قریه  را وارد نمایید."  class="form-control " name="pre_Addr_detail" value="<?=$key->Addr_detail?>" />
                                      </div>
                                  </div>
                            </div>
                      </div>
                      <input type="hidden" name="pre_Addr_type" value="فعلی">
                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                      <?php } ?>
                  </div>

                   <div class="row"  >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center ;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">معلومات تحصیلی</label>
                              </div>

                               <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> پوهنتون

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا پوهنتون  را وارد نمایید."  class="form-control " name="Emp_education_university"  value="<?=$row->Emp_education_university?>"/>
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
                                          <input type="text" required="required" placeholder="لطفا رشته تحصیلی  را وارد نمایید."  class="form-control " name="Emp_education_field" value="<?=$row->Emp_education_field?>" />
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

                                                      <option value="<?=$row->Emp_education_degree?>"><?=$row->Emp_education_degree?></option>
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
                              <div class="col-md-12" style="text-align: center ;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">معلومات اقارب</label>
                              </div>

                                <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا اسم  را وارد نمایید."  class="form-control " name="Emp_relatives_name" value="<?=$row->Emp_relatives_name?>" />
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
                                          <input type="text" required="required" placeholder="لطفا شماره تماس  را وارد نمایید."  class="form-control " name="Emp_relatives_telephone" value="<?=$row->Emp_relatives_telephone?>" />
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
                                          <input type="text" required="required" placeholder="لطفا محل وظیفه  را وارد نمایید."  class="form-control " name="Emp_relatives_work_place" value="<?=$row->Emp_relatives_work_place?>" />
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
                                          <input type="text" required="required" placeholder="لطفا محل وظیفه  را وارد نمایید."  class="form-control" value="<?=$row->Emp_relatives_relation?>" name="Emp_relatives_relation" />
                                      </div>
                                  </div>
                            </div>
                      </div>

                   </div>
                  <div class="row" >

                          <div class="col-md-6 col-xs-6" >
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:silver;margin-bottom: 20px ">
                                   <label style="font-weight:bolder;text-align: center">معلومات ضمانت کننده</label>
                              </div>

                               <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> اسم 

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                          <input type="text" required="required" placeholder="لطفا اسم  را وارد نمایید."  class="form-control " name="Emp_guarantor_name" value="<?=$row->Emp_guarantor_name?>"/>
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
                                          <input type="text" required="required" placeholder="لطفا وظیفه  را وارد نمایید."  class="form-control " name="Emp_guarantor_job" value="<?=$row->Emp_guarantor_job?>" />
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
                                          <input type="text" required="required" placeholder="لطفا ارگان مربوطه  را وارد نمایید."  class="form-control " name="Emp_guarantor_work_place" value="<?=$row->Emp_guarantor_work_place?>" />
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
                                          <input type="text" required="required" placeholder="لطفا شماره تماس  را وارد نمایید."  class="form-control " name=" Emp_guarantor_telephone" value="<?=$row->Emp_guarantor_telephone?>" />
                                      </div>
                                  </div>
                            </div>


                          </div>
                          <div class="col-md-6 col-xs-6">
                              <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                                   <label style="font-weight:bolder;text-align: center">معلومات اداری کارمند</label>
                              </div>

                                <div class="form-group col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> دیپارتمنت مربوطه
                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                      <div class="input-icon right">
                                          <i class="fa"></i>
                                                  <select class="form-control" required="required " name="Department_id">
                                                     <?php foreach (  $Department as $key ) {?>
                                                    <option value="<?=$key->Department_id?>" <?php if ($row->Department_id==$key->Department_id) {echo "selected='selected'";} ?>><?=$key->Dept_name?></option>
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
                                                  <select class="form-control"  required="required " name="Position_id">
                                                      <?php foreach (  $Position as $key ) {?>
                                                      <option value="<?=$key->Position_id?>" <?php if ($row->Position_id==$key->Position_id) {echo "selected='selected'";} ?> ><?=$key->Posi_name?></option>
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
                                          <input type="text" required="required" placeholder="لطفا عنوان وظیفه  را وارد نمایید."  class="form-control " name="Emp_job_title" value="<?=$row->Emp_job_title?>" />
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
                                          <input type="text" required="required" placeholder="لطفا  اسم سوپروایزر  را وارد نمایید."  class="form-control " name="Emp_supervisor_name" value="<?=$row->Emp_supervisor_name?>" />
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
                                          <input type="text" required="required" placeholder="لطفا  معاش ماهوار  را وارد نمایید."  class="form-control " name="Emp_monthly_salary" value="<?=$row->Emp_monthly_salary?>" />
                                      </div>
                                  </div>
                            </div>

                      </div>

                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>
                   <div class="row">
                     <div class="col-md-12" style="text-align: center;border:solid black 1px;background-color:silver;margin-bottom: 20px">
                          <label style="font-weight:bolder;text-align: center">موقعیت وظیفوی کارمند</label>
                     </div>
                          <div class="col-md-6 col-xs-6" >


                               <div class=" col-md-12">
                                  <label class="control-label col-md-4" style="font-weight:bolder"> نوعیت کارمند

                                      <span class="required"> * </span>
                                  </label>
                                  <div class="col-md-8">
                                    <div class="col-md-8">
                                      <div class="md-radio-inline">
                                                  <div class="md-radio has-error">
                                                      <input type="radio" id="radio60" name="Emp_type" class="md-radiobtn" value="ساحوی" <?php if ($row->Emp_type=='ساحوی') { echo "checked='checked'"; } ?>>
                                                      <label for="radio60" style="font-weight: bolder;color:black;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> ساحوی </label>
                                                  </div>
                                                  <div class="md-radio has-warning">
                                                      <input type="radio" id="radio61" name="Emp_type" class="md-radiobtn" value="مرکزی"  <?php if ($row->Emp_type=='مرکزی') { echo "checked='checked'"; } ?>>
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
                                          <input type="text" required="required" placeholder="لطفا موقعیت وظیفه را وارد نمایید."  class="form-control " name="Emp_work_place" value="<?=$row->Emp_work_place?>" />
                                      </div>
                                  </div>
                            </div>

                               
                      </div>


                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                      <input type="hidden" name="hidden_btn" value="<?=$row->Employee_id?>">>
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
                    <?php } ?>
                    <!-- END FORM-->









</div>
</div>
</div>

 <script type="text/javascript">
    var objCal2 = new AMIB.persianCalendar('Emp_start_date'
        );
 </script>