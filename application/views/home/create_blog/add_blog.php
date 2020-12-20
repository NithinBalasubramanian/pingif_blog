<?php $this->load->view('home/includes/header'); ?>
<?php $this->load->view('home/includes/header_menu'); ?>
<div class="modal fade" id="primary_image_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Primary Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>Home/primary_img" method="post" enctype="multipart/form-data" id="upload_img">
      <div class="modal-body">
          <input type="file" class="form-control" name="primary_img">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Upload Image</button>
      </div>
       </form>
    </div>
  </div>
</div>
<section class="main_cont">
<div class="aligning">
    <div class="row">
        <div class="col-md-6">
            <form role="form" action="<?php echo base_url(); ?>Home/upload_blog_datas" class="blog_cont_insert" enctype="multipart/form-data" method="post" >
                <div class="card-body">
                <div class="form-group">
                   
                   <label for="news_auth">Content Reporter</label>
                   <input type="text" class="form-control" name="news_reporter" id="news_auth" placeholder="Enter Content Reporter" value="<?php echo $this->session->userdata('user'); ?>" required>                 
                  
                 </div>
                <div class="form-group">
                   
                   <label for="exampleInputEmail1">Content Category</label>
                   <select name="category_id" id="category_modal" class="form-control" required>
                    <option value="">Select a category</option>
                   <?php $category=$this->Admin_model->table_column('categories');
                     foreach($category as $categories_row){ ?>
                      <option value="<?php echo $categories_row['id']; ?>"><?php echo $categories_row['category_name']; ?></option>
                    <?php  }  ?>
                      <option value="other">Other</option>
                   </select>
                  
                 </div>
                  <div class="form-group">
                    <label for="heading">Content Heading</label> <span class="note">( <b> Note :</b> Minimum 15 - 24 Words )</span>
                    <textarea type="text" class="form-control" name="news_heading" id="heading" placeholder="Enter Content Heading" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="news_sub">Content Preview</label> <span class="note">( <b> Note :</b> Minimum 20 - 40 Words )</span>
                    <textarea type="text" class="form-control" name="news_preview" id="news_sub" placeholder="Enter Content preview" rows="5" required></textarea>                
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Primary Image</label>
                    <span>
                      <div class="profile_button" data-toggle="modal" data-target="#primary_image_modal">
                        Upload Image
                       </div>
                   </span>
                  </div>
                  <div class="form-group">
                    <label for="news_cont">Type Content</label>
                     <textarea class="form-control content" rows="10" name="news_cont" placeholder="Enter Primary Content" required></textarea>
                  </div>
                  <div class="append" >
                     
                  </div>
                  <div class="sub_submits">
                    <input type="button" class="btn_style append_img" value="Sub Image" style="background-color:#007bff;">
                    <input type="button" class="btn_style append_head_img" value="Sub heading & Image" style="background-color:#007bff;">
                    <input type="button" class="btn_style append_head_cont" value="Sub heading & Content" style="background-color:#007bff;">
                    <input type="button" class="btn_style append_head_img_cont" value="Sub heading & Image & Content" style="background-color:#007bff;">
                    <input type="button" class="btn_style complete_blog" value="Completed" style="background-color:green;">
                  </div>
                 
                </div>
                </form>
                </div>
                <div class="col-md-6">
                <h3 class="text-center">pre<b style="color:#007bff;">view</b></h3>
                <div class="row ">
                <div class="pre_cont col-md-12">
                    <h1 class="heading p_heading">Heading</h1>
                    <h3 class="preview p_sub">Sub heading</h3>
                    <div class="p_img_place" id="primary_img">
                      <img src="<?php echo base_url();?>assets/img/logo/header_img.jpg" alt=""  width="100%" height="100%">
                    </div>
                    <p class="reporter">By <b class="p_auth"><?php echo $this->session->userdata('user'); ?></b><br>
                    <?php echo $newDate = date("d M,Y", strtotime(date("d-m-Y"))); ?></p>
                    <div class="p_preview_cont">
                    There are around 600 programming languages out there. The demand and popularity of programming languages fluctuate every year. Also, new programming languages are coming with attractive features.
                    So, which programming language should you learn? Learning a new programming language is always an investment of your time and brainpower. 
                    If you are a seasoned developer or if you already know several programming languages, then you can learn a niche, modern one. Recently, 
                    I have written a blog post where I have short-listed seven modern programming languages worth learning:
                    </div>
                    <div class="sub_cont_preview">
                     </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </section>

    <?php $this->load->view('home/includes/footer'); ?>
    <script>
        $(document).on('keyup','#heading',function(){
            var heading=$(this).val();
            $('.p_heading').html(heading);
        });
        $(document).on('keyup','#news_sub',function(){
            var news=$(this).val();
            $('.p_sub').html(news);
        });
        $(document).on('keyup','#news_auth',function(){
            var news=$(this).val();
            $('.p_auth').html(news);
        });
        $(document).on('keyup','.content',function(){
            var cont=$(this).val();
            $('.p_preview_cont').html(cont);
        });
        $(document).on('change','#category_modal',function(){
          var val = $(this).val();
          if(val == 'other'){
            alert("hi");
          }
        });
        
    </script>
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
                $('#primary_img').html(data);
            },
            error: function(data){
            }
        });
    });
    $(document).on('submit','.blog_cont_insert',function(e){
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
            },
            error: function(data){
            }
        });
    });
    function load_sub()
    {
      var url= '<?php echo base_url(); ?>';
        $.ajax({
            type:'POST',
            url: url+'Home/list_sub_data',
            success:function(data){
              $('.sub_cont_preview').html(data);
            },
            error: function(data){
            }
        });
    }
    $(document).on('click','.append_img',function(){
      $('.blog_cont_insert').trigger('submit');
      $('.blog_cont_insert').removeClass('blog_cont_insert');
      load_sub();
      $('.append').append('<form action="<?php echo base_url(); ?>Home/insert_data"  class="blog_cont_insert" enctype="multipart/form-data" method="post"  ><label for="">Sub Image</label><input type="file" class="form-control" name="sub_img"></form>');
    });
    $(document).on('click','.append_head_img',function(){
      $('.blog_cont_insert').trigger('submit');
      $('.blog_cont_insert').removeClass('blog_cont_insert');
      load_sub();
      $('.append').append(' <form action="<?php echo base_url(); ?>Home/insert_data"  class="blog_cont_insert" enctype="multipart/form-data" method="post"  ><label>Sub Heading</label><input type="text" name="sub_head" placeholder="Enter Sub Heading" class="form-control"><br><label for="">Sub Image</label><input type="file" class="form-control" name="sub_img"></form>');
    });
    $(document).on('click','.append_head_cont',function(){
      $('.blog_cont_insert').trigger('submit');
      $('.blog_cont_insert').removeClass('blog_cont_insert');
      load_sub();
      $('.append').append(' <form action="<?php echo base_url(); ?>Home/insert_data"  class="blog_cont_insert" enctype="multipart/form-data" method="post"  ><label>Sub Heading</label><input type="text" name="sub_head" placeholder="Enter Sub Heading" class="form-control"><br><label for="">Sub Cont</label><textarea type="text" class="form-control" placeholder="Enter Sub Content" name="sub_cont" rows="5"></textarea></form>');
    });
    $(document).on('click','.append_head_img_cont',function(){
      $('.blog_cont_insert').trigger('submit');
      $('.blog_cont_insert').removeClass('blog_cont_insert');
      load_sub();
      $('.append').append(' <form action="<?php echo base_url(); ?>Home/insert_data"  class="blog_cont_insert" enctype="multipart/form-data" method="post"  ><label>Sub Heading</label><input type="text" name="sub_head" placeholder="Enter Sub Heading" class="form-control"><br><label for="">Sub Image</label><input type="file" name="sub_img" class="form-control"><br><label for="">Sub Cont</label><textarea type="text" placeholder="Enter Sub Content" class="form-control" name="sub_cont" rows="5"></textarea><br></form>');
    });
    $(document).on('click','.complete_blog',function(){
      $('.blog_cont_insert').trigger('submit');
      
    });
</script>