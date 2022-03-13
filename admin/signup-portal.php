<?php
    //Database Configuration File
    include('includes/config.php');
    //error_reporting(0);
    if(isset($_POST['register'])){
        // Getting username, email, and password
        $username=$_POST['username'];
        $email=$_POST['emailuser'];
        $password=$_POST['newpassword'];

        // encryption password
        $options = ['cost' => 12];
        $newhashedpass=password_hash($password, PASSWORD_BCRYPT, $options);

        // insert account to db
        $sql = mysqli_query($con, "INSERT INTO table_admin (AdminUserName, AdminEmailId, AdminPassword) VALUES ('$username', '$email', '$newhashedpass')");

        if($sql){
            echo '<script> alert("Succsess to register new account portal himatektro website"); window.location.href="./index.php"; </script>';
        } else {
            echo '<script> alert("Failed to register account, please try again"); window.location.href="./signup.php"; </script>';
        } 

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portal Himatektro.">
        <meta name="author" content="BidangInfokomHimatektro">


        <!-- App title -->
        <title>Portal Admin HIMATEKTRO | Sign-Up </title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

        <script type="text/javascript">
            function valid()
            {
                if(document.register.username.value=="")
                {
                    alert("Current Password Filed is Empty !!");
                    document.register.username.focus();
                    return false;
                }
                else if(document.register.newpassword.value=="")
                {
                    alert("New Password Filed is Empty !!");
                    document.register.newpassword.focus();
                    return false;
                }
                else if(document.register.confirmpassword.value=="")
                {
                    alert("Confirm Password Filed is Empty !!");
                    document.register.confirmpassword.focus();
                    return false;
                }
                else if(document.register.newpassword.value!= document.register.confirmpassword.value)
                {
                alert("Password and Confirm Password Field do not match  !!");
                document.register.confirmpassword.focus();
                return false;
                }
                return true;
            }
        </script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="../index.php" class="text-success">
                                            <span><img src="assets/images/LogoHimatektro.png" alt="" height="90"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" name="register" method="post" onSubmit="return valid();">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="please insert your username" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="emailuser" placeholder="please insert your email" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="newpassword" required="" placeholder="please insert your new password" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="confirmpassword" required="" placeholder="please insert your password again" autocomplete="off">
                                            </div>
                                        </div>
                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="register">Sign Up</button> <a class="btn w-md btn-bordered btn-danger waves-effect waves-light" href="./index.php">Sign In</a>
                                            </div> 
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                    

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>