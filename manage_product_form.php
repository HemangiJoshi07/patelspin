<?include('config/configuration.php');
$pg = 'product';?>


<?php

if(isset($_POST["submit"]))
{

        $file=$_FILES['image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'products/'.$filename;
        move_uploaded_file($filepath, '../'.$destfile);
        
        $query= "INSERT INTO `products`( `title`,`image`,`url_keyword`,`cate_id`,`metatitle`,`meta_keyword`,`meta_desc`,`is_active`,`is_display`,`is_feature`,`price`,`displayorder`,`small_desc`,`description`,`specification`)
             VALUES ('".$_POST['title']."',
                     '".$destfile."',
                     '".$_POST['url_keyword']."',
                     '".$_POST['cate_id']."',
                     '".$_POST['metatitle']."',
                     '".$_POST['meta_keyword']."',
                     '".$_POST['meta_desc']."',
                     '".$_POST['is_active']."',
                     '".$_POST['is_display']."',
                     '".$_POST['is_feature']."',
                     '".$_POST['price']."',
                     '".$_POST['displayorder']."',
                     '".$_POST['small_desc']."',
                     '".$_POST['description']."',
                     '".$_POST['specification']."'
                     )"; 
                
        $result = mysqli_query($conn,$query);
         echo '<script type="text/javascript">
        window.location.href = "manage_product.php";
         </script>';
}       
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checktitle();
        arrval[1]=checkimage();
        arrval[2]=checkurl_keyword();
        arrval[3]=checkcate_id();             
        arrval[4]=checkmetatitle();
        arrval[5]=checkmeta_keyword();
        arrval[6]=checkmeta_desc();
        arrval[7]=checkprice();
        arrval[8]=checkdisplayorder();
        arrval[9]=checksmall_desc();
        arrval[10]=checkdescription();
        arrval[11]=checkspecification();
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
    function checkimage()
    {
        var fileInput = document.getElementById('image');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        
        // if(document.getElementById("image").value == "h")
        // {    
        // document.getElementById("lblimage").innerHTML="Please enter image..";
        // return false;
        // }
        // else
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
        return false;
        }
        else
        {
        document.getElementById("lblurl_keyword").innerHTML="";
        return true;
        }
    }
    function checkcate_id()
    {
        if(document.getElementById("cate_id").value == "")
        {    
        document.getElementById("lblcate_id").innerHTML="Please enter category name.";
        // alert("11d");
        return false;
        }
        else
        {
        document.getElementById("lblcate_id").innerHTML="";
        return true;
        }
    }
    function checkmetatitle()
    {
        
        if(document.getElementById("metatitle").value == "")
        {    
        document.getElementById("lblmetatitle").innerHTML="Please enter metatitle..";
        return false;
        }
        else
        {
        document.getElementById("lblmetatitle").innerHTML="";
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
    function checkprice()
    {
        
        if(document.getElementById("price").value == "")
        {    
        document.getElementById("lblprice").innerHTML="Please enter price..";
        return false;
        }
        else
        {
        document.getElementById("lblprice").innerHTML="";
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
    function checkspecification()
    {
        
        if(document.getElementById("specification").value == "")
        {    
        document.getElementById("lblspecification").innerHTML="Please enter specification..";
        return false;
        }
        else
        {
        document.getElementById("lblspecification").innerHTML="";
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
                    <h3 class="page-title">ADD PRODUCT</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="manage_product.php">Manage Product</a>
                        </li>
                        <li>
                            <a href="#">Add Product</a>
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
                         <h4 class="m-t-0 header-title">Add Product</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST"  onSubmit="return verifylogin()" enctype="multipart/form-data">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">ProductName</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title" name="title" class="form-control"  value=""><span id="lbltitle"></span>
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
                                        <label class="col-md-2 control-label">Category Name</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" name="cate_id" id="cate_id">
                                                <option value="">select category</option>
                                                <?php
                                                $sql="SELECT * from manage_category";
                                                $result=mysqli_query($conn, $sql);    
                                                while ($row = mysqli_fetch_array($result)){
                                                ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['cate_name'];?></option>
                                                <?}?>
                                            </select><span id="lblcate_id"></span>    
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" id="metatitle" name="metatitle" class="form-control" value="">
                                            <span id="lblmetatitle"></span>
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
                                        <label class="col-md-2 control-label">Price</label>
                                        <div class="col-md-10">
                                            <input type="text" id="price" name="price" class="form-control" value="">
                                            <span id="lblprice"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Display Order</label>
                                        <div class="col-md-10">
                                            <input type="number" id="displayorder" name="displayorder" class="form-control"  value=""><span id="lbldisplayorder"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Smalldescription</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="small_desc" name="small_desc" rows="2"></textarea>
                                            <span id="lblsmall_desc"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="summernote" id="description" name="description" rows="2"></textarea>
                                            <span id="lbldescription"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Specification</label>
                                        <div class="col-md-10">
                                            <textarea class="summernote" id="specification" name="specification" rows="2"></textarea>
                                            <span id="lblspecification"></span>
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