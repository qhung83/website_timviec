
<!-- <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">NationalID:</label>

    <div class="col-md-8"> 
       <input class="form-control input-sm" id="NATIONALID" name="NATIONALID" placeholder=
          "00-000000000000" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> -->
<div class="form-group">
	<div class="col-md-11">
	<label class="col-md-4 control-label" for=
		"FNAME">Họ:</label>

		<div class="col-md-8">
		  <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
		   <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
		      "nhập họ" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"LNAME">Tên:</label>

		<div class="col-md-8">
		  <input name="deptid" type="hidden" value="">
		  <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
		      "nhập tên"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		  </div>
	</div>
</div>

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"MNAME">Tên đệm:</label>

		<div class="col-md-8">
		  <input name="deptid" type="hidden" value="">
		  <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
		      "nhập tên đệm    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		   <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
		      "Description" type="text" value=""> -->
		</div>
	</div>
</div> 

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"ADDRESS">Địa chỉ:</label>

		<div class="col-md-8">

		 <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
		    "Nhập địa chỉ" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
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
  <div class="rows">
    <div class="col-md-11"> 
      <div class="col-md-4">
        <label class="col-lg-11 control-label">Ngày sinh</label>
      </div>

      <div class="col-lg-3">
        <select class="form-control input-sm" name="month">
          <option>tháng</option>
          <?php

             $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 11 );    
          
        
            foreach ($mon as $month => $value ) {
              
                  # code...
                   echo '<option value='.$value.'>'.$month.'</option>';
                } 
          ?>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="form-control input-sm" name="day">
          <option>ngày</option>
        <?php 
          $d = range(31, 1);
          foreach ($d as $day) {
            echo '<option value='.$day.'>'.$day.'</option>';
          }
        
        ?>
          
        </select>
      </div>

      <div class="col-lg-3">
        <select class="form-control input-sm" name="year">
          <option>năm</option>
        <?php 
          $years = range(2010, 1900);
          foreach ($years as $yr) {
            echo '<option value='.$yr.'>'.$yr.'</option>';
          }
        
        ?>
        
        </select>
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
            "nhập nơi sinh" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
      </div>
    </div>
  </div> 


 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">SĐT:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
          "nhập sđt" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 

 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "CIVILSTATUS">Tình trạng hôn nhân:</label>

    <div class="col-md-8">
      <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
          <option value="none" >Lựa chọn</option>
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
    "EMAILADDRESS">Email:</label> 
    <div class="col-md-8">
       <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="nhập email"   autocomplete="false"/> 
    </div>
  </div>
</div>  
<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "USERNAME">Tài khoản:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
          "nhập tài khoản"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "PASS">Mật khẩu:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="PASS" name="PASS" placeholder=
          "Nhập mật khẩu" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
       <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
          "Description" type="text" value=""> -->
    </div>
  </div>
</div> 
<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "DEGREE">Trình độ học vấn:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
          "..."    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
      </div>
  </div>
</div> 
<div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "d"></label>  

      <div class="col-md-8">
        <label><input type="checkbox"> Bằng cách Đăng ký, bạn đồng ý với <a href="#">điều khoản và điều kiện</a></label>
     
     </div>
    </div>
</div>   
