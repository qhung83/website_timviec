  <?php 
    $applicant = new Applicants();
    $appl = $applicant->single_applicant($_SESSION['APPLICANTID']);
  ?>
  <style type="text/css">
    .form-group {
      margin-bottom: 5px;
    }
  </style>
<form class="form-horizontal" method="POST" action="controller.php?action=edit">  
      <div class="container">  
            <div class="box-header with-border">
              <h3 class="box-title">Tài khoản</h3>
 
              <!-- /.box-tools -->
            </div> 
              <div class="form-group">
                <div class="col-md-11">
                <label class="col-md-4 control-label" for=
                  "FNAME">Họ:</label>

                  <div class="col-md-8">
                    <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                     <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                        "Firstname" type="text" value="<?php echo $appl->FNAME;?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "LNAME">tên:</label>

                  <div class="col-md-8"> 
                    <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                        "Lastname"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->LNAME;?>">
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "MNAME">Tên đệm:</label>

                  <div class="col-md-8"> 
                    <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                        "Middle Name"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->MNAME;?>"> 
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "ADDRESS">Địa chỉ:</label>

                  <div class="col-md-8">

                   <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                      "Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $appl->ADDRESS;?></textarea>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "Gender">Giới tính:</label>

                  <div class="col-md-8">
                   <div class="col-lg-5">
                      <div class="radio">
                        <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Nam</label>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="radio">
                        <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Nữ</label>
                      </div>
                    </div> 
                   
                  </div>
                </div>
              </div> 

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "BIRTHDATE">Ngày sinh:</label>

                  <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon"> 
                         <i class="fa fa-calendar"></i> 
                        </span>  
                         <input class="form-control input-sm date_picker" id="BIRTHDATE" name="BIRTHDATE" placeholder="Date of Birth" type="text"    value="<?php echo date_format(date_create($appl->BIRTHDATE),'m/d/Y');?>" required  autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>  

               <div class="form-group">
                  <div class="col-md-11">
                    <label class="col-md-4 control-label" for=
                    "BIRTHPLACE">Nơi sinh:</label>

                    <div class="col-md-8">
                      
                       <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
                          "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"><?php echo $appl->BIRTHPLACE;?></textarea>
                    </div>
                  </div>
                </div> 


               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "TELNO">SĐT:</label>

                  <div class="col-md-8">
                    
                     <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
                        "Contact No." type="text" any value="<?php echo $appl->CONTACTNO;?>" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                  </div>
                </div>
              </div> 

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "CIVILSTATUS">Tình trạng hôn nhân:</label>

                  <div class="col-md-8">
                    <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                        <option value="none" >Lụa chọn</option>
                        <option value="Single">Độc thân</option>
                        <option value="Married">Kết hôn</option>
                        <option value="Widow" >Ly hôn</option>
                        <!-- <option value="Fourth" >Fourth</option> -->
                    </select> 
                  </div>
                </div>
              </div>  

               <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "EMAILADDRESS">Email :</label> 
                  <div class="col-md-8">
                     <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="nhập email"   autocomplete="off" value="<?php echo $appl->EMAILADDRESS;?>" /> 
                  </div>
                </div>
              </div>  
              
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "DEGREE">Trình độ học vấn:</label>

                  <div class="col-md-8"> 
                    <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
                        "Educational Attainment"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" value="<?php echo $appl->DEGREE;?>">
                    </div>
                </div>
              </div>  
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "submit"></label>

                  <div class="col-md-8">
                     <button class="btn btn-primary btn-sm" name="submit" type="submit" ><span class="fa fa-save"></span> Submit </button>
                    </div>
                </div>
              </div>  
           
          </div>  
 </form>