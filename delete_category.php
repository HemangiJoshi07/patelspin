<?include('config/configuration.php');
$pg = 'category';?>
<?php
    
$del="DELETE FROM manage_category WHERE id='".$_GET['id']."'";
mysqli_query($conn,$del); 
 
echo '<script type="text/javascript">
            window.location.href = "manage_category.php";
            </script>';
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>