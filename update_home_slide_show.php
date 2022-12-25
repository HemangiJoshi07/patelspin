<?include('config/configuration.php');
$pg='homeslideshow';?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checktitle1();
        arrval[1]=checksmalldiscription();
        
        arrval[3]=checkdisplayorder();
        
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
    function checksmalldiscription()
    {
        
        if(document.getElementById("smalldiscription").value == "")
        {    
        document.getElementById("lblsmalldiscription").innerHTML="Please enter smalldiscription..";
        return false;
        alert('hi');
        }
        else
        {
        document.getElementById("lblsmalldiscription").innerHTML="";
        return true;

        }
    }
    
    function checkdisplayorder()
    {
        
        if(document.getElementById("displayorder").value == "")
        {    
        document.getElementById("lbldisplayorder").innerHTML="Please enter displayorder..";
        return false;
        }
        else
        {
        document.getElementById("lbldisplayorder").innerHTML="";
        return true;
        }
    }   
</script>  
<?php
   $query= "SELECT * FROM `home_slide_show` WHERE id=".$_GET['id']."";
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
        $destfile = 'homeslideshow/'.$filename;
        move_uploaded_file($filepath,'../'.$destfile);  
    }
    else
    {
        $destfile=$_POST['old_image'];
    }
     $update="UPDATE `home_slide_show` SET title1='".$_POST['title1']."',smalldiscription='".$_POST['smalldiscription']."',image='".$destfile."',displayorder='".$_POST['displayorder']."' WHERE id=".$_GET['id']."";
     
    
     mysqli_query($conn,$update); 
      echo '<script type="text/javascript">
           window.location.href = "home_slide_show.php";
         </script>';
}     
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>

<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h3 class="page-title">EDIT HOME SLIDE SHOW</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="home_slide_show.php">Home Slide Show</a>
                        </li>
                        <li>
                            <a href="#">Edit Home Slide Show</a>
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
                         <h4 class="m-t-0 header-title">Edit Home Slide Show</h4>
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
                                        <label class="col-md-2 control-label">Small Discription</label>
                                        <div class="col-md-10">
                                            <input type="text" id="smalldiscription" name="smalldiscription" class="form-control" value="<?php echo $row['smalldiscription'];?>">
                                            <span id="lblsmalldiscription"></span>
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
                                    <label class="col-md-2 control-label">image</label>
                                    <div class="col-md-10">
                                       <input type="file" class="form-control" id="image" name="image" value="">
                                   </div>
                                   </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" id="displayorder" class="form-control" name="displayorder" value="<?php echo $row['displayorder'];?>"><span id="lbldisplayorder"></span>
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