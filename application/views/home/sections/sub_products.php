<section id="portfolio" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title"><?php echo str_replace('_', ' ', $data); ?></h3>
    </header>

    <div class="row portfolio-container">

      <?php $products = $this->Admin_model->table_column_desc("products", "category_id", $id);
      foreach ($products as $row) { ?>
        <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure style="background-color: #fff">
              <img src="<?php echo base_url(); ?>/assets/img/sub_print_1.webp" class="img-fluid product_image" alt="">
            </figure>

            <div class="portfolio-info" style="background-color: #f7f7f7">
              <h4 style="color: #000000;"><?php echo $row["product_name"] ?></h4>
              <?php if ($row["discound"] == 0 || $row["discound"] == null) { ?>
                <b href="<?php echo base_url(); ?>#contact">Rs <?php echo $row["price"] ?></b>
              <?php } else { ?>
                <div href="<?php echo base_url(); ?>#contact"><del>Rs <?php echo $row["price"] ?></del>
                  <b> Rs <?php echo ($row["price"] - (($row["price"] / 100) * $row["discound"])) ?></b>
                </div>
              <?php } ?>
              <a href="<?php echo base_url(); ?>#contact">Make enquiry</a>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>

  </div>
</section><!-- #portfolio -->