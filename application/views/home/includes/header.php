<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(isset($news_id)){ ?>
    <?php $header_data = $this->Admin_model->table_column('news',$column='blog_id',$val=$news_id,'status','1'); 
          foreach($header_data as $header_row){
            $key = $this->Admin_model->table_column('categories','id',$header_row['category_id']);
            foreach($key as $key_row){ ?>

              <title><?php echo $header_row['news_heading']; ?></title>

            <?php } ?>
        <?php } ?>
        <?php }else{ ?>

          <title>PingifBlog </title>

        <?php } ?>



    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_plugin/css/bootstrap.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_plugin/css/bootstrap.min.css.map">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/style6.css" />

    <script src="<?php echo base_url(); ?>assets/front_plugin/js/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>