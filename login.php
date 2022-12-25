<?include('config/configuration.php');?>
    <?php
    if(isset($_POST["submit"]))
    {
        $em=$_POST["emailaddress"];
        $pw=$_POST["password"];
        $select="SELECT * FROM `login` WHERE emailaddress = '".$em."' AND password  = '".$pw."' ";
        //echo $select; 
        $result = mysqli_query($conn,$select);
       
        $chk=mysqli_fetch_array($result);
        if($chk)
         {
            $_SESSION["ABCD"]="value";
            echo '<script type="text/javascript">
            window.location.href = "index.php";
            </script>';
         }
         // else
         // {
         //    echo "<br> wrong input try again!!!";
         // }  
    }         
   ?> 
   
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/codefox/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 10:11:16 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Codefox - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

        <script src="assets/js/modernizr.min.js"></script>
        <script type="text/javascript">
        function verifylogin()
        {
            var arrval=new Array();   
            arrval[0]=checkemailaddress();
            arrval[1]=checkpassword();
            var i;
            _blk=true;
            for(i=0;i<arrval.length;i++)
            {
                {
                    if(arrval[i]==false)
                    {
                    _blk=false;
                    }
                }
                if(_blk==true)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        function checkemailaddress()
        {
            if(document.getElementById("emailaddress").value == "")
            {    
            document.getElementById("lblemailaddress").innerHTML="Please enter emailaddress..";
            return false;
            }
            else
            {
            document.getElementById("lblemailaddress").innerHTML="";
            return true;
            }    
        }
        function checkpassword()
        {
            if(document.getElementById("password").value == "")
            {    
            document.getElementById("lblpassword").innerHTML="Please enter password..";
            return false;
            }
            else
            {
            document.getElementById("lblpassword").innerHTML="";
            return true;
            }
        }
    </script>
 
    </head>


    <body class="bg-transparent">

<section>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="wrapper-page">
<div class="m-t-40 account-pages">
            <h4  class="text-center"><?php
            
            $arr=array('hello','how are you???','welcome in site');
            echo implode("!",$arr);
            //print_r(explode(",",$str,-1));
            ?></h4>
            <div class="text-center account-logo-box">
                <h2 class="text-uppercase">
                <a href="index.html" class="text-success">
                <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                </a>
                </h2>
            </div>
                <div class="account-content">
                <form class="form-horizontal"  method="POST" onSubmit="return verifylogin()">
                    <div class="form-group m-b-25">
                    <div class="col-12">
                    <label for="emailaddress">Email address</label>
                    <input class="form-control input-lg" type="emailaddress" id="emailaddress" name="emailaddress"  placeholder="Enter your email"><span id="lblemailaddress"></span>
                    </div>
                    </div>

                    <div class="form-group m-b-25">
                    <div class="col-12">
                    <label for="password">Password</label>
                    <input class="form-control input-lg" type="password"  id="password" name="password"  placeholder="Enter your password"><span id="lblpassword"></span>
                    </div>
                    </div>
                    </div>

                    
                    <div class="form-group account-btn text-center m-t-10">
                    <div class="col-12">
                    <button class="btn w-lg btn-rounded btn-lg btn-primary" type="submit" name="submit">LogIn</button>
                    </div>
                    </div>
                </form>
                </div>

</div>
</div>
</div>
</div>
</div>
</section>
<script>
            var resizefunc = [];
        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
</body>
</html>        

