<?php $this->load->view('home/includes/header'); ?>
<?php $this->load->view('home/includes/header_menu'); ?>


<?php $this->load->view('home/sections/intro'); ?>

 
  <main id="main">
    <!--<section id="featured-services">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->

    <!--      <div class="col-lg-4 box">-->
    <!--        <i class="ion-ios-bookmarks-outline"></i>-->
    <!--        <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>-->
    <!--        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
    <!--      </div>-->

    <!--      <div class="col-lg-4 box box-bg">-->
    <!--        <i class="ion-ios-stopwatch-outline"></i>-->
    <!--        <h4 class="title"><a href="">Dolor Sitema</a></h4>-->
    <!--        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>-->
    <!--      </div>-->

    <!--      <div class="col-lg-4 box">-->
    <!--        <i class="ion-ios-heart-outline"></i>-->
    <!--        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>-->
    <!--        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>-->
    <!--      </div>-->

    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    
    <?php $this->load->view('home/sections/about'); ?>
    <?php $this->load->view('home/sections/services'); ?>
    <?php $this->load->view('home/sections/actions'); ?>
    <?php $this->load->view('home/sections/portfolio'); ?>
    <!--<?php $this->load->view('home/sections/skills'); ?> -->
    <?php $this->load->view('home/sections/client'); ?>
    <?php $this->load->view('home/sections/testimony'); ?>
    <?php $this->load->view('home/sections/contact'); ?>
    </main>

<?php $this->load->view('home/includes/footer'); ?>