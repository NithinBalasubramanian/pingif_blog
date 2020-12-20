<div class="bottom_ad">
    <img src="" alt="">
</div>
<footer style="width: 100%;
    height: auto;
    background-color:#D7DBDD ;
    padding-bottom: 1px;">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div>
            <p style="font-size:18px;color:black;font-weight:bold;margin:0px;">Follow Us </p>
            <h6><i class="fa fa-facebook-official social_icon" style="font-size:30px;" aria-hidden="true"></i><i class="fa fa-instagram social_icon" aria-hidden="true" style="font-size:30px;"></i><i class="fa fa-twitter-square social_icon" style="font-size:30px;" aria-hidden="true" ></i><i class="fa fa-google-plus-square social_icon" style="font-size:30px;" aria-hidden="true" ></i></h6>
            <p style="font-size:20px;color:#007bff;margin-top: 10px;font-weight:bold;padding:0px;">pingIFinit Software Technology</p>
        </div>
        </div>
        <div class="col-md-6">
        <p class="text-center subscribe_success"></p>
        <form class="subscribe" action="<?php echo base_url(); ?>Admin/subscribe" method="post">
                <input class="email_subscribe" name="email" placeholder="abc@email.com"><input type="submit"  class="submit" value="subscribe">
            </form>
           
            <div style="text-align:center;width:100%;margin-top: 10px;"><i> " not with <span class="primary">PROFESSION</span> but with <span class="primary">PASSION</span> "</i></div>
        </div>
    </div>
    <hr> <p class="text-center pt-5" style="font-size:12px;color:#000000;">&copy;
             copyright 
             <script>
                var d= new Date();
                var year=d.getFullYear();
                if(year != '2020'){
                 document.write('2020 -');
                }
                  document.write(year);
             </script> 
                - All Right Reserved || 
	  <span style="font-weight:600;letter-spacing:1px;">Pingifinit Software Technology || +91 8838825568</span></p>
       
    </div>
</footer>
</body>
</html>
<?php $this->load->view('home/includes/footer_script'); ?>