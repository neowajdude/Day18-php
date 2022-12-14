<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header part start -->
    <header class="slider container-fluid px-0 position-absolute">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <?php $qry1 = new WP_Query([
                'post_type' => 'post',
                'category_name' => 'slider'
            ]) ?>
            <div class="carousel-inner">

                <?php
                $x = 0;
                while($qry1->have_posts()){$qry1->the_post();
                $x++;
                ?>

                <div class="carousel-item <?= ($x==1)?'active':''?>">
                    <?php the_post_thumbnail(); ?>
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
                </div>
                
                <?php }?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- Header part end -->

    <!-- Logo part start -->
    <section class="container-fluid logo position-relative pt-2">
        <div class="row">
            <div class="logo_left col-sm-6">
                <?php the_custom_logo(); ?>
            </div>
            <div class="logo_right col-sm-6 text-end">
                <?php dynamic_sidebar('ltr'); ?>
            </div>
        </div>
    </section>
    <!-- Logo part end -->

    <!-- Menu part start -->
    <section class="container-fluid menu_one">
        <div class="container navbar-expand">
        <?php 
        wp_nav_menu(array(
            'theme_location'=>'TM',
            'menu_class'=>'navbar-nav menu_item',
        )); ?>
        </div>
    </section>
    <!-- Menu part end -->

    <!-- Hero part start -->
    <section class="container hero mt-3">
        <div class="row hero_title">
            <?php dynamic_sidebar('h_title'); ?>
        </div>
        <div class="row hero_card mt-4">
            <div class="col-sm-4">
                <div class="card" style="width: 80%;">
                    <?php dynamic_sidebar('card_img'); ?>
                    <?php dynamic_sidebar('card_body'); ?>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card" style="width: 80%;">
                    <?php dynamic_sidebar('card_img'); ?>
                    <?php dynamic_sidebar('card_body'); ?>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card" style="width: 80%;">
                    <?php dynamic_sidebar('card_img'); ?>
                    <?php dynamic_sidebar('card_body'); ?>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Hero part end -->
    <!-- Photo section start -->
    <section class="container photo mt-4">
        <div class="row">
            <div class="col-sm-5 green_line mt-4"> 
            </div>
            <div class="col-sm-2 text-center">
                <h4>Recent Photos</h4>
                <p>Some latest project pictures</p>
            </div>
            <div class="col-sm-5 green_line mt-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <?php dynamic_sidebar('photoimg1'); ?>
                    <div class="card-body">
                        <?php dynamic_sidebar('photocard1'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <?php dynamic_sidebar('photoimg2'); ?>
                    <div class="card-body">
                        <?php dynamic_sidebar('photocard2'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <?php dynamic_sidebar('photoimg3'); ?>
                    <div class="card-body">
                        <?php dynamic_sidebar('photocard3'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <?php dynamic_sidebar('photoimg4'); ?>
                    <div class="card-body">
                        <?php dynamic_sidebar('photocard4'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Photo section end -->
    <!-- News section start -->
    <section class="container mt-2 mb-3">
        <div class="row">
            <div class="col-sm-5 green_line mt-4"> 
            </div>
            <div class="col-sm-2 text-center">
                <h4>NEWS & EVENTS</h4>
                <a class="text-decoration-none text-dark" href="#">CLICK HERE TO VIEW ALL</a>
            </div>
            <div class="col-sm-5 green_line mt-4">
            </div>
        </div>

        <div class="row mt-4 mb-4" style="width: 40%;">
            <?php $qry2 = new WP_Query([
                'post_type' => 'post',
                'category_name' => 'news'
            ]);?>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    $x = 0;
                    while($qry2->have_posts()){$qry2->the_post();
                    $x++;
                    ?>

                    <div class="carousel-item <?= ($x==1)?'active':''?>">
                        <?php the_title(); ?>
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    </div>
                    
                    <?php }?>

                </div>
            </div>
        </div>
    </section>
    <!-- News section end -->

<?php wp_footer(); ?>
</body>
</html>