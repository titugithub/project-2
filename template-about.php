<?php 

/*
    Template Name: About Us
*/




?>
<?php get_header()?>
<?php 
$my_options = get_option( 'my_framework' );

?>
        <!-- header image -->
        <div class="header-img-2"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase"><?php echo esc_html($my_options['opt-ddtext1212'] ) ; ?></h2>
                            <img src="<?php echo get_template_directory_uri()?>/img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description"><?php echo esc_html($my_options['opt-tfgggextarea323'] ) ; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Who We Are</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Lorem ip sums</p>
                    </div>
                </div>
                <div class="row">

                <?php
                    $philosophy_fp = new WP_Query(
                        array(
                            'post_type' => 'sliders',
                            'posts_per_page' => 4
                        )
                    );

                    $post_data = array();
                    while ( $philosophy_fp->have_posts() ) {
                        $philosophy_fp->the_post();
                        $post_data[] = array(
                            "title" => get_the_title(),
                            "content"=>get_the_content(),
                            "thumbnail"=>get_the_post_thumbnail_url(get_the_ID(),"large"),
                            "exercpt"=>get_the_excerpt(),
                            "subtitle"=>get_field('subtitle'),
                            "permalink"=>get_permalink(),

                        );
                    }
                   ?>

                    
                    
                    <div class="col-lg-7 col-md-7 col-sm-7 tm-about-left">
                        <img src="<?php echo esc_url($post_data[0]['thumbnail']) ?>" alt="Image" class="img-responsive margin-bottom-30">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><?php echo esc_html($post_data[0]['title']); ?></h3>
                        <?php echo esc_html($post_data[0]['content']); ?>
                        <div style="margin-top:20px">
                        <a href=" <?php echo esc_html($post_data[0]['permalink']); ?>" class="btn-blue-gradient">Prima Liuam</a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 tm-about-right">

                        <a href=" <?php echo esc_html($post_data[1]['permalink']); ?>">
                        <div class="tm-img-container margin-bottom-30">
                            <div class="tm-img-overlay">
                                <p class="img-description"><?php echo esc_html($post_data[1]['title']); ?></p>
                                <p class="img-title"><?php echo esc_html($post_data[1]['subtitle']); ?></p>
                            </div>
                            <img src="<?php echo esc_url($post_data[1]['thumbnail']) ?>" alt="Image" class="img-responsive">
                        </div>
                        </a>

                        <a href=" <?php echo esc_html($post_data[2]['permalink']); ?>">
                        <div class="tm-img-container margin-bottom-30">
                            <div class="tm-img-overlay">
                                <p class="img-description"><?php echo esc_html($post_data[2]['title']); ?></p>
                                <p class="img-title"><?php echo esc_html($post_data[2]['subtitle']); ?></p>
                            </div>
                            <img src="<?php echo esc_url($post_data[2]['thumbnail']) ?>" alt="Image" class="img-responsive">
                        </div>
                        </a>

                        <a href=" <?php echo esc_html($post_data[3]['permalink']); ?>">
                        <div class="tm-img-container margin-bottom-30">
                            <div class="tm-img-overlay">
                                <p class="img-description"><?php echo esc_html($post_data[3]['title']); ?></p>
                                <p class="img-title"><?php echo esc_html($post_data[3]['subtitle']); ?></p>
                            </div>
                            <img src="<?php echo esc_url($post_data[3]['thumbnail']) ?>" alt="Image" class="img-responsive">
                        </div>
                        </a>

                    </div>

                </div>
            </div>
        </section>
        <section class="templatemo-container light-gray-bg section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title"><?php echo esc_html( $my_options['opt-t33342342fext']) ; ?></h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php echo esc_html($my_options['opt43-54423text'] ) ; ?></p>
                    </div>
                </div> <!-- row -->
                <div class="row">



                    <?php 
                        $khdgf = $my_options['opt-rsfserrr865repeater-1'];
                        foreach ($khdgf as $khdgfss) {
                            ?>
                                <div class="col-lg-4 col-md-4 col-sm-4 text-center tm-about-container-2">
                                    <img src="<?php echo esc_html( $khdgfss['opt545345-5text']['url']) ?>" alt="Image">
                                    <h3 class="text-uppercase about-h3"><?php echo esc_html($khdgfss['opt-4355text'] ) ?></h3>
                                    <p class="about-description"><?php echo esc_html($khdgfss['o342423545pt-text'] ) ?></p>
                                </div>
                            <?php
                            
                        }
                        
                    ?> -->

                </div>
            </div>
        </section>
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title"><?php esc_html_e( 'Recent Posts')?>  </h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php esc_html_e( 'Proin Gravidani')?> </p>
                    </div>
                </div>
                <div class="row">



                    <?php

                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4
                        );
                        $query = new WP_Query($args);
                        while( $query -> have_posts() ) {
                            $query -> the_post();
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="recent-post-container">
                                <h3 class="text-uppercase recent-post-title margin-bottom-30"><?php the_title();?></h3>
                                <?php the_post_thumbnail()?>
                                <p class="justify-text"><?php the_content()?></p>
                            </div>
                        </div>
                        <?php
                        }
                        wp_reset_postdata();
                        
                    ?>




                </div>
            </div>
        </section>
        <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
        <?php get_footer()?>