<?include('config/configuration.php');
$pg = 'category';?>
<?php
if(isset($_POST["submit"]))
{
        $file=$_FILES['image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'category/'.$filename;
        move_uploaded_file($filepath, '../'.$destfile);
        $query= "INSERT INTO `manage_category`( `cate_name`,`image`,`url_keyword`,`meta_title`,`meta_keyword`,`meta_desc`,`is_active`,`is_display`,`is_feature`,`description`,`displayorder`)
             VALUES ('".$_POST['cate_name']."',
                     '".$destfile."',
                     '".$_POST['url_keyword']."',
                     '".$_POST['meta_title']."',
                     '".$_POST['meta_keyword']."',
                     '".$_POST['meta_desc']."',
                     '".$_POST['is_active']."',
                     '".$_POST['is_display']."',
                     '".$_POST['is_feature']."',
                     '".$_POST['description']."',
                     '".$_POST['displayorder']."')";                
        $result = mysqli_query($conn,$query);
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
        arrval[1]=checkimage();
        arrval[2]=checkurl_keyword();
        arrval[3]=checkmeta_title();
        arrval[4]=checkmeta_keyword();
        arrval[5]=checkmeta_desc();
        arrval[6]=checkdescription();
        arrval[7]=checkdisplayorder();
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
    function checkimage()
    {
        var fileInput = document.getElementById('image');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        
      
        if(!allowedExtensions.exec(filePath))
        {
            document.getElementById("lblimage").innerHTML="Please select valid image..";

            return false;
        }
        else
        {
        document.getElementById("lblimage").innerHTML="";
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
</script>    -->
<div class="content-page">
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <h3 class="page-title">ADD CATEGORY</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="manage_category.php">Manage Category</a>
                        </li>
                        <li>
                            <a href="#">Add Category</a>
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
                         <h4 class="m-t-0 header-title">Add Category</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST"  onSubmit="return verifylogin()" enctype="multipart/form-data">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">CategoryName</label>
                                        <div class="col-md-10">
                                         <input type="text" id="cate_name" name="cate_name" class="form-control"  value=""><span id="lblcate_name"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                         <input type="file" id="image" name="image" class="form-control"  value=""><span id="lblimage"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Url_Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" id="url_keyword" name="url_keyword" class="form-control" value="">
                                            <span id="lblurl_keyword"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" id="meta_title" name="meta_title" class="form-control" value="">
                                            <span id="lblmeta_title"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta Keyword</label>
                                        <div class="col-md-10">
                                            <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" value="">
                                            <span id="lblmeta_keyword"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta description</label>
                                        <div class="col-md-10">
                                            <input type="text" id="meta_desc" name="meta_desc" class="form-control" value="">
                                            <span id="lblmeta_desc"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is Active</label>
                                        <div class="col-md-10">
                                            <select  class="form-control select2" name="is_active" id="is_active">
                                                <option value="0">no</option>
                                                <option value="1">yes</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is Display</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" name="is_display" id="is_display">
                                                <option value="0">no</option>
                                                <option value="1">yes</option>
                                            </select>    
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Is feature</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" name="is_feature" id="is_feature">
                                            <option value="0">no</option>
                                            <option value="1">yes</option>
                                            </select>  
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                                            <span id="lbldescription"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" id="displayorder" name="displayorder" class="form-control"  value=""><span id="lbldisplayorder"></span>
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