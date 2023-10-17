<?php 
/*
Template Name: Blog Content
*/
?>

<?php   
        get_header(); 
        get_template_part('parts/page-title'); 
?>


<!-- start breadcrumb area -->
<!-- <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title"><?php the_title(); ?></h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span> / </span>
                    <a href="blog" class="active">Blog</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end breadcrumb area -->

<!-- rts blog grid area -->
<div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">

                    <?php 
                        $args = array( 'post_type' => 'post', 'posts_per_page' => 12 );
                        $the_query = new WP_Query( $args ); 
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="blog-grid-inner">
                                    <div class="blog-header">
                                        <a class="thumbnail" href="<?php echo get_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                        <div class="blog-info">
                                            <div class="user">
                                                <i class="fal fa-user-circle"></i>
                                                <span>by Admin</span>
                                            </div>     
                                            <div class="user">
                                                <i class="fal fa-tags"></i>
                                                <span>Business</span>
                                            </div>                                   
                                        </div>
                                        <div class="date">
                                            <h4 class="title"><?php echo date("j");?></h4>
                                            <span><?php echo date("F");?></span>
                                        </div>
                                    </div>
                                    <div class="blog-body">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <h5 class="title">
                                                <?php the_title(); ?>
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>                        

                        <!-- <div class="row mt--30">
                            <div class="col-12">
                                <div class="text-center">
                                    <div class="pagination">
                                        <button class="active">01</button>
                                        <button>02</button>
                                        <button>03</button>
                                        <button>04</button>
                                        <button><i class="fal fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>            
                        <?php endif; ?>                                                

                    </div> 
                    
                </div>
                <!--rts blog wized area -->
                
                <!-- rts- blog wized end area -->
            </div>
        </div>
    </div>
    <!-- rts blog grid area end -->


<?php get_footer(); ?>