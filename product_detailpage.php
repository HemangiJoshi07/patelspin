<?php
include('config/configuration.php');
include('include/header.php')?>

         <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            	<div class="overlay-main site-bg-secondry opacity-07"></div>
                <div class="container">
                            <?php
                            $query= "SELECT * FROM `products` WHERE id=".$_GET['id']."";
                            $result=mysqli_query($conn,$query);
                            $row=mysqli_fetch_assoc($result);
                            ?>
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="site-text-primary"><?php echo $row['title'];?></h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                                 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.php">Home</a></li>
                                    <?php
                                    $catname="";
                                    $query1= "SELECT * FROM manage_category WHERE id= ".$row['cate_id']." ";
                                    $result1=mysqli_query($conn,$query1);
                                    $row1=mysqli_fetch_assoc($result1);
                                    ?>
                                    <li><a href="categorypage.php?id=<?php echo $row['cate_id'];?>"><?php echo $row1['cate_name'];?></a></li>
                                 
                                    <li><a href=""><?php echo $row['title'];?></a></li>
                                </ul>
                            </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>                    
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b80">
            
                <!-- PRODUCT DETAILS -->
                <div class="container woo-entry">
                   <?php
                            $query= "SELECT * FROM `products` WHERE id=".$_GET['id']."";
                            $result=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_assoc($result)){
                            ?>          
                    <div class="row m-b30">
                        <div class="col-lg-3 col-md-4  m-b30">
                            <div class="wt-box wt-product-gallery on-show-slider"> 
                                <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
                                    
                                    <div class="item">
                                        <div class="mfp-gallery">
                                            <div class="wt-box">
                                                <div class="wt-thum-bx wt-img-overlay1 ">
                                                    <img src="<?php echo $row['image'];?>" alt="">
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
                                                            <a class="mfp-link" href="images/products/pic-1.jpg">
                                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                            </a>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="sync2" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="wt-media">
                                            <img src="images/products/thumb/pic1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wt-media">
                                            <img src="images/products/thumb/pic2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wt-media">
                                            <img src="images/products/thumb/pic3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wt-media">
                                            <img src="images/products/thumb/pic4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wt-media">
                                            <img src="images/products/thumb/pic5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-8">
                        	<div class="product-detail-info bg-gray p-a30">
                                <div class="wt-product-title ">
                                    <h2 class="post-title"><a href="javascript:void(0);"><?php echo $row['title'];?></a></h2>
                                </div>
                                <h3 class="m-tb10"><?php echo $row['price'];?></h3>
                                
                                <div class="m-b15">
                                    <span class="rating-bx">
                                     <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="font-weight-600 text-black">(4 customer reviews)</span>
                                </div>
                                        
                                <div class="wt-product-text">
                                    <p><?php echo $row['small_desc'];?></p> 
                                </div>
                                <form method="post" class="cart clearfix ">
                                    <div class="quantity btn-quantity m-b20">
                                        <input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
                                    </div>
                                    <button class="site-button-secondry m-r10 site-btn-effect m-b20"><i class="fa fa-shopping-bag"></i> Buy Now</button>
                                    <button class="site-button site-btn-effect m-b20"><i class="fa fa-cart-plus"></i>Add to Cart</button>
                                </form>
                                <div class="product_meta"> 
                                    <span class="sku_wrapper">SKU: 
                                        <span class="sku">N/A</span>
                                    </span> 
                                    <span class="posted_in">Categories: 
                                        <a href="#" rel="tag">Clothing ,</a>
                                        <a href="#" rel="tag">T-shirts</a>
                                    </span>
                                </div>
                            </div>
                        </div>    
                    </div>
                        
                    <!-- TABS CONTENT START -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wt-tabs border bg-tabs">
                                <ul class="nav nav-tabs">
                                  
                                    <li><a data-toggle="tab" href="#web-design-19" class="active">Description</a></li>
                                    <li><a data-toggle="tab" href="#graphic-design-19">Specification</a></li>
                                    <li><a data-toggle="tab" href="#developement-19">Review</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="web-design-19" class="tab-pane active">
                                        <div class=" p-a10">
                                            <?php echo $row['description'];?>
                                             
                                        </div>
                                    </div>
                                    <div id="graphic-design-19" class="tab-pane">
                                        <?php echo $row['specification'];?>
                                        
                                    </div>
                                    <div id="developement-19" class="tab-pane">
                                        <div class=" p-a20 bg-gray">
                                            <div id="comments">
                                                <ol class="commentlist">
                                                    <li class="comment">
                                                        <div class="comment_container">
                                                            <img class="avatar avatar-60 photo" src="images/testimonials/pic1.jpg" alt="">
                                                            <div class="comment-text">
                                                                <div  class="star-rating">
                                                                    <div data-rating='3'>
                                                                        <i class="fa fa-star" data-alt="1" title="regular"></i>
                                                                        <i class="fa fa-star" data-alt="2" title="regular"></i>
                                                                        <i class="fa fa-star-o" data-alt="3" title="regular"></i>
                                                                        <i class="fa fa-star-o" data-alt="4" title="regular"></i>
                                                                        <i class="fa fa-star-o" data-alt="5" title="regular"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong class="author">Cobus Bester</strong>
                                                                    <span><i class="fa fa-clock-o"></i> March 20, 2020</span>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="comment_container">
                                                            <img class="avatar avatar-60 photo" src="images/testimonials/pic2.jpg" alt="">
                                                            <div class="comment-text">
                                                                <div  class="star-rating">
                                                                    <div data-rating='3'>
                                                                        <i class="fa fa-star" data-alt="1" title="regular"></i>
                                                                        <i class="fa fa-star" data-alt="2" title="regular"></i>
                                                                        <i class="fa fa-star" data-alt="3" title="regular"></i>
                                                                        <i class="fa fa-star-o" data-alt="4" title="regular"></i>
                                                                        <i class="fa fa-star-o" data-alt="5" title="regular"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong class="author">Cobus Bester</strong>
                                                                    <span><i class="fa fa-clock-o"></i> March 12, 2020</span>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="comment_container">
                                                          <img class="avatar avatar-60 photo" src="images/testimonials/pic3.jpg" alt="">
                                                          <div class="comment-text">
                                                                <div  class="star-rating">
                                                                    <div data-rating='3'>
                                                                        <i class="fa fa-star" data-alt="1" title="regular"></i>
                                                                        <i class="fa fa-star" data-alt="2" title="regular"></i>
                                                                        <i class="fa fa-star" data-alt="3" title="regular"></i>
                                                                        <i class="fa fa-star" data-alt="4" title="regular"></i>
                                                                        <i class="fa fa-star-o" data-alt="5" title="regular"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong class="author">Cobus Bester</strong>
                                                                    <span><i class="fa fa-clock-o"></i> March 11, 2020</span>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                        <div id="respond" class="comment-respond">                                              
                                                            <h3 class="comment-reply-title" id="reply-title">Add a review</h3>                                              
                                                            <form class="comment-form" method="post" >                                                  
                                                                <div class="comment-form-author">
                                                                    <label>Name <span class="required">*</span></label>
                                                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                                </div>
                                                                <div class="comment-form-email">
                                                                    <label>Email <span class="required">*</span></label>
                                                                    <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                                </div>                                                      
                                                                <div class="comment-form-rating">
                                                                    <label>Your Rating</label>
                                                                    <div class='star-Rating-input'>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                </div>                                                      
                                                                <div class="comment-form-comment">
                                                                    <label>Your Review</label>
                                                                    <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                                </div>
                                                                <div class="form-submit">                                                       
                                                                    <button class="site-button site-btn-effect" type="submit">Submit</button>
                                                                </div>                                                  
                                                            </form>                                                 
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TABS CONTENT START -->
                    
                                        
                <?}?>    

                </div>
                <!-- PRODUCT DETAILS -->    
                    
            </div>
            <!-- CONTENT CONTENT END -->
        
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b80 bg-gray">
                <div class="container">
                    <div class="section-content">
                       
                        <!-- TITLE START -->
                            <div class="wt-separator-two-part">
                                <div class="row wt-separator-two-part-row">
                                    <div class="col-lg-8 col-md-6 wt-separator-two-part-left">
                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                                <div class="sep-leaf-left"></div>
                                                <div>Our Best Products</div>
                                                <div class="sep-leaf-right"></div>
                                            </div>
                                            <h2>Featured products</h2>
                                        </div>
                                        <!-- TITLE END-->
                                    </div>
                                    <div class="col-lg-4 col-md-6 wt-separator-two-part-right text-right">
                                        <a href="product.html" class="site-button site-btn-effect">More Detail</a>
                                    </div>
                                </div>
                            </div>                        
                        
                        <!-- TITLE END -->
                    
                        <div class="owl-carousel featured-products owl-btn-vertical-center">
                             
                        
                            <!-- COLUMNS 1 -->
                           
                        <?php
                        $query= "SELECT * FROM `products` WHERE cate_id =".$row1['id']." and id!=".$_GET['id']."";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_assoc($result)){
                            ?>     
                            <div class="item">
                                <div class="wt-box wt-product-box   overflow-hide">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="<?php echo $row['image'];?>">
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

                                                <a href="product_detailpage.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a>
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
                            }?>
                        </div>
                    </div>
                </div>
            </div>
             <!-- SECTION CONTENT END -->          
        </div>
        <!-- CONTENT END -->

       


     <?php 
    include('include/footer.php');
    ?>