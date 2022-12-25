<?include('config/configuration.php');
$pg = 'general';?>
<?php
   $query= "SELECT * FROM `general` WHERE id=1";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result);
?> 
<?php
if(isset($_POST["UPDATE"]))
{     
     $update="UPDATE `general` SET email='".$_POST['email']."',
     mobile_no='".$_POST['mobile_no']."',
     address='".$_POST['address']."',
     google='".$_POST['google']."',
     facebook='".$_POST['facebook']."',
     twitter='".$_POST['twitter']."',
     linkedin='".$_POST['linkedin']."',
     time1='".$_POST['time1']."',
     time2='".$_POST['time2']."',
     footer_text='".$_POST['footer_text']."' WHERE id= 1";
     mysqli_query($conn,$update); 
}     
?>
<?include('includes/header.php')?>
<?include('includes/left.php')?>
<script type="text/javascript">
    function verifylogin(){
        var arrval=new Array();
        arrval[0]=checkemail();
        arrval[1]=checkmobile_no();
        arrval[2]=checkaddress();
        arrval[3]=checkgoogle();
        arrval[4]=checkfacebook();
        arrval[6]=checktwitter();
        arrval[7]=checklinkedin();
        arrval[8]=checktime1();
        arrval[9]=checktime2();
        arrval[10]=checkfooter_text();
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

    function checkemail()
    {
        
        if(document.getElementById("email").value == "")
        {    
        document.getElementById("lblemail").innerHTML="Please enter email..";
        return false;
        }
        else
        {
        document.getElementById("lblemail").innerHTML="";
        return true;
        }
    }
    function checkmobile_no()
    {
        
        if(document.getElementById("mobile_no").value == "")
        {    
        document.getElementById("lblmobile_no").innerHTML="Please enter mobile_no..";
        return false;
        }
        else
        {
        document.getElementById("lblmobile_no").innerHTML="";
        return true;
        }
    }
    function checkaddress()
    {       
        if(document.getElementById("address").value == "")
        {    
        document.getElementById("lbladdress").innerHTML="Please enter address..";
        return false;
        }
        else
        {
        document.getElementById("lbladdress").innerHTML="";
        return true;
        }
    }
    function checkgoogle()
    {       
        if(document.getElementById("google").value == "")
        {    
        document.getElementById("lblgoogle").innerHTML="Please enter google..";
        return false;
        }
        else
        {
        document.getElementById("lblgoogle").innerHTML="";
        return true;
        }
    }
    function checkfacebook()
    {       
        if(document.getElementById("facebook").value == "")
        {    
        document.getElementById("lblfacebook").innerHTML="Please enter facebook..";
        return false;
        }
        else
        {
        document.getElementById("lblfacebook").innerHTML="";
        return true;
        }
    }
    function checktwitter()
    {       
        if(document.getElementById("twitter").value == "")
        {    
        document.getElementById("lbltwitter").innerHTML="Please enter twitter..";
        return false;
        }
        else
        {
        document.getElementById("lbltwitter").innerHTML="";
        return true;
        }
    }
    function checklinkedin()
    {       
        if(document.getElementById("linkedin").value == "")
        {    
        document.getElementById("lbllinkedin").innerHTML="Please enter linkedin..";
        return false;
        }
        else
        {
        document.getElementById("lbllinkedin").innerHTML="";
        return true;
        }
    }
    function checktime1()
    {       
        if(document.getElementById("time1").value == "")
        {    
        document.getElementById("lbltime1").innerHTML="Please enter time1..";
        return false;
        }
        else
        {
        document.getElementById("lbltime1").innerHTML="";
        return true;
        }
    }
    function checktime2()
    {       
        if(document.getElementById("time2").value == "")
        {    
        document.getElementById("lbltime2").innerHTML="Please enter time1..";
        return false;
        }
        else
        {
        document.getElementById("lbltime2").innerHTML="";
        return true;
        }
    }
    function checkfooter_text()
    {       
        if(document.getElementById("footer_text").value == "")
        {    
        document.getElementById("lblfooter_text").innerHTML="Please enter footer_text..";
        return false;
        }
        else
        {
        document.getElementById("lblfooter_text").innerHTML="";
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
                    <h3 class="page-title">GENERAL</h3>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#">GENERAL</a>
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
                         <h4 class="m-t-0 header-title">General</h4>
                         <br><br>
                        <div class="row">
                            <div class="col-lg-9">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" onSubmit="return verifylogin()">
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                         <input type="email" id="email" name="email" class="form-control"  value="<?php echo $row['email'];?>"><span id="lblemail"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 control-label">Mobile No.</label>
                                        <div class="col-md-10">
                                         <input type="text" id="mobile_no" name="mobile_no" class="form-control"  value="<?php echo $row['mobile_no'];?>"><span id="lblmobile_no"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="control-label col-md-2">Address</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="address" id="address" value="address"><span id="lbladdress"></span>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Google</label>
                                    <div class="col-md-10">
                                       <input type="text" class="form-control" id="google" name="google" value="<?php echo $row['google'];?>"><span id="lblgoogle"></span>
                                   </div>
                                   </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Facebook</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $row['facebook'];?>"><span id="lblfacebook"></span>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Twitter</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $row['twitter'];?>"><span id="lbltwitter"></span>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">LinkedIn</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $row['linkedin'];?>"><span id="lbllinkedin"></span>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Time1</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="time1" name="time1" value="<?php echo $row['time1'];?>"><span id="lbltime1"></span>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Time2</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="time2" name="time2" value="<?php echo $row['time2'];?>"><span id="lbltime2"></span>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-md-2 control-label">Footer Text</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="footer_text" name="footer_text" rows="2"><?php echo $row['footer_text'];?></textarea>
                                        <span id="lblfooter_text"></span>
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