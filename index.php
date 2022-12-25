<?php
include('config/configuration.php');
include('include/header.php');
$sql="SELECT * from home_slide_show";
$result=mysqli_query($conn, $sql);
?>   
<!-- CONTENT START -->
<div class="page-content">

 <!-- SLIDER START --> 
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style="z-index:-1;">
    <?php
    $i=0;
    while ($row1 = mysqli_fetch_array($result)){
      ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" <?php if($i==1){?>class="active"<?}?>></li>
      <?
      $i++;
    }
    ?>
  </ol>
  <div class="carousel-inner">
    <?
    $i=1;    
    $sql="SELECT * from home_slide_show";
    $result=mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){
      ?>
      <div class="carousel-item <?php if($i==1){echo 'active';}?>">
        <div class="content">
          <h1><?php echo $row['title1'];?></h1>
          <h3><?php echo $row['smalldiscription'];?></h3>
        </div>
        <img style="width:1919px; height: 799px;" class="d-block w-100" src="<?php echo $row['image'];?>" alt="First slide">
      </div>
      <?
      $i++;
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- SLIDER END -->

<br clear="all">



<!-- TOP HALF SECTION START -->
<div class="section-full small-device p-b40 top-half-section-outer">

  <div class="container">
    <!-- IMAGE CAROUSEL START -->    
    <div class="section-content clearfix">
      <div class="top-half-section">                
        <div class="row d-flex justify-content-center">
          <?php
          $i=1;
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
                  <div class="service-box-content">
                    <p><?php echo $row['small_desc'];?></p>
                    <a href="contact-1.html" class="site-button-link">Read More</a>
                  </div>
                  <div class="wt-icon-box-wraper">
                    <div class="wt-icon-box-md site-bg-primary">
                      <span class="icon-cell text-white"><i class="<?php if($i==1){echo 'flaticon-industry';} ?>"></i></span>
                      <span class="icon-cell text-white"><i class="<?php if($i==2){echo 'flaticon-conveyor';} ?>"></i></span>
                      <span class="icon-cell text-white"><i class="<?php if($i==3){echo 'flaticon-robotic-arm';} ?>"></i></span>
                    </div>
                    <div class="wt-icon-number"><span>0<?php echo $i;?></span></div>
                  </div>                                                      
                </div>
              </div>
            </div>
            <?
            $i++;
          }
          ?>
        </div>          
      </div>
    </div>  
  </div>
</div>
<!-- TOP HALF SECTION END -->
<!-- ABOUT SECTION START -->
<div class="section-full welcome-section-outer">
 <div class="welcome-section-top bg-white p-t80 p-b50">
  <div class="container">
   <div class="row d-flex justify-content-center">

     <div class="col-lg-6 col-md-12 m-b30">
      <div class="welcom-to-section">
        <!-- TITLE START-->
        <?php
        $sql="SELECT * from cms_page";
        $result=mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <div class="left wt-small-separator-outer">
          <div class="wt-small-separator site-text-primary">
            <div  class="sep-leaf-left"></div>
            <div><?php echo $row['title1'];?></div>
            <div  class="sep-leaf-right"></div>
          </div>
        </div>
        <h2><?php echo $row['title2'];?></h2>
        <ul class="site-list-style-one">
         <?php echo $row['full_desc'];?>
       </ul>
       <p><?php echo $row['small_desc'];?></p> 
       <div class="welcom-to-section-bottom d-flex justify-content-between">
        <div class="welcom-btn-position"><a href="#" class="site-button-secondry site-btn-effect">More About</a></div>
      </div>   
    </div>
  </div>

  <div class="col-lg-6 col-md-12 m-b30">
   <div class="img-colarge2">
     <div class="colarge-2 slide-right"><img src="<?php echo $row['image1'];?>" alt=""></div>
     <div class="colarge-2-1"><img src="<?php echo $row['image2'];?>" alt=""></div>
     <div class="since-year-outer2"><div class="since-year2"><span>Since</span><strong>2019</strong></div></div>
   </div>
 </div>                              
</div>
</div> 
</div>
</div>   
<!-- ABOUT SECTION  SECTION END -->   
<!-- TESTIMONIAL SECTION START -->
<div class="section-full  p-t80 p-b50 bg-white testimonial-2-outer bg-bottom-right bg-no-repeat" style="background-image:url(images/background/bg-5.png)">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 col-md-12 m-b30">
        <!-- TITLE START-->
        <div class="left wt-small-separator-outer">
          <div class="wt-small-separator site-text-primary">
            <div  class="sep-leaf-left"></div>
            <div>What our client say</div>
            <div  class="sep-leaf-right"></div>
          </div>
          <h2>Happy WIth Customers & Clients</h2>
        </div>
        <!-- TITLE END-->
        <div class="testimonial-2-content-outer">
          <div class="testimonial-2-content owl-carousel  owl-btn-bottom-right long-arrow-next-prev">
            <?php
            $sql="SELECT * from testimonial";
            $result=mysqli_query($conn, $sql);
            $i=1;   
            while($row = mysqli_fetch_array($result)){                  
              ?>
              <div class="item">
                <div class="testimonial-2 bg-white">
                  <div class="testimonial-content">
                    <div class="testimonial-text">
                      <i class="fa fa-quote-left"></i>
                      <p><?php echo $row['small_desc'];?></p>
                    </div>
                    <div class="testimonial-detail clearfix">
                      <div class="testimonial-pic-block"> 
                        <div class="testimonial-pic">
                          <img src="<?php echo $row['image'];?>" alt="">
                        </div>
                      </div>                                                 
                      <div class="testimonial-info">
                        <span class="testimonial-name  title-style-2 site-text-secondry"><?php echo $row['title1'];?></span>
                        <span class="testimonial-position title-style-2 site-text-primary"><?php echo $row['title2'];?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?}?>
            </div>
          </div> 

        </div>
        <div class="col-lg-6 col-md-12 m-b30">

         <div class="home-contact-section site-bg-primary m-b30 p-a40">
          <form class="cons-contact-form" method="post" action="http://thewebmax.com/industro/form-handler2.php">

            <!-- TITLE START-->
            <div class="wt-small-separator-outer text-white">
              <h2>Feel free to get in touch!</h2>
            </div>
            <!-- TITLE END-->

            <div class="row">
             <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <input name="username" type="text" required class="form-control" placeholder="Name">
              </div>
            </div>

            <div class="col-md-6 col-sm-6">
              <div class="form-group">
               <input name="email" type="text" class="form-control" required placeholder="Email">
             </div>
           </div>

           <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input name="phone" type="text" class="form-control" required placeholder="Phone">
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="form-group">
             <input name="subject" type="text" class="form-control" required placeholder="Subject">
           </div>
         </div>

         <div class="col-md-12">
          <div class="form-group">
           <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
         </div>
       </div>

       <div class="col-md-12">
        <button type="submit" class="site-button-secondry site-btn-effect">Send us a message</button>
      </div>

    </div>
  </form>                                        
</div>

</div>
</div>
</div>
<div class="hilite-large-title title-style-2">
 <span>Testimonial</span>
</div>
</div>
<!-- TESTIMONIAL SECTION END -->  

<!-- OUR TEAM START -->
<div class="section-full p-t80 p-b50 bg-white team-bg-section-outer bg-no-repeat bg-center" style="background-image:url(images/background/bg-map.png)">
  <div class="container">
    <div class="section-content">

      <!-- TITLE START-->
      <div class="section-head center wt-small-separator-outer text-center">
        <div class="wt-small-separator site-text-primary">
          <div  class="sep-leaf-left"></div>
          <div>Our Products</div>
          <div  class="sep-leaf-right"></div>
        </div>
        <h2>We will serve you with the best of our capacity by Prouducts</h2>
      </div>
      <!-- TITLE END-->

      <div class="section-content">
        <div class="row justify-content-center">

         <div class="owl-carousel featured-products owl-btn-vertical-center">

          <!-- COLUMNS 1 -->
          <?php
          $sql="SELECT * from products";
          $result=mysqli_query($conn, $sql);
          $i=1;   
          while($row=mysqli_fetch_array($result)){
            ?>        
            <div class="item">
              <div class="wt-box wt-product-box   overflow-hide">
                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                  <img src="<?php echo $row['image'];?>" alt="">
                  <div class="overlay-bx">
                    <div class="overlay-icon">
                      <a href="javascript:void(0);">
                        <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                      </a>
                      <a class="mfp-link" href="javascript:void(0);">
                        <i class="fa fa-heart wt-icon-box-xs"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="wt-info  text-center">
                 <div class="p-a20 bg-white">
                  <h3 class="wt-title">
                    <?php echo $row['title'];?>
                  </h3>
                  <span class="price">                                                
                   <ins>
                    <span><span class="Price-currencySymbol">$</span><?php echo $row['price'];?></span>
                  </ins>
                </span>
              </div>
            </div>
          </div>
        </div>
        <?
      }
      ?>

    </div>                                                  

  </div>
</div>      

</div>
</div>
</div>   
<!-- OUR TEAM SECTION END --> 

<!-- SELF INTRO SECTION START -->
<div class="section-full self-intro-section-outer overlay-wraper" style="background-image:url(images/background/bg-6.jpg)">                                 
  <div class="overlay-main site-bg-secondry opacity-09"></div>


  <div class="self-intro-bottom p-t80 p-b80">
    <div class="container">
      <div class="row justify-content-end">

        <div class="col-lg-6 col-md-6">
          <div class="self-info-detail">
           <?php
           $query= "SELECT * FROM  general";
           $result=mysqli_query($conn,$query);
           $row=mysqli_fetch_assoc($result);
           ?>
           <div class="wt-icon-box-wraper p-b10 left">
            <div class="icon-md m-b20">
              <span class="icon-cell site-text-primary"><i class="flaticon-call"></i></span>
            </div>
            <div class="icon-content text-white">
              <h3 class="wt-tilte">Have a question? call us now</h3>
              <p><?php echo $row['mobile_no'];?></p>
            </div>
          </div>

          <div class="wt-icon-box-wraper p-b10  left">
            <div class="icon-md m-b20">
              <span class="icon-cell site-text-primary"><i class="flaticon-mail"></i></span>
            </div>
            <div class="icon-content text-white">
              <h3 class="wt-tilte">Need support? Drop us an Email</h3>
              <p><?php echo $row['email'];?></p>
            </div>
          </div>

          <div class="wt-icon-box-wraper  left">
            <div class="icon-md m-b20">
              <span class="icon-cell site-text-primary"><i class="flaticon-history"></i></span>
            </div>
            <div class="icon-content text-white">
              <h3 class="wt-tilte">We are open on</h3>
              <p><?php echo $row['time1'];?> </p>
              <p><?php echo $row['time2'];?></p>
            </div>
          </div>                                                                        

        </div>
      </div>                              

    </div>
  </div>
</div>  

<div class="container">
  <div class="self-intro-pic-block">
    <div class="wt-media"><img src="images/self-pic.png" alt=""></div>
  </div>
</div>

</div>   
<!-- SELF INTRO SECTION  END -->          


</div>
<!-- CONTENT END -->


<?php
include('include/footer.php')
?>