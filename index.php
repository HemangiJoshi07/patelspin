<?include('config/configuration.php');
$pg='index';
include('includes/header.php');
include('includes/left.php')
?>
<?php
$query="select * from manage_category";
$result=mysqli_query($conn, $query);
//echo $result;
$count=mysqli_num_rows($result);
?>
<?php
$query1="select * from products";
$result1=mysqli_query($conn,$query1);
$count1=mysqli_num_rows($result1);
?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title" class="font-16">Welcome John !</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">Codefox</a>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
         <!-- end row -->

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card widget-box-two widget-two-purple">
                    <div class="card-body">
                        <div class="wigdet-two-content">
                            <p class="m-0 text-uppercase text-white font-600 font-secondary text-overflow" title="Statistics">total category</p>
                            <h2 class="text-white"><span data-plugin="counterup"><?php echo $count;?></span> </h2>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card widget-box-two widget-two-info">
                    <div class="card-body">
                        <div class="wigdet-two-content">
                            <p class="m-0 text-white text-uppercase font-600 font-secondary text-overflow" title="User Today">total products</p>
                            <h2 class="text-white"><span data-plugin="counterup"><?php echo $count1;?></span> </h2>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
       </div>
    </div>
</div>



                        
<?include('includes/footer.php')?>