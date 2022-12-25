<?include('config/configuration.php');
$pg = 'test';
include('includes/header.php');
include('includes/left.php');?>
<?php
if(!isset($_SESSION["ABCD"])){
    echo '<script type="text/javascript">
            window.location.href = "login.php";
            </script>';
}
?>
<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
       <div class="col-12">
        <div class="page-title-box">
          <h4 class="page-title">TESTIMONIAL</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#">TestiMonial</a>
            </li>
          </ol>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h4 class="m-t-0 header-title"><b>TestiMonial</b></h4><br>
            <a href="testimonialform.php">
            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md">
             ADD TestiMonial
            </button></a><br><br>
            <table id="datatable-colvid" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>TestiMonial1</th>
                      <th>TestiMonial2</th>
                      <th>Image</th>          
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>  
                <?php
                $catname='';
                $sql="SELECT * from testimonial";
                $result=mysqli_query($conn, $sql);
                $nums = mysqli_num_rows($result);
                $i=1;   
                while ($row = mysqli_fetch_array($result)){                  
                ?>
                <tr>
                    <td style="width:5%;"> <?php echo $i;?></td>
                    <td> <?php echo $row['title1'];?> </td>
                    <td> <?php echo $row['title2'];?> </td>
                    <td style="width:15%;"> <img src="<?php echo '../'.$row['image'];?>" style="width:100px; height:100px;"></td>
                    
                    <td style="width:5%;"> <a href="edittestimonial.php?id=<?php echo $row['id'];?>">
                      <button type="button" class="btn btn-link"><i class="fa fa-pencil"></i></button></a>
                    </td>
                    <td style="width:5%;"> <a href="deletetestimonial.php?id=<?php echo $row['id'];?>" onclick='return confirm("are you sure you want to delete?")'><button type="button" class="btn btn-link"><i class="fa fa-trash" style="color:red;"></i></button></a></td> 
                </tr>
                <? 
                $i++;
                }
                ?>  
              </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?include('includes/footer.php')?>