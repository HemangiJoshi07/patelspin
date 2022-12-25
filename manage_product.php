<?include('config/configuration.php');
$pg = 'product';
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
          <h4 class="page-title">MANAGE PRODUCT</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#">Manage Product</a>
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
            <h4 class="m-t-0 header-title"><b>Manage Product</b></h4><br>
            <a href="manage_product_form.php">
            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md">
             ADD Product
            </button></a><br><br>
            <table id="datatable-colvid" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>ProductName</th>
                      <th>Image</th>
                      <th>Url_Keyword</th>
                      <th>CategoryName</th>
                      <th>Is Active yes/no</th>
                      <th>Price</th>
                      <th>Displayorder</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>  
                <?php
                $catname='';
                $sql="SELECT * from products";
                $result=mysqli_query($conn, $sql);
                $nums = mysqli_num_rows($result);
                $i=1;   
                while ($row = mysqli_fetch_array($result)){

                  $sql1="SELECT * from manage_category";
                  $result1=mysqli_query($conn, $sql1);    
                  while ($cat = mysqli_fetch_array($result1)){
                    if($row['cate_id']==$cat['id']){
                      $catname=$cat['cate_name'];
                    }
                  }
                ?>
                <tr>
                    <td style="width:5%;"> <?php echo $i;?></td>
                    <td> <?php echo $row['title'];?> </td>
                    <td> <img src="<?php echo '../'.$row['image'];?>" style="width:100px; height:100px;"></td>
                    <td> <?php echo $row['url_keyword'];?> </td>
                    <td> <?php echo $catname; ?></td>
                    <td> <?php if($row['is_active'] == "0")
                          {
                            echo "no";
                          } 
                          else
                          {
                            echo "yes";
                          }
                          ?> </td>
                    <td> <?php echo $row['price']; ?> </td>
                    <td> <?php echo $row['displayorder']; ?> </td>
                    <td style="width:5%;"> <a href="update_product.php?id=<?php echo $row['id'];?>">
                      <button type="button" class="btn btn-link"><i class="fa fa-pencil"></i></button></a>
                    </td>
                    <td style="width:5%;"> <a href="delete_product.php?id=<?php echo $row['id'];?>" onclick='return confirm("are you sure you want to delete?")'><button type="button" class="btn btn-link"><i class="fa fa-trash" style="color:red;"></i></button></a></td> 
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