<?php
/*
Template Name : Home Page
*/

$hero_heading       = get_field('hero_heading');
$hero_image         = get_field('hero_image');

$info_image         = get_field('info_image');
$info_title         = get_field('info_title');
$info_description   = get_field('info_description');

$app_image          = get_field('app_image');


get_header();
?>

    <section class="hero">
        <!----- Header Content ------>
        <div class="container header-sec">
            <div class="row">
                <!----- Left content side ----->
                <div class="col-12 col-md-6 col-lg-5 head-content">
                    <h1><?php echo $hero_heading; ?></h1>
                    <p><?php bloginfo('description'); ?></p>
                    <span><button type="button" class="btn-head">Learn More</button></span>
                    <span><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/olmo.webp" alt="Play"> See OLMO in Action</span>
                </div>

                <!----- Right Image Side ----->
                <div class="col-12 col-md-6 col-lg-7 head-img">
                    <?php if( !empty($hero_image) ) : ?>
                        <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" class="img-fluid mx-auto d-block">
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>

    <!--========== Benefits ===============-->
    <div class="container benefits">
        <div class="d-flex justify-content-center mb-3">
            <?php $loop = new WP_Query(array( 'post_type' => 'benefits', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
    
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="benefit-box text-center">
                    <?php 
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                    ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                </div>
    
            <?php endwhile ?>
        </div>
    </div>

    <!--======== Info Section ==========-->
    <div class="container info">
        <div class="row">
            <div class="info-img col-lg-7 col-md-12">
                <?php if( !empty($hero_image) ) : ?>
                    <img src="<?php echo $info_image['url']; ?>" alt="<?php echo $info_image['alt']; ?>" class="img-fluid mx-auto d-block">
                <?php endif; ?>
            </div>

            <div class="info-content col-lg-5 col-md-12 d-flex justify-content-center flex-column">
                <h1><?php echo $info_title; ?></h1>
                <?php echo $info_description; ?>
            </div>

        </div>
    </div>

    <!--========== About App =========-->
    <div class="container about-app">
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">

                <?php $loop = new WP_Query(array( 'post_type' => 'about_app', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
 
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="media app">
                    <?php 
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                    ?>
                    <div class="media-body">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                
                <?php endwhile ?>
                
            </div>
            <div class="col-lg-6 col-md-12 app-img">
                <?php if( !empty($app_image) ) : ?>
                    <img src="<?php echo $app_image['url']; ?>" alt="<?php echo $app_image['alt']; ?>" class="img-fluid mx-auto d-block">
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
get_footer(); ?>
