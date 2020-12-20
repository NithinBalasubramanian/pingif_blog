<?php $this->load->view('home/includes/header'); ?>
<?php $this->load->view('home/includes/header_menu'); ?>
<div class="modal fade" id="profile_image_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>Home/profile_img" method="post" enctype="multipart/form-data" id="upload_img">
      <div class="modal-body">
          <input type="file" class="form-control" name="profile_img">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Upload Image</button>
      </div>
       </form>
    </div>
  </div>
</div>
<section class="main_content">
<div class="container">
    <?php $profile_data = $this->Admin_model->table_column('user','id',$data);
    foreach($profile_data as $row){ ?>
    <div class="row home_main_cont profile_cont_design">
    <div class="ad_view col-md-12">
        <div class="ad_view_disp">
            <img src="<?php echo base_url(); ?>assets/ads/main_cont.jpg" width="100%" height="100%" alt="">
        </div>
    </div>
       <div class="col-md-4 pt-5">
       <div class="sidebar_profile">
           <div class="profile_img">
               <?php if($row['img'] == ''){ ?>
               <img class="profile_image_view" src="<?php echo base_url(); ?>assets/img/user/user.png" alt="">
               <?php }else{ ?>
                <img class="profile_image_view" src="<?php echo base_url(); ?>assets/user/profile/<?php echo $row['img']; ?>" alt="">
               <?php } ?>
           </div>
           <br>
           <?php $user_id = $this->session->userdata('user_id');
           if($user_id == $data){ ?>
           <div class="profile_button" data-toggle="modal" data-target="#profile_image_modal">
               Upload Image
           </div>
           <?php } ?>
            <div class="profile_base_data">
                <label>Country : </label>
                <span> India</span>
                <br>
                <label>Email : </label>
                <span><?php echo $row['email']; ?></span>
                <br>
                <label>Contact : </label>
                <span>+91 <?php echo $row['contact']; ?></span>
            </div>
           <div class="profile_about">
                <label>About Me : </label>
               <p>Profile About cont</p>
           </div>
           </div>
       </div>
       <div class="col-md-8 pt-5">
       <div class="sidebar_profile">
       <div class="profile_base">
               <h3><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h3>
               <p>Since <?php echo $newDate = date("d M,Y", strtotime($row['date_created'])); ?></p>
           </div>
           <div class="line_view">
            <div class="profile_follows ">
                    <div class="colmn_1">
                        Followers : 20
                    </div>
                    <div class="colmn_1">
                        Following : 13
                    </div>
                </div>
                <div class="profile_follows ">
                    <div class="colmn_1">
                        Page Likes : 230
                    </div>
                    <div class="colmn_1">
                        Blogs Posted : 5
                    </div>
            </div>
           </div>
           <div class="profile_contents">
            <div class="profile_nav">
                <div class="menu_profile active">
                    Latest Blog
                </div>
                <div class="menu_profile">
                    Activities
                </div>
            </div>
            <div class="view_profile_part row">
                <?php $blog_data = $this->Admin_model->table_column_desc('news','user_id',$data);
                if(count($blog_data) > 0){
                foreach($blog_data as $data_row){ ?>
                    <a class="col-md-6 list_colm" href="<?php echo base_url(); ?>View_news/<?php echo $data_row['blog_id']; ?>">
                        <div class="blog_list_cont_profile profile_list_cont" >
                            <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $data_row['news_image']; ?>" alt="">
                            <h5 class="title_list_out"><?php echo $data_row['news_heading']; ?></h5>
                            <div class="list_auth">
                                <div class="by_art text-left"><?php echo $data_row['news_reporter']; ?></div>
                                <div class="time_on text-right"><?php echo $newDate = date("d M,Y", strtotime($data_row['date_created'])); ?></div>
                            </div>
                            <p class="list_out_para" ><?php echo $data_row['news_preview']; ?></p>
                            <p class="list_read_more">Read More >> </p>
                        </div>
                     </a>
                <?php }
                 }else{ ?>
                <?php } ?>
            </div>
           </div>
           </div>
       </div>
    </div>
    <?php } ?>
</div>
</section>

<?php $this->load->view('home/includes/footer'); ?>

<script>
     $(document).on('submit','#upload_img',function(e){
        e.preventDefault();
        var formData = new FormData(this);
		var url= $(this).attr('action');
        $.ajax({
            type:'POST',
            url: url,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('.profile_img').html(data);
            },
            error: function(data){
            }
        });
    });
</script>
