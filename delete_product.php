<?include('config/configuration.php');
$pg = 'product';?>
<?php
    
$del="DELETE FROM products WHERE id='".$_GET['id']."'";
mysqli_query($conn,$del); 
 
echo '<script type="text/javascript">
            window.location.href = "manage_product.php";
            </script>';
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>