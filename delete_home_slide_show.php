<?include('config/configuration.php');
$pg='homeslideshow';?>
<?php
    
$del="DELETE FROM home_slide_show WHERE id='".$_GET['id']."'";
mysqli_query($conn,$del); 
 
echo '<script type="text/javascript">
            window.location.href = "home_slide_show.php";
            </script>';
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>