<?include('config/configuration.php');
$pg = 'category';?>
<?php
   $query= "SELECT * FROM `manage_category` WHERE id=".$_GET['id']."";
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
        $destfile = 'category/'.$filename;
        move_uploaded_file($filepath,'../'.$destfile);
    }
    else
    {
        $destfile=$_POST['old_image'];
    }
     $update="UPDATE `manage_category` SET 
     cate_name='".$_POST['cate_name']."',
     image='".$destfile."',
     url_keyword='".$_POST['url_keyword']."',
     meta_title='".$_POST['meta_title']."',
     meta_keyword='".$_POST['meta_keyword']."',
     meta_desc='".$_POST['meta_desc']."',
     is_active='".$_POST['is_active']."',
     is_display='".$_POST['is_display']."',
     is_feature='".$_POST['is_feature']."',
     description='".$_POST['description']."',
     displayorder='".$_POST['displayorder']."' WHERE id=".$_GET['id']."";
     mysqli_query($conn,$update); 
      echo '<script type="text/javascript">
           window.location.href = "manage_category.php";
         </script>';
}     
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checkcate_name();
        arrval[1]=checkurl_keyword();
        arrval[2]=checkmeta_title();
        arrval[3]=checkmeta_keyword();
        arrval[4]=checkmeta_desc();
        arrval[5]=checkdescription();
        arrval[6]=checkdisplayorder();
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

    function checkcate_name()
    {
        
        if(document.getElementById("cate_name").value == "")
        {    
        document.getElementById("lblcate_name").innerHTML="Please enter cate_name..";
        return false;
        }
        else
        {
        document.getElementById("lblcate_name").innerHTML="";
        return true;
        }
    }
    
    function checkurl_keyword()
    {
        if(document.getElementById("url_keyword").value == "")
        {    
        document.getElementById("lblurl_keyword").innerHTML="Please enter url_keyword..";
        // alert("11d");
        return false;
        }
        else
        {
            // alert("22d");
        document.getElementById("lblurl_keyword").innerHTML="";
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
    function checkmeta_desc()
    {
        
        if(document.getElementById("meta_desc").value == "")
        {    
        document.getElementById("lblmeta_desc").innerHTML="Please enter meta_desc..";
        return false;
        }
        else
        {
        document.getElementById("lblmeta_desc").innerHTML="";
        return true;
        }
    }
    
    function checkdescription()
    {
        
        if(document.getElementById("description").value == "")
        {    
        document.getElementById("lbldescription").innerHTML="Please enter description..";
        return false;
        }
        else
        {
        document.getElementById("lbldescription").innerHTML="";
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
    
    
</script> -->   
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h3 class="page-title">EDIT CATEGORY</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="manage_category.php">Manage Category</a>
                        </li>
                        <li>
                            <a href="#">Edit Category</a>
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
                         <h4 class="m-t-0 header-title">Edit Category</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" onSubmit="return verifylogin()">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Category Name</label>
                                        <div class="col-md-10">
                                         <input type="text" id="cate_name" name="cate_name" class="form-control"  value="<?php echo $row['cate_name'];?>"><span id="lblcate_name"></span>
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
                                        <label class="col-md-2 control-label">Url_Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" id="url_keyword" name="url_keyword" class="form-control" value="<?php echo $row['url_keyword'];?>">
                                            <span id="lblurl_keyword"></span>
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
                                            <input type="text" id="meta_desc" name="meta_desc" class="form-control" value="<?php echo $row['meta_desc'];?>">
                                            <span id="lblmeta_desc"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is Active</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_active" id="is_active">
                                                <option value="0"<?php if($row['is_active']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($row['is_active']=="1")echo 'yes';?>>yes</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is Display</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" name="is_display" id="is_display">
                                                <option value="0"<?php if($row['is_display']=="no")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($row['is_display']=="yes")echo 'selected';?>>yes</option>
                                            </select>    
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is feature</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" name="is_feature" id="is_feature">
                                            <option value="0"<?php if($row['is_feature']=="0")echo 'selected';?>>no</option>
                                                <option value="1"<?php if($row['is_feature']=="1")echo 'selected';?>>yes</option>
                                            </select>  
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="description" name="description" rows="2"><?php echo $row['description'];?></textarea>
                                            <span id="lbldescription"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" id="displayorder" name="displayorder" class="form-control"  value="<?php echo $row['displayorder'];?>"><span id="lbldisplayorder"></span>
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