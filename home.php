  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/5.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Sự đổi mới</h3> 
          <p>Chúng tôi tạo ra các cơ hội</p> 
           
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/4.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Chuyên môn hóa</h3> 
          <p>Thành công phụ thuốc vào công việc</p> 
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Hợp tác với các nhà lãnh đạo doanh nghiệp</h3>
          <p>Phát triển các mối quan hệ chiến lược, lâu dài, thành công giữa khách hàng và nhà cung cấp, dựa trên việc đạt được các thông lệ tốt nhất và lợi thế cạnh tranh bền vững. Trong mô hình đối tác kinh doanh, các chuyên gia nhân sự làm việc chặt chẽ với các nhà lãnh đạo doanh nghiệp và các nhà quản lý tuyến để đạt được các mục tiêu chung của tổ chức.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">CÔNG TY</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Địa chỉ:<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Liên hệ:<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >VIỆC LÀM PHỔ BIẾN</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3> Đội ngũ của chúng tôi</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          &nbsp;&nbsp; Thái độ "một đội" của chúng tôi phá vỡ các silo và giúp chúng tôi tương tác hiệu quả như nhau từ C-suite đến tuyến đầu. Phong cách làm việc hợp tác của chúng tôi đề cao tinh thần đồng đội, sự tin tưởng và lòng khoan dung đối với các ý kiến ​​khác nhau. Mọi người nói với chúng tôi rằng chúng tôi là người bình dị, dễ gần và vui vẻ.<br/><br/>

          &nbsp;&nbsp;Chúng tôi có niềm đam mê với kết quả thực sự của khách hàng và một động lực hành động thực tế bắt đầu từ 8 giờ sáng Thứ Hai và không bỏ cuộc. Chúng tôi tập hợp khách hàng bằng năng lượng truyền nhiễm của mình, để tạo ra sự thay đổi.<br/><br/>

          &nbsp;&nbsp;  Và chúng tôi không bao giờ đi một mình. Chúng tôi hỗ trợ và được hỗ trợ để phát triển các câu chuyện kết quả cá nhân của riêng chúng tôi. Chúng tôi cân bằng giữa thử thách và đồng sáng tạo với khách hàng của mình, xây dựng các khả năng nội bộ cần thiết cho họ để tạo ra kết quả có thể lặp lại. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Các chương trình</span></h3>
                </div>
                <p>Nhưng để bạn có thể hiểu rằng mọi lỗi lầm sinh ra đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ sự việc, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và cũng như nó là kiến ​​trúc sư của cuộc sống may mắn. Vì không ai từ chối niềm vui bởi vì nó là niềm vui. <br><br>Nhưng phát hiện ra cái lỗi bẩm sinh này là một niềm vui, chắc chưa nghe họ tố cáo chúng tôi.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Tin mới nhất</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Mục văn bản tiêu đề Accordion #1
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Mục văn bản tiêu đề Accordion #2
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Mục văn bản tiêu đề Accordion #3
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i>Mục văn bản tiêu đề Accordion #4
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Nhưng để bạn có thể hiểu rằng mọi lỗi lầm bẩm sinh đều là niềm vui khi buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và sẽ giải thích chính những điều đã được nói bởi người phát minh ra sự thật và như nó là kiến ​​trúc sư của cuộc sống may mắn. Không có niềm vui bởi vì niềm vui.
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Lời chứng thực</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>