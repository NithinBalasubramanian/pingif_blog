<?php $this->load->view('home/includes/header'); ?>
<?php $this->load->view('home/includes/header_menu'); ?>
<section class="main_content">
<div class="container">
    <div class="row home_main_cont">
        <?php $blog_data = $list_out;
        if(count($blog_data)>0){
        foreach($list_out as $data_row){ ?>
            <div class="blog_list_cont" >
              <a  href="<?php echo base_url(); ?>View_news/<?php echo $data_row['blog_id']; ?>">
                <img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $data_row['news_image']; ?>" alt="">
                <h5 class="title_list_out"><?php echo $data_row['news_heading']; ?></h5>
                <div class="list_auth">
                    <div class="by_art text-left"><?php echo $data_row['news_reporter']; ?></div>
                    <div class="time_on text-right"><?php echo $newDate = date("d M,Y", strtotime($data_row['date_created'])); ?></div>
                </div>
                <p class="list_out_para" ><?php echo $data_row['news_preview']; ?></p>
                <p class="list_read_more">Read More >> </p>
                </a>
            </div>
        
        <?php } }else{ ?>
        <div class="col-md-12 mt-5 mb-5" style="width:100%;height:300px;">
            <h3 class="text-center pt-5 pb-5">No Results found</h3>
        </div>
        <?php } ?>
    </div>
</div>
</section>

<?php $this->load->view('home/includes/footer'); ?>
