<?include('config/configuration.php');
$pg = 'test';?>
<?php
   $query= "SELECT * FROM `testimonial` WHERE id=".$_GET['id']."";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result);
?>
<?php
if(isset($_POST["UPDATE"]))
{
     if($_FILES['image']['name']!="")
     {

        $file=$_FILES['image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'testimonial/'.$filename;
        move_uploaded_file($filepath,'../'.$destfile);
    }
    else
    {
       $destfile=$_POST['old_image'];
    }
     $update="UPDATE `testimonial` SET 
     title1='".$_POST['title1']."',
     title2='".$_POST['title2']."',
     image='".$destfile."',
     small_desc='".$_POST['small_desc']."' WHERE id=".$_GET['id']."";
     mysqli_query($conn,$update); 
      echo '<script type="text/javascript">
           window.location.href = "testimonial.php";
         </script>';
}     
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checktitle1();
        arrval[1]=checktitle2();
        arrval[2]=checksmall_desc();
        var i;
        _blk=true;
        for(i=0;i<arrval.length;i++){
            if(arrval[i]==false){
                _blk=false;
            }
        }
        if(_blk==true){
            return true;
        }
        else{
            return false;
        }
        return false;
    }

    function checktitle1()
    {
        
        if(document.getElementById("title1").value == "")
        {    
        document.getElementById("lbltitle1").innerHTML="Please enter title1..";
        return false;
        }
        else
        {
        document.getElementById("lbltitle1").innerHTML="";
        return true;
        }
    }
    function checktitle2()
    {
        
        if(document.getElementById("title2").value == "")
        {    
        document.getElementById("lbltitle2").innerHTML="Please enter title2..";
        return false;
        }
        else
        {
        document.getElementById("lbltitle2").innerHTML="";
        return true;
        }
    }
    
    function checksmall_desc()
    {
        
        if(document.getElementById("small_desc").value == "")
        {    
        document.getElementById("lblsmall_desc").innerHTML="Please enter small_desc..";
        return false;
        }
        else
        {
        document.getElementById("lblsmall_desc").innerHTML="";
        return true;
        }
    }
</script>   
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h3 class="page-title">EDIT TESTIMONIAL</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="testimonial.php">TestiMonial</a>
                        </li>
                        <li>
                            <a href="#">Edit TestiMonial</a>
                        </li>    
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
                <div class="row">
                <div class="col-sm-12">
                <div class="card" >
                    <div class="card-body"  >
                         <h4 class="m-t-0 header-title">Edit TestiMonial</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" onSubmit="return verifylogin()">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Title1</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title1" name="title1" class="form-control"  value="<?php echo $row['title1'];?>"><span id="lbltitle1"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Title2</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title2" name="title2" class="form-control"  value="<?php echo $row['title2'];?>"><span id="lbltitle2"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="control-label col-md-2">Old Image</label>
                                    <div class="col-md-4">
                                        <img src="<?php echo '../'.$row['image'];?>"  style="height:100px; width:100px;">
                                        <input type="hidden" name="old_image" id="old_image" value="<?php echo $row['image'];?>">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Image</label>
                                    <div class="col-md-10">
                                       <input type="file" class="form-control" id="image" name="image" value=""><span id="lblimage"></span>
                                   </div>
                                   </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Smalldescription</label>
                                        <div class="col-md-10">
                                        <textarea class="form-control" id="small_desc" name="small_desc" rows="2"><?php echo $row['small_desc'];?></textarea>
                                            <span id="lblsmall_desc"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                    <button type="submit" name="UPDATE" class="btn btn-primary waves-effect m-t-20">UPDATE</button>
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
<?include('includes/footer.php')?>