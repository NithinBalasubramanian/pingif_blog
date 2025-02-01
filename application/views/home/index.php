<?php $this->load->view('home/includes/header'); ?>
<?php $this->load->view('home/includes/header_menu'); ?>

    <section class="main_content">
        <div class="container">
            <div class="row main_cont blog_viewer">
            <?php $news_main_data=$this->Admin_model->table_column('news',$column='blog_id',$val=$news_id,'status','1'); 
                foreach($news_main_data as $news_main_row){
                    $category = $this->Admin_model->table_column('categories','id',$news_main_row['category_id']);
                    foreach($category as $cat_row){ ?>
                <p class="tag_category"><?php echo $cat_row['category_name']; ?></p>
                    <?php } ?>
                <div class="col-md-12 margin_bottom">
                    <h1 class="heading"><?php echo $news_main_row['news_heading']; ?></h1>
                </div>
                <div class="col-md-8 pad_none">
                <h3 class="preview"><?php echo $news_main_row['news_preview']; ?></h3>
                <div class="img_cont" style="border-radius:10px;">
                    <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $news_main_row['news_image']; ?>" alt="" height="100%" width="100%" style="box-shadow:0 5px 10px 0px grey;border-radius:10px;">
                </div>
                <div class="row mt-4">
                    <div class="col-md-8">
                    <a class="user_profile" href="<?php echo base_url(); ?>View_profile/<?php echo $news_main_row['user_id']; ?>">
                        <?php $user_data = $this->Admin_model->table_column('user','id',$news_main_row['user_id']);
                        foreach($user_data as $user_row){
                            if($user_row['img'] == ''){ ?>
                                <img class="publiser_img" src="<?php echo base_url(); ?>assets/img/user/user.png">
                            <?php }else{ ?>
                                <img class="publiser_img" src="<?php echo base_url(); ?>assets/user/profile/<?php echo $user_row['img']; ?>">
                            <?php } ?>
                            <?php } ?>
                        <div class="author"><div class="auth_cont">By <b class="primary"><?php echo $news_main_row['news_reporter']; ?></b><br>
                         <span><?php echo $newDate = date("d M,Y", strtotime($news_main_row['date_created'])); ?></span></div></div>
                    </a>
                    </div>
                    <div class="col-md-4">
                    <div class="share_icons">
                    <i class="fa fa-facebook-official social_icon" style="font-size:30px;" aria-hidden="true"></i><i class="fa fa-instagram social_icon" aria-hidden="true" style="font-size:30px;"></i><i class="fa fa-twitter-square social_icon" style="font-size:30px;" aria-hidden="true" ></i><i class="fa fa-google-plus-square social_icon" style="font-size:30px;" aria-hidden="true" ></i>
                    </div>
                    </div>
                </div>
                   
                    <p class="news_para"><?php echo $news_main_row['news_cont']; ?></p>
                    <?php $sub_cont = $this->Admin_model->table_column('sub_cont_blog','blog_id',$news_main_row['blog_id']);
                    foreach($sub_cont as $sub_row){ ?>
                        <?php if($sub_row['sub_heading'] != ''){ ?>
                        <h5 class="sub_heading"><?php echo $sub_row['sub_heading']; ?></h5>
                        <?php } ?>
                        <?php if($sub_row['sub_cont'] != ''){ ?>
                        <p class="sub_cont"><?php echo $sub_row['sub_cont']; ?></p>
                        <?php } ?>
                        <?php if($sub_row['sub_img'] != ''){ ?>
                        <div class="sub_img">
                        <img src="<?php echo base_url(); ?>assets/user/blogs_sub/<?php echo $sub_row['sub_img']; ?>" alt="" width="100%" height="100%">
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
               
                <?php } ?>
                <div class="col-md-4">
                <h2>Latest <span style="color:#007bff;">BLOGS</span></h2>
                <?php $news_main_data=$this->Admin_model->side_news('news',$column='blog_id',$val=$news_id,'status','1'); 
                foreach($news_main_data as $news_main_row){ ?>
                <a style="text-decoration:none;" href="<?php echo base_url(); ?>View_news/<?php echo $news_main_row['blog_id']; ?>">
                <div class="side_data">
                    <div class="side_img" style="border-radius:10px;">
                    <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $news_main_row['news_image']; ?>" alt="" height="100%" width="100%" style="border-radius:10px;">
                    </div>
                    <p class="side_para" ><?php echo $news_main_row['news_preview']; ?></p>
                </div>
                </a>
                <?php } ?>
                </div>
            </div>
        </div> 
        <div class="home_most_viewed" style="width:100%;position:relative;">
            <h4 style="margin-left:50px;">Trending</h4>
        <div class="slider" id="slider-container-1">
            <div class="home_most_viewed_main_column">
            <?php $most_viewed = $this->Admin_model->table_column('news','status','1');
            foreach($most_viewed as $mv_row){ ?>
                <div class="home_most_viewed_column scroll_cont shadow">
                    <a  href="<?php echo base_url(); ?>View_news/<?php echo $mv_row['blog_id']; ?>">
                    <div class="slide_img">
                        <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $mv_row['news_image']; ?>" alt="" width="100%" height="100%">
                        <?php $cat_data = $this->Admin_model->table_column('categories','id',$mv_row['category_id']);
                            foreach($cat_data as $cat_row){ ?>
                                <div class="tag"><?php echo $cat_row['category_name']; ?></div>
                        <?php } ?>
                    </div>
                    <div class="mv_head">
                    <h5><?php echo $mv_row['news_heading']; ?></h5>
                    </div>
                    </a>
                </div>
            <?php } ?>
                <div onclick="prev1()" class="control-prev-btn" style="margin-top: 90px;">
                 <i class="fa fa-arrow-left"></i>
                </div>
                <div onclick="next1()" class="control-next-btn" style="margin-top: 90px;">
                    <i class="fa fa-arrow-right"></i>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>

    <div class="ad_view">
        <div class="ad_view_disp">
            <img src="<?php echo base_url(); ?>assets/ads/main_cont.jpg" width="100%" height="100%" alt="">
        </div>
    </div>
    </section>

    <?php $this->load->view('home/includes/footer'); ?>
    <script>
         function prev1(){
            document.getElementById('slider-container-1').scrollLeft -= 270;
            }
            
        function next1()
            {
                    document.getElementById('slider-container-1').scrollLeft += 270;
            }

    </script>