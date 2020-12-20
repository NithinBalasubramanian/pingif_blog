<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/front_plugin/js/bootstrap.bundle.min.js"></script>

<script>
    function open_menu(){
        document.getElementById('mobile_nav').style.display="block";
        document.getElementById('mobile_close').style.display="none";
    }
    function close_menu(){
        document.getElementById('mobile_nav').style.display="none";
        document.getElementById('mobile_close').style.display="block";
    }
    
</script>
<script>
    $(document).on('mouseover','.view_profile',function(){
        $('.profile').css('display','block');
    });
    $(window).click(function() {
         $('.profile').css('display','none');
    });
    //subscribe

    $(document).on('submit','.subscribe',function(e){
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
            beforeSend:function(data){
                $('.subscribe_success').html('Subscribed Successful');
                $('.email_subscribe').val('');
            },
            success:function(data){
            },
            error: function(data){
            }
        });
    });
</script>
<script>
//drop down

    $(document).on('mouseover','.onme',function(){
        var cat_id = $(this).data('cat_id');
        $('.drop_down_cont').addClass('block');
        var url= '<?php echo base_url(); ?>';
        $.ajax({
            type:'POST',
            url: url+'Home/list_drop_news',
            data : 'cat_id='+cat_id,
            success:function(data){
              $('.drop_down_cont_main').html(data);
            },
            error: function(data){
            }
        });
    });
    $(document).on('mouseleave','.drop_down_cont',function(){
        $('.drop_down_cont').removeClass('block');
    });
    $(document).on('mouseenter','.fixed_nav',function(){
        $('.drop_down_cont').removeClass('block');
    });
    $(document).on('mouseenter','.onme_home',function(){
        $('.drop_down_cont').removeClass('block');
    });
</script>
