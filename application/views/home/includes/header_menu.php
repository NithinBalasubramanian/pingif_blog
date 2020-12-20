<body>


<section class="mobile_nav" id="mobile_nav" style="display:none;">
<div class="navigation_mobile_cont">
        <div class="navigation_mobile_menu">
        <i class="fa fa-times icon" aria-hidden="true" style="font-size:25px;" onclick="close_menu()"></i>
        </div>
        <div class="navigation_mobile_logo">
        <div class="main_nav_logo_cont">
                <h2>pingif<b style="color:#007bff;">Blog</b></h2>
            </div>
        </div>
        <div class="navigation_mobile_blog">
		<?php if($this->session->userdata('user')){ ?>
			<div class="sign_in view_profile" >
				Hello , <span class="name"><?php echo $this->session->userdata('user'); ?></span>
                <div class="profile">
				<p class="row" ><i class="fa fa-user col-md-2 profile_icon" aria-hidden="true"></i><a href="" class="col-md-8">Profile</a></p>
				<p class="row" ><i class="fa fa-sign-out col-md-2 profile_icon" aria-hidden="true"></i><a href="<?php echo base_url(); ?>admin/logout" class="col-md-8">Logout</a></p>
				</div>
            </div>
			<?php }else{ ?>
            <div class="sign_in">
                <a class="btn_style"  href="<?php echo base_url(); ?>View_front/sign/login">Sign In</a>
            </div>
			<?php } ?>
		<!--
        <div class="sign_in">
                <a href="<?php echo base_url(); ?>View_front/sign/login" class="btn_style" >Sign In</a>
            </div> -->
        </div>
        </div>
        <form class="search" style="margin-left:auto;" action="<?php echo base_url(); ?>home/list_blog" method="post">
                <input class="tag" name="search" placeholder="search"><button type="submit" class="s_icon"><i class="fa fa-search social_icon" style="font-size:15px;color:#fff;" aria-hidden="true"></i></button>
            </form>
        <ul>
        <li> <a class="btn_style" href="<?php echo base_url(); ?>View_front/create_blog/add_blog">Create free Article</a></li>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <!-- <?php $category=$this->Admin_model->table_column('categories');
                    foreach($category as $category_row){ ?>
                    <li><a href="<?php echo base_url(); ?>"><?php echo $category_row['category_name']; ?></a></li>
                    <?php } ?> -->
                    <li><a href="" class="onme" data-cat_id="9">NEWS</a></li>
            <li><a href="" class="onme" data-cat_id="7">TECH</a></li>
            <li><a href="" class="onme" data-cat_id="0">AUTOMOBILE</a></li>
            <li><a href="" class="onme" data-cat_id="4">ENTERTAINMENT</a></li>
            <li><a href="" class="onme" data-cat_id="8">SPORTS</a></li>
            <li><a href="" class="onme" data-cat_id="0">OTHERS</a></li>
        </ul>
    </section>
    
  <section class="navigation">
<div class="fixed_nav">
<div class="container">
    <div class="main_nav_flex">
        <div class="main_nav_logo">
            <div class="main_nav_logo_cont row">
			<a class="col-md-1" href="<?php echo base_url(); ?>"><i class="fa fa-home " style="font-size:35px;color:#007bff;" aria-hidden="true"></i></a><h3 class="col-md-8">pingif<b style="color:#007bff;">Blog</b></h3>
                
            </div>
        </div>
        <div class="main_nav_status">
            <div class="main_nav_status_cont">
			<?php if($this->session->userdata('user')){ ?>
			<div class="sign_in view_profile" >
				Hello , <span class="name"><?php echo $this->session->userdata('user'); ?></span>
                <div class="profile">
                    <?php $user_id = $this->session->userdata('user_id'); ?>
				<p class="row" ><i class="fa fa-user col-md-2 profile_icon" aria-hidden="true"></i><a href="<?php echo base_url(); ?>View_profile/<?php echo $user_id; ?>" class="col-md-8">Profile</a></p>
				<p class="row" ><i class="fa fa-sign-out col-md-2 profile_icon" aria-hidden="true"></i><a href="<?php echo base_url(); ?>admin/logout" class="col-md-8">Logout</a></p>
				</div>
            </div>
			<?php }else{ ?>
            <div class="sign_in">
                <a class="btn_style"  href="<?php echo base_url(); ?>View_front/sign/login">Sign In</a>
            </div>
			<?php } ?>
			<div class="sign_in">
            <a class="btn_style" href="<?php echo base_url(); ?>View_front/create_blog/add_blog">Create free Article</a>
            </div>
            <form class="search" style="margin-left:auto;" action="<?php echo base_url(); ?>home/list_blog" method="post">
                <input class="tag" name="search" placeholder="search"><button type="submit" class="s_icon"><i class="fa fa-search social_icon" style="font-size:15px;color:#fff;" aria-hidden="true"></i></button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="drop_menu">
    <div class="sub_cont_drop">
        <ul class="main_drop_menu">
            <li class="onme_home"><a href="<?php echo base_url(); ?>">HOME</a></li>
            <li><a href="" class="onme" data-cat_id="9">NEWS</a></li>
            <li><a href="" class="onme" data-cat_id="7">TECH</a></li>
            <li><a href="" class="onme" data-cat_id="0">AUTOMOBILE</a></li>
            <li><a href="" class="onme" data-cat_id="4">ENTERTAINMENT</a></li>
            <li><a href="" class="onme" data-cat_id="8">SPORTS</a></li>
            <li><a href="" class="onme" data-cat_id="0">OTHERS</a></li>
        </ul>
    </div>
</div>
<div class="drop_down_cont">
    <div class="drop_down_cont_main ">
       
    </div>
</div>
</section> 
    <section class="navigation_mobile" id="mobile_close">
        <div class="navigation_mobile_cont">
        <div class="navigation_mobile_menu">
            <i class="fa fa-bars icon" aria-hidden="true" style="font-size:25px;" onclick="open_menu()"></i>
        </div>
        <div class="navigation_mobile_logo">
        <div class="main_nav_logo_cont">
                <h3>pingif<b style="color:#007bff;">Blog</b></h3>
            </div>
        </div>
        <div class="navigation_mobile_blog">
		<?php if($this->session->userdata('user')){ ?>
			<div class="sign_in view_profile" >
				Hello , <span class="name"><?php echo $this->session->userdata('user'); ?></span>
                <div class="profile">
				<p class="row" ><i class="fa fa-user col-md-2 profile_icon" aria-hidden="true"></i><a href="" class="col-md-8">Profile</a></p>
				<p class="row" ><i class="fa fa-sign-out col-md-2 profile_icon" aria-hidden="true"></i><a href="<?php echo base_url(); ?>admin/logout" class="col-md-8">Logout</a></p>
				</div>
            </div>
			<?php }else{ ?>
            <div class="sign_in">
                <a class="btn_style"  href="<?php echo base_url(); ?>View_front/sign/login">Sign In</a>
            </div>
			<?php } ?>
       <!--  <div class="sign_in">
                <a class="btn_style"  href="<?php echo base_url(); ?>View_front/sign/login">Sign In</a>
            </div> -->
        </div>
        </div>
    </section>