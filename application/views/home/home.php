<?php $this->load->view('home/includes/header'); ?>
<?php $this->load->view('home/includes/header_menu'); ?>
<section class="main_content">
    <div class="home_main_cont">
    <div class="home_top_cont">
        <?php $latest_1 = $this->Admin_model->latest('news','id','1');
        foreach($latest_1 as $late_row){ ?>
        <a class="home_top_left" style="color:black;" href="<?php echo base_url(); ?>View_news/<?php echo $late_row['blog_id']; ?>">
            <div class="home_top_left_cont">
                <div class="home_top_left_img">
                    <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $late_row['news_image']; ?>" alt="" width="100%" height="100%">
                    <?php $cat_data = $this->Admin_model->table_column('categories','id',$late_row['category_id']);
                            foreach($cat_data as $cat_row){ ?>
                                <div class="tag"><?php echo $cat_row['category_name']; ?></div>
                            <?php } ?>
                </div>
                <div class="home_top_left_head_cont">
                    <h4><?php echo $late_row['news_heading']; ?></h4>
                    <p><?php echo $late_row['news_preview']; ?></p>
                </div>
            </div>
            <div class="home_top_left_ad">
            <div class="ad_view_side">
                <div class="ad_view_side_disp">
                    <img src="<?php echo base_url(); ?>assets/ads/main_cont.jpg" width="100%" height="100%" alt="">
                </div>
            </div>
            </div>
        </a>
        <?php } ?>
        <div class="home_top_right">
            <div class="home_top_right_cont">
                <h4>Latest </h4>
                <?php $latest_1 = $this->Admin_model->latest('news','id','4');
                $i = 1;
                foreach($latest_1 as $late_row){ 
                    if($i != '1'){ ?>
                <div class="home_top_right_post" style="background-image:url('<?php echo base_url(); ?>assets/user/blogs/<?php echo $late_row['news_image']; ?>');">
                    <div class="home_top_right_post_top" >
                        <a  href="<?php echo base_url(); ?>View_news/<?php echo $late_row['blog_id']; ?>">
                        <div class="home_top_right_post_badge">
                            <?php $cat_data = $this->Admin_model->table_column('categories','id',$late_row['category_id']);
                            foreach($cat_data as $cat_row){ ?>
                                <div class="tag_badge"><?php echo $cat_row['category_name']; ?></div>
                            <?php } ?>
                        </div>
                        <div class="home_top_right_post_head">
                            <h5><?php echo $late_row['news_heading']; ?></h5>
                        </div>
                        </a>
                    </div>
                </div>
                <?php } $i++;} ?>
            </div>
        </div>
    </div>
    <div class="home_most_viewed" style="width:100%;position:relative;">
            <h4 style="margin-left:50px;">Most Viewed</h4>
        <div class="slider" id="slider-container">
            <div class="home_most_viewed_main_column">
            <?php $most_viewed = $this->Admin_model->table_column('news','status','1');
            foreach($most_viewed as $mv_row){ ?>
                <div class="home_most_viewed_column scroll_cont shadow">
                    <a   href="<?php echo base_url(); ?>View_news/<?php echo $mv_row['blog_id']; ?>">
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
                <div onclick="prev()" class="control-prev-btn" style="margin-top: 90px;">
                 <i class="fa fa-arrow-left"></i>
                </div>
                <div onclick="next()" class="control-next-btn" style="margin-top: 90px;">
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
   <div class="bottom_blog_disp ">
    <div class="bottom_blog_disp_content">
        <div class="bottom_blog_disp_1 disp_child">
            <div class="bottom_head">
                <h5>Tech & Automobile</h5>
            </div>
            <div class="bottom_blog_disp_12">
            <?php $most_viewed = $this->Admin_model->table_column('news','status','1');
            foreach($most_viewed as $mv_row){ ?>
            <div class="bottom_blog_cont">
                <a  href="<?php echo base_url(); ?>View_news/<?php echo $mv_row['blog_id']; ?>">
                <div class="bottom_cont_img">
                    <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $mv_row['news_image']; ?>" alt="" width="100%" height="100%">
                    <?php $cat_data = $this->Admin_model->table_column('categories','id',$mv_row['category_id']);
                            foreach($cat_data as $cat_row){ ?>
                                <div class="tag"><?php echo $cat_row['category_name']; ?></div>
                    <?php } ?>
                </div>
                <div class="bottom_cont_head">
                    <h6><?php echo $mv_row['news_heading']; ?></h6>
                </div>
               </a>
            </div>
            <?php } ?>
        </div>
        </div>
        <div class="bottom_blog_disp_2 disp_child">
            <div class="bottom_head">
                <h5>Entertainment &Lifestyle</h5>
            </div>
            <div class="bottom_blog_disp_12">
            <?php $most_viewed = $this->Admin_model->table_column('news','status','1');
            foreach($most_viewed as $mv_row){ ?>
            <div class="bottom_blog_cont">
                <a  href="<?php echo base_url(); ?>View_news/<?php echo $mv_row['blog_id']; ?>">
                <div class="bottom_cont_img">
                    <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $mv_row['news_image']; ?>" alt="" width="100%" height="100%">
                    <?php $cat_data = $this->Admin_model->table_column('categories','id',$mv_row['category_id']);
                            foreach($cat_data as $cat_row){ ?>
                                <div class="tag"><?php echo $cat_row['category_name']; ?></div>
                    <?php } ?>
                </div>
                <div class="bottom_cont_head">
                    <h6><?php echo $mv_row['news_heading']; ?></h6>
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
        </div>
        <div class="bottom_blog_disp_3 disp_child">
            <div class="bottom_head">
                <h5>News & Buisness NEWS</h5>
            </div>
            <div class="bottom_blog_disp_12">
            <?php $most_viewed = $this->Admin_model->table_column('news','status','1');
            foreach($most_viewed as $mv_row){ ?>
            <div class="bottom_blog_cont">
                <a  href="<?php echo base_url(); ?>View_news/<?php echo $mv_row['blog_id']; ?>">
                <div class="bottom_cont_img">
                    <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $mv_row['news_image']; ?>" alt="" width="100%" height="100%">
                    <?php $cat_data = $this->Admin_model->table_column('categories','id',$mv_row['category_id']);
                            foreach($cat_data as $cat_row){ ?>
                                <div class="tag"><?php echo $cat_row['category_name']; ?></div>
                    <?php } ?>
                </div>
                <div class="bottom_cont_head">
                    <h6><?php echo $mv_row['news_heading']; ?></h6>
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
        </div>
    </div>
   </div>
    </div>
</section>

<?php $this->load->view('home/includes/footer'); ?>

<script>
$(document).on('mouseover','.hover',function(){
  $(this).find(".sub_hed").css('display','block');
});
$(document).on('mouseout','.hover',function(){
        var a=$(this).val();
  $("a").find(".sub_hed").css('display','none');
});
</script>
<script>
    function prev(){
            document.getElementById('slider-container').scrollLeft -= 270;
    }
    
    function next()
    {
            document.getElementById('slider-container').scrollLeft += 270;
    }

    function prev1(){
            document.getElementById('slider-container-1').scrollLeft -= 270;
    }
    
    function next1()
    {
            document.getElementById('slider-container-1').scrollLeft += 270;
    }

</script>