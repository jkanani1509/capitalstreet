<?php  get_header(); 
    // get_template_part('parts/page-title'); 
?>
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title">Service</h1>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span> / </span>
                    <a href="blog" class="active">Service</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


 <!-- start service details area -->
 <div class="rts-service-details-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                <div class="service-detials-step-1">
                    <div class="thumbnail">
                        <?php the_post_thumbnail(); ?>                            
                    </div>
                    <h4 class="title"><?php the_title(); ?></h4>

                    <?php
                    if (have_posts()) {
                        $count = 1;
                        while (have_posts()) : the_post();
                            if( have_rows('content_blocks') ) {
                                while( have_rows('content_blocks') ): the_row(); ?>
                                    <section id="content_block_<?php echo $count; ?>" class="content_blocks_lists content_block_<?php echo $count; ?>">
                                        <?php
                                            echo $sub_content_block = get_sub_field('content_block');
                                        ?>
                                    </section><?php
                                    $count++;
                                endwhile;
                            } 
                        endwhile;
                    } else {
                        echo "<h3>No Contents Found.</h3>";
                    } ?>

                <hr>
                </div>
            </div>
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                <!-- single wizered start -->
                <div class="rts-single-wized Categories service">
                    <div class="wized-header">
                        <h5 class="title">
                            Services
                        </h5>
                    </div>
                    <div class="wized-body">

                        <?php 
                        $args = array( 'post_type' => 'services' );
                        $the_query = new WP_Query( $args ); 
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            
                            <ul class="single-categories">
                                <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?><i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                                                                

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>            
                        <?php endif; ?>

                    </div>
                </div>
                <!-- single wizered End -->
                
                <!-- single wizered start -->
                <div class="rts-single-wized contact service">
                    <div class="wized-header">
                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>">
                            <img src="<?php echo esc_url(home_url('/wp-content/uploads/2023/06/capital-street-footer-logo.png')); ?>" alt="Business_logo">
                        </a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here To Assist You</h5>
                        <a class="rts-btn btn-primary" href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a>
                    </div>
                </div>
                <!-- single wizered End -->
            </div>
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
<!-- End service details area -->


<?php get_footer(); ?>