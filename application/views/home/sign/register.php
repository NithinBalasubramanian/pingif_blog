<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Register - PingifBlog</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div> -->
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(<?php echo base_url(); ?>assets/img/ba1.jpg) no-repeat ;background-size:cover;">
            <div class="auth-box row text-center">
                <div class="col-lg-6 col-md-5 modal-bg-img" style="background-image: url('<?php echo base_url(); ?>assets/img/logo/pen1.jpg');">
                </div>
                <div class="col-lg-6 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center row">
                        <a class="col-md-1" href="<?php echo base_url(); ?>"><i class="fa fa-home " style="font-size:35px;color:#007bff;" aria-hidden="true"></i></a><h1 class="logo col-md-8"><a href="<?php echo base_url(); ?>admin" style="color:black;font-weight:600;">pingif<span style="color:#007bff;" >Blog</span></a></h1>
                        </div>
                    <h4 class="mt-3 text-center">Sign <span style="color:#007bff;">Up</span></h4>
                        <form class="mt-4" action="<?php echo base_url(); ?>Insert/user/home/home/home" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="fname" id="exampleInputEmail1" placeholder="Enter First Name *" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="lname" id="exampleInputEmail1" placeholder="Enter Last Name" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email Id *" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <input type="text" class="form-control" name="contact" id="exampleInputEmail1" maxlength="10" placeholder="Enter Contact" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password *" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <input type="password" class="form-control " name="" id="confirm" placeholder="Confirm Password *" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block " style="background-color:#007bff;color:#fff;" id="sign" disabled>Sign Up</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="<?php echo base_url(); ?>View_front/sign/login"  style="color:#007bff;">Sign In</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
    <script>
    $(document).on('keyup','#confirm',function(){
       var con=$(this).val();
       var pass=$("#password").val();
       if(con == pass){
           $(this).addClass('is-valid');
           $(this).removeClass('is-invalid');
           $('#sign').prop( "disabled", false )
       }else{
          $(this).addClass('is-invalid');
          $(this).removeClass('is-valid');
          $('#sign').prop( "disabled", true )
       }
    });
</script>
</body>

</html>