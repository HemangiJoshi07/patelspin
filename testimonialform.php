<?include('config/configuration.php');
$pg = 'test';?>
<?php
if(isset($_POST["submit"]))
{
        $file=$_FILES['image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'testimonial/'.$filename;
        move_uploaded_file($filepath, '../'.$destfile);
        $query= "INSERT INTO `testimonial`( `title1`,`title2`,`image`,`small_desc`)
             VALUES ('".$_POST['title1']."',
                     '".$_POST['title2']."', 
                     '".$destfile."',
                     '".$_POST['small_desc']."')";                 
        $result = mysqli_query($conn,$query);
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
        arrval[2]=checkimage();
        arrval[3]=checksmall_desc();
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
                    <h3 class="page-title">ADD TESTIMONIAL</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="testimonial.php">TestiMonial</a>
                        </li>
                        <li>
                            <a href="#">Add TestiMonial</a>
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
                         <h4 class="m-t-0 header-title">Add TestiMonial</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST"  onSubmit="return verifylogin()" enctype="multipart/form-data">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">TestiMonial1</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title1" name="title1" class="form-control"  value=""><span id="lbltitle1"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">TestiMonial2</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title2" name="title2" class="form-control"  value=""><span id="lbltitle2"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                         <input type="file" id="image" name="image" class="form-control"  value=""><span id="lblimage"></span>
                                        </div>
                                    </div>                        
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Smalldescription</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="small_desc" name="small_desc" rows="3"></textarea>
                                            <span id="lblsmall_desc"></span>
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