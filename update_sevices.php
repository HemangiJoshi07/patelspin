<?include('config/configuration.php');
$pg = 'service';?>
<?php
   $query= "SELECT * FROM `services` WHERE id=".$_GET['id']."";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result);
?>
<?php
if(isset($_POST["submit"]))
{

        $file=$_FILES['image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'services/'.$filename;
        move_uploaded_file($filepath,'../'.$destfile);
        
        $query= "UPDATE `services` SET  
        title= '".$_POST['title']."',
        small_desc='".$_POST['small_desc']."',
        image= '".$destfile."',
        meta_title='".$_POST['meta_title']."',
        meta_keyword='".$_POST['meta_keyword']."',
        meta_description='".$_POST['meta_description']."' WHERE id=".$_GET['id'].""; 
        
        $result = mysqli_query($conn,$query);
         echo '<script type="text/javascript">
        window.location.href = "services.php";
         </script>';
}       
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checktitle();
        arrval[1]=checksmall_desc();            
        arrval[2]=checkmeta_title();
        arrval[3]=checkmeta_keyword();
        arrval[4]=checkmeta_description();
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
    function checktitle()
    {
        
        if(document.getElementById("title").value == "")
        {    
        document.getElementById("lbltitle").innerHTML="Please enter title..";
        return false;
        }
        else
        {
        document.getElementById("lbltitle").innerHTML="";
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
   
    function checkmeta_title()
    {
        
        if(document.getElementById("meta_title").value == "")
        {    
        document.getElementById("lblmeta_title").innerHTML="Please enter meta_title..";
        return false;
        }
        else
        {
        document.getElementById("lblmeta_title").innerHTML="";
        return true;
        }
    }
    function checkmeta_keyword()
    {
        
        if(document.getElementById("meta_keyword").value == "")
        {    
        document.getElementById("lblmeta_keyword").innerHTML="Please enter meta_keyword..";
        return false;
        }
        else
        {
        document.getElementById("lblmeta_keyword").innerHTML="";
        return true;
        }
    }
    function checkmeta_description()
    {
        
        if(document.getElementById("meta_description").value == "")
        {    
        document.getElementById("lblmeta_description").innerHTML="Please enter meta_desc..";
        return false;
        }
        else
        {
        document.getElementById("lblmeta_description").innerHTML="";
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
                    <h3 class="page-title">SERVICES</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="services.php">SERVICES</a>
                        </li>
                        <li>
                            <a href="#">EDIT SERVICES</a>
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
                         <h4 class="m-t-0 header-title">Edit services</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST"  onSubmit="return verifylogin()" enctype="multipart/form-data">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title" name="title" class="form-control"  value="<?php echo $row['title'];?>"><span id="lbltitle"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Small Description</label>
                                        <div class="col-md-10">
                                            <input type="text" id="small_desc" name="small_desc" class="form-control" value="<?php echo $row['small_desc'];?>">
                                            <span id="lblsmall_desc"></span>
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
                                       <input type="file" class="form-control" id="image" name="image" value="">
                                   </div>
                                   </div>
                                   <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" id="meta_title" name="meta_title" class="form-control" value="<?php echo $row['meta_title'];?>">
                                            <span id="lblmeta_title"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" value="<?php echo $row['meta_keyword'];?>">
                                            <span id="lblmeta_keyword"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta description</label>
                                        <div class="col-md-10">
                                            <input type="text" id="meta_description" name="meta_description" class="form-control" value="<?php echo $row['meta_description'];?>">
                                            <span id="lblmeta_description"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-primary waves-effect m-t-20">Submit</button>
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