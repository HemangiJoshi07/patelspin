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
                        <h2 class="site-text-primary">All PRODUCTS</h2>
                        </div>
                    </div>
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">All PRODUCTS </a></li>
                        </ul>
                    </div>
                    <!-- BREADCRUMB ROW END -->                        
                </div>                    
          </div>
    </div>    
    <!-- INNER PAGE BANNER END -->    
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">
                <div class="row d-flex justify-content-center">                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                        <h2>All Products</h2> 
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <?php
                                $query= "SELECT * FROM `products`";
                                $result=mysqli_query($conn,$query);
                                while($row=mysqli_fetch_assoc($result)){
                            ?> 
                            <div class="col-lg-4 col-md-6 m-b30">   
                            <div class="wt-box wt-product-box block-shadow  overflow-hide">
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
                                            <a href="product_detailpage.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a>
                                        </h3>
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
    </div> 
</div>               
<?php 
include('include/footer.php');
?>
