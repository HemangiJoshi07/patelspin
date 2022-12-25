<?include('config/configuration.php');
$pg = 'test';?>
<?php
    
$del="DELETE FROM testimonial WHERE id='".$_GET['id']."'";
mysqli_query($conn,$del); 
 
echo '<script type="text/javascript">
            window.location.href = "testimonial.php";
            </script>';
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>