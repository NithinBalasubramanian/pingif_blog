<section id="portfolio" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title">Our Products</h3>
    </header>

    <div class="row portfolio-container">

      <?php $categories = $this->Admin_model->table_column_desc("categories");
      foreach ($categories as $row) { ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <a href="<?php echo base_url(); ?>home/products/<?php echo $row['id']; ?>/<?php echo $row['slug_name']; ?>">
              <figure style="background-color: #fff">
                <img src="<?php echo base_url(); ?>assets/admin/uploaded_files/<?php echo $row['category_image'] ?>"
                  class="img-fluid product_image" alt="">
              </figure>

              <div class="portfolio-info" style="background-color: #f7f7f7">
                <h4><a href="#"><?php echo $row['category_name']; ?></a></h4>
              </div>
            </a>
          </div>
        </div>

      <?php } ?>
      <!-- 
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Printer-and-MFD">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/product_print.webp" class="img-fluid product_image" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Printer & MFD</a></h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Scanners">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/Product_scanner.webp" class="img-fluid product_image"
                style="margin-top: 32px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Scanners</a></h4>
            </div>
          </a>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Projector">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/epson_proj.webp" class="img-fluid product_image"
                style="margin-top: 32px;height: 160px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Projector</a></h4>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/cp_cam">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/cp_cat.jpeg" class="img-fluid product_image"
                style="margin-top: 32px;height: 160px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">CCTV Camera</a></h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Supplies-for-printer">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/product_supplies.webp" class="img-fluid product_image"
                style="margin-top: 32px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Supplies for printer</a></h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Interactive-device">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/product_disp.webp" class="img-fluid product_image"
                style="margin-top: 32px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Interactive device</a></h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Video-Conferencing">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/product_vce.webp" class="img-fluid product_image"
                style="margin-top: 22px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Video Conferencing</a></h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/Projection-screens">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/product_screen.webp" class="img-fluid product_image"
                style="margin-top: 32px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">Projection screens</a></h4>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <a href="<?php echo base_url(); ?>home/products/AV-Accessories">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/product_av.webp" class="img-fluid product_image"
                style="margin-top: 32px" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4><a href="#">AV Accessories</a></h4>
            </div>
          </a>
        </div>
      </div>
    </div> -->

    </div>
</section><!-- #portfolio -->