<?include('config/configuration.php');
$pg='homeslideshow';?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checktitle1();
        arrval[1]=checksmalldiscription();
        arrval[2]=checkimage();
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

if(isset($_POST["submit"]))
{

        $file=$_FILES['image'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        $destfile = 'homeslideshow/'.$filename;
        move_uploaded_file($filepath, '../'.$destfile);
        $query= "INSERT INTO `home_slide_show`( `title1`,`smalldiscription`,`image`, `displayorder`) VALUES ('".$_POST['title1']."','".$_POST['smalldiscription']."','".$destfile."','".$_POST['displayorder']."')"; 
         $result = mysqli_query($conn,$query);
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
                    <h3 class="page-title">HOME SLIDE SHOW</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="home_slide_show.php">Home Slide Show</a>
                        </li>
                        <li>
                            <a href="#">Add Home Slide Show</a>
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
                         <h4 class="m-t-0 header-title">Add Home Slide Show</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST"  onSubmit="return verifylogin()" enctype="multipart/form-data">
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Title1</label>
                                        <div class="col-md-10">
                                         <input type="text" id="title1" name="title1" class="form-control"  value=""><span id="lbltitle1"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Small Discription</label>
                                        <div class="col-md-10">
                                            <input type="text" id="smalldiscription" name="smalldiscription" class="form-control" value="">
                                            <span id="lblsmalldiscription"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">image</label>
                                        <div class="col-md-10">
                                         <input type="file" id="image" name="image" class="form-control"  value=""><span id="lblimage"></span>
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