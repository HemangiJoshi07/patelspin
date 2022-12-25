<?php
    include('config/configuration.php');
    include('include/header.php')?> 
    <script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checkusername();
        arrval[1]=checkemail();
        arrval[2]=checkphone();
        arrval[3]=checksubject();             
        arrval[4]=checkmessage();
        var i;
        _blk=true;
        for(i=0;i<arrval.length;i++){
            if(arrval[i]==false){
                _blk=false;
            }
        }
        if(_blk==true){
            return true;
        }
        else{
            return false;
        }
        return false;
    }

    function checkusername()
    {
        
        if(document.getElementById("username").value == "")
        {    
        document.getElementById("lblusername").innerHTML="Please enter name..";
        return false;
        }
        else
        {
        document.getElementById("lblusername").innerHTML="";
        return true;
        }
    }   
    function checkemail()
    {
        
        if(document.getElementById("email").value == "")
        {    
        document.getElementById("lblemail").innerHTML="Please enter email..";
        return false;
        }
        else
        {
        document.getElementById("lblemail").innerHTML="";
        return true;
        }
    }   
    function checkphone()
    {
        
        if(document.getElementById("phone").value == "")
        {    
        document.getElementById("lblphone").innerHTML="Please enter phone..";
        return false;
        }
        else
        {
        document.getElementById("lblphone").innerHTML="";
        return true;
        }
    }   
    function checksubject()
    {
        
        if(document.getElementById("subject").value == "")
        {    
        document.getElementById("lblsubject").innerHTML="Please enter subject..";
        return false;
        }
        else
        {
        document.getElementById("lblsubject").innerHTML="";
        return true;
        }
    }   
    function checkmessage()
    {
        
        if(document.getElementById("message").value == "")
        {    
        document.getElementById("lblmessage").innerHTML="Please enter message..";
        return false;
        }
        else
        {
        document.getElementById("lblmessage").innerHTML="";
        return true;
        }
    }   
</script>>
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary">Contact Us</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->                            
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <!-- BREADCRUMB ROW END -->                        
                </div>
            </div>
        </div>
                <!-- INNER PAGE BANNER END -->
        <!-- SECTION CONTENTG START -->
        <!-- CONTACT FORM -->
        <div class="section-full  p-t80 p-b50 bg-cover" style="background-image:url(images/background/bg-7.jpg)">   
            <div class="section-content">
                <div class="container">
                    <div class="contact-one">
                        <!-- CONTACT FORM-->
                        <div class="row  d-flex justify-content-center flex-wrap">
                            <div class="col-lg-6 col-md-6 m-b30">
                                <form  class="cons-contact-form" method="post" action="http://thewebmax.com/industro/form-handler2.php" onSubmit="return verifylogin()">
                                    <!-- TITLE START -->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Contact Form</div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                        <h2>Get In Touch</h2>
                                    </div>                                                                 
                                    <!-- TITLE END --> 

                                    <div class="row">
                                     <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input name="username" type="text" id="username" class="form-control" placeholder="Name">
                                             <span id="lblusername"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                         <input name="email" type="text" class="form-control"  placeholder="Email" id="email">
                                         <span id="lblemail"></span>
                                     </div>
                                 </div>

                                 <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="text" class="form-control"  placeholder="Phone"><span id="lblphone"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                       <input name="subject" type="text" id="subject" class="form-control"  placeholder="Subject"><span id="lblsubject"></span>
                                   </div>
                               </div>

                               <div class="col-md-12">
                                <div class="form-group">
                                 <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"></textarea><span id="lblmessage"></span>
                             </div>
                         </div>

                         <div class="col-md-12">
                            <button type="submit" class="site-button site-btn-effect">Submit Now</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-md-6 m-b30">
                <div class="contact-info">
                    <div class="contact-info-inner">

                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div>Contact info</div>
                                <div class="sep-leaf-right"></div>
                            </div>
                            <h2>Our Full Info</h2>
                        </div>                                                                                           
                        <!-- TITLE END--> 

                        <div class="contact-info-section" style="background-image:url(images/background/bg-map2.png);">  
                           <?php
                             $query= "SELECT * FROM general";
                             $result=mysqli_query($conn,$query);
                             $row=mysqli_fetch_assoc($result);
                         ?>                                              
                         <div class="wt-icon-box-wraper left m-b30">    
                            <div class="icon-content">
                                <h3 class="m-t0 site-text-primary">Phone number</h3>
                                <p><?php echo $row['mobile_no'];?></p>
                            </div>
                        </div>

                        <div class="wt-icon-box-wraper left m-b30">

                            <div class="icon-content">
                                <h3 class="m-t0 site-text-primary">Email address</h3>
                                <p><?php echo $row['email'];?></p>
                            </div>
                        </div>

                        <div class="wt-icon-box-wraper left m-b30">

                            <div class="icon-content">
                                <h3 class="m-t0 site-text-primary">Address info</h3>
                                <p><?php echo $row['address'];?></p>
                            </div>
                        </div>

                        <div class="wt-icon-box-wraper left">

                            <div class="icon-content">
                                <h3 class="m-t0 site-text-primary">Opening Hours</h3>
                                <ul class="list-unstyled m-b0">
                                  <li><?php echo $row['time1'];?></li>
                                  <li><?php echo $row['time2'];?></li>
                              </ul>
                          </div>
                      </div>

                  </div>

              </div>
          </div>
      </div>

  </div>
</div>

</div>
</div>
</div>

<!-- GOOGLE MAP -->
<div class="section-full bg-white p-tb80">   
    <div class="section-content">
        <div class="container">
            <div class="gmap-outline">
                <div id="gmap_canvas2" class="google-map"></div>
            </div>
        </div>
    </div>
</div>           

</div>
<!-- CONTENT END -->

<?php 
    include('include/footer.php')
?> 