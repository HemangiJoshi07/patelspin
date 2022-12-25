<?include('config/configuration.php');
$pg = 'cms';
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
          <h4 class="page-title">MANAGE CMS</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#">Manage CMS</a>
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
            <h4 class="m-t-0 header-title"><b>Manage CMS</b></h4><br>
            <br><br>
            <table id="datatable-colvid" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>PageName</th>
                      <th>PageTitle</th>
                      <th>Edit</th>
                    </tr>
                  </thead>  
                <?php
                $sql="SELECT * from cms_page";
                $result=mysqli_query($conn, $sql);
                $nums = mysqli_num_rows($result); 
                $i=1;   
                while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td style="width:5%;"> <?php echo $i;?></td>
                    <td> <?php echo $row['page_name'];?> </td>
                    <td> <?php echo $row['page_title'];?> </td>
                    <td style="width:5%;"> <a href="editcmspage.php?id=<?php echo $row['id'];?>">
                      <button type="button" class="btn btn-link"><i class="fa fa-pencil"></i></button></a>
                    </td>
                    
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