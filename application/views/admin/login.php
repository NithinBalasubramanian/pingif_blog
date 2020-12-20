 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
 
 <div class="loginpage">
    <div class="login-box" style=" background-color:#fff;">
        <div class="login-logo"> 
            <b style="font-size: 30px;">Admin</b>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg" style="font-size: 18px;">Signin to log your session</p>
                <form action="<?php echo base_url(); ?>Login_admin/login" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control " name="username" required placeholder="Username">
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control " name="password" required placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block" >Sign In</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>