<?php
include('config/configuration.php');
include('include/header.php')?> 
<!-- CONTENT START -->
<div class="page-content">
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
        <div class="overlay-main site-bg-secondry opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="site-text-primary">Services</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.php">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
</div> 
<div class="section-full  p-t80 p-b50 bg-cover" style="background-image:url(images/background/bg-7.jpg)">   
    <div class="section-content">
        <div class="container">
            <div class="contact-one">
                <div class="wt-bnr-inr-entry">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">     
                        <h2>Services</h2>                                         
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <?php
                            $sql="SELECT * from services";
                            $result=mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                                ?>
                                <div class="col-lg-4 col-md-6 m-b50">
                                    <div class="service-border-box">
                                      <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                          <span  class="s-title-one"><?php echo $row['title'];?></span>   
                                        </div>
                                      <div>
                                          <p><?php echo $row['small_desc'];?></p>
                                          <img style="height:20%; width:80%;" src="<?php echo $row['image'];?>">
                                      </div>
                                                                                     
                              </div>
                          </div>
                      </div>
                      <?}?>                     
                  </div>                              
              </div>
          </div>
      </div>
  </div>



  <?php 
  include('include/footer.php')
  ?> 

