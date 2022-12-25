<?include('config/configuration.php');
$pg = 'cms';?>    
<?php
   $query= "SELECT * FROM `cms_page` WHERE id=".$_GET['id']."";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result);
?>
<?php
if(isset($_POST["UPDATE"]))
{
     

    if($_GET['id']==1){
        if($_FILES['image1']['name']!="")
     {
        $file=$_FILES['image1'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $destfile = 'cmspage/'.$filename;
        move_uploaded_file($filepath,'../'.$destfile);        
    }
    else
    {
        $destfile=$_POST['old_image1'];
    }
    if($_FILES['image2']['name']!="")
     {
        $file2=$_FILES['image2'];
        $filename2 = $file2['name'];
        $filepath2 = $file2['tmp_name'];
        $destfile2 = 'cmspage/'.$filename2;
        move_uploaded_file($filepath2,'../'.$destfile2);
    }
    else
    {
        $destfile2=$_POST['old_image2'];
    } 
     $title1=$_POST['title1'];
     $title2=$_POST['title2'];
     $image1=$destfile;
     $image2=$destfile2;
     $small_desc=$_POST['small_desc'];   
     }
     else{
     $title1="";
     $title2="";
     $image1="";
     $image2="";
     $small_desc=""; 
     }
     $update="UPDATE `cms_page` SET 
     page_name='".$_POST['page_name']."',
     page_title='".$_POST['page_title']."',
     meta_title='".$_POST['meta_title']."',
     meta_keyword='".$_POST['meta_keyword']."',
     meta_desc='".$_POST['meta_desc']."',
     title1='".$title1."',
     title2='".$title2."',
     image1='".$image1."',
     image2='".$image2."',
     small_desc='".$small_desc."',
     full_desc='".$_POST['full_desc']."'
    WHERE id=".$_GET['id']."";  
     mysqli_query($conn,$update); 
      echo '<script type="text/javascript">
           window.location.href = "manage_cmspage.php";
         </script>';
}     
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checkpage_name();
        arrval[1]=checkpage_title();
        arrval[2]=checkmeta_title();             
        arrval[3]=checkmeta_keyword();
        arrval[4]=checkmeta_desc();
        arrval[5]=checktitle1();
        arrval[6]=checktitle2();
        arrval[7]=checksmall_desc();
        arrval[8]=checkfull_desc();
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

    function checkpage_name()
    {
        
        if(document.getElementById("page_name").value == "")
        {    
        document.getElementById("lblpage_name").innerHTML="Please enter page_name..";
        return false;
        }
        else
        {
        document.getElementById("lblpage_name").innerHTML="";
        return true;
        }
    }
    function checkpage_title()
    {
        if(document.getElementById("page_title").value == "")
        {    
        document.getElementById("lblpage_title").innerHTML="Please enter page_title..";
         return false;
        }
        else
        {
        document.getElementById("lblpage_title").innerHTML="";
        return true;
        }
     }
    function checkmeta_title()
    {
        if(document.getElementById("meta_title").value == "")
         {    
         document.getElementById("lblmeta_title").innerHTML="Please select meta_title..";
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
    function checkfull_desc()
    {
        
         if(document.getElementById("full_desc").value == "")
         {    
         document.getElementById("lblfull_desc").innerHTML="Please enter full_desc..";
         return false;
         }
         else
         {
         document.getElementById("lblfull_desc").innerHTML="";
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
                    <h3 class="page-title">EDIT CMS PAGE</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="manage_cmspage.php">Manage CMS Page</a>
                        </li>
                        <li>
                            <a href="#">Edit CMS</a>
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
                         <h4 class="m-t-0 header-title">Edit CMS</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" onSubmit="return verifylogin()">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">PageName</label>
                                        <div class="col-md-10">
                                         <input type="text" id="page_name" name="page_name" class="form-control"  value="<?php echo $row['page_name'];?>"><span id="lblpage_name"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">PageTitle</label>
                                        <div class="col-md-10">
                                         <input type="text" id="page_title" name="page_title" class="form-control"  value="<?php echo $row['page_title'];?>"><span id="lblpage_title"></span>
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
                                    <?php
                                        if($row['id'] == 1)
                                        { 
                                         ?>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">title1</label>
                                        <div class="col-md-10">
                                            <input type="text" id="title1" name="title1" class="form-control" value="<?php echo $row['title1'];?>">
                                            <span id="lbltitle1"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">title2</label>
                                        <div class="col-md-10">
                                            <input type="text" id="title2" name="title2" class="form-control" value="<?php echo $row['title2'];?>">
                                            <span id="lbltitle2"></span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                    <label class="control-label col-md-2">Old Image1</label>
                                    <div class="col-md-4">
                                        <img src="<?php echo '../'.$row['image1'];?>"  style="height:100px; width:100px;">
                                        <input type="hidden" name="old_image1" id="old_image1" value="<?php echo $row['image1'];?>">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Image1</label>
                                    <div class="col-md-10">
                                       <input type="file" class="form-control" id="image1" name="image1" value=""><span id="lblimage1"></span>
                                   </div>
                                   </div>
                                   
                                   <div class="form-group row">
                                    <label class="control-label col-md-2">Old Image2</label>
                                    <div class="col-md-4">
                                        <img src="<?php echo '../'.$row['image2'];?>"  style="height:100px; width:100px;">
                                        <input type="hidden" name="old_image2" id="old_image2" value="<?php echo $row['image2'];?>">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Image2</label>
                                    <div class="col-md-10">
                                       <input type="file" class="form-control" id="image2" name="image2" value=""><span id="lblimage2"></span>
                                   </div>
                                   </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Small Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="small_desc" name="small_desc" rows="2"><?php echo $row['small_desc'];?></textarea>
                                            <span id="lblsmall_desc"></span>
                                        </div>
                                    </div>
                                    <?
                                    }
                                    ?>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Full Description</label>
                                        <div class="col-md-10">
                                            <textarea class="summernote" id="full_desc" name="full_desc" rows="2"><?php echo $row['full_desc'];?></textarea>
                                            <span id="lblfull_desc"></span>
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