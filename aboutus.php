<?php
    include('config/configuration.php');
    include('include/header.php')?> 
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            	<div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="site-text-primary">About Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.php">Home</a></li>
                                    <li>About Us</li>
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
                        <?php
                       $query= "SELECT * FROM `cms_page` WHERE id = 2";
                       $result=mysqli_query($conn,$query);
                       $row=mysqli_fetch_assoc($result);
                       ?>
                        <div class="contact-one">
                           <p><?php echo $row['full_desc'];?></p> 
                        </div>
                    
                    </div>
                </div>
            </div>
            
               
<?php 
include('include/footer.php')
?> 
        
        