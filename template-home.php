<?php 

/*
    Template Name: Home
*/




?>
<?php get_header()?>
<?php 
$my_options = get_option( 'my_framework' );

?>

        <!-- header image -->
        <?php if ( $my_options['opt-switcher-1']  ) : ?>
        <div  class="header-img"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase"><?php echo esc_html( $my_options['opt-text'] ) ; ?></h2>
                            <img src="<?php echo get_template_directory_uri()?>/img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description"><?php echo esc_html($my_options['opt-textarea']  ) ; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title"><?php echo esc_html(  $my_options['ofpft2text'] ); ?></h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php echo esc_html( $my_options['opftsftext'] ) ; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b>Morbi</b> <span class="blue-text"><?php echo esc_html( $my_options['opftsfftext'] ) ; ?></span></h3>
                        <p><?php echo esc_html( $my_options['opftdsftext'] ) ; ?></p>
                        <a href="#" class="btn-blue-gradient">Prima Liuam</a>
                        <a href="#" class="btn-transparent">Prima Liuam</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="carousel-container">
                            <div class="crsl-items" data-navigation="navbtns">
                                <div class="crsl-wrap">

   
                                    <?php 
                                        $sliderimages = $my_options['optwrerwwpeater1'];
                                        foreach ($sliderimages as $sliderimage) {
                                            ?>
                                                <figure class="crsl-item">
                                                    <img src="<?php echo esc_html($sliderimage['optyuddusmediai1']['url']) ?>" alt="Image" class="img-responsive img-thumbnail">
                                                </figure>
                                            <?php
                                        }
                                        
                                    ?>
                                </div>
                            </div>
                        </div>   <!-- carousel-container -->
                        <div id="navbtns" class="crsl-nav">
                            <a href="#" class="previous">
                                <img src="<?php echo get_template_directory_uri()?>/img/carousel-arrow-previous.png" alt="previous">
                            </a>
                            <a href="#" class="next">
                                <img src="<?php echo get_template_directory_uri()?>/img/carousel-arrow-next.png" alt="next">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end section content -->
            </div>
        </section>

        

        
        <!-- Who We Are -->
        <section class="templatemo-container light-gray-bg section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title"><?php echo esc_html($my_options['ofpfqt2tdext'] ) ?></h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php echo esc_html( $my_options['opftwsfetext'])  ?></p>
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="tm-blocks-container effect1">
                            <div class="tm-block green-bg">
                                <a href="#" class="tm-block-link"><?php echo esc_html($my_options['ofpffqt2fftdext'] ) ?></a>
                            </div>
                            <div class="tm-block">
                                <img src="<?php echo esc_html($my_options['opddfst-media-1']['url'] ) ?>" alt="Image" class="img-responsive">
                            </div>
                            <div class="tm-block">
                                <img src="<?php echo esc_html( $my_options['opt-mdedfffsia-1']['url']) ?>" alt="Image" class="img-responsive">
                            </div>
                            <div class="tm-block red-bg">
                                <a href="#" class="tm-block-link"><?php echo esc_html($my_options['ofdfpfqt2tdext'] ) ?></a>
                            </div>
                            <div class="tm-block yellow-bg">
                                <a href="#" class="tm-block-link"><?php echo esc_html($my_options['ofpfqt2tffdext'] ) ?></a>
                            </div>
                            <div class="tm-block">
                                <img src="<?php echo esc_html($my_options['opt-mefddddia-1']['url'] ) ?>" alt="Image" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><?php echo esc_html( $my_options['opftsfsdftext']) ?></h3>
                        <p class="justify-text"><?php echo esc_html( $my_options['opfstdsssftext']) ?></p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Blog -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title"><?php esc_html_e('Blog' )?> </h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php esc_html_e( 'Proin Gravidani')?> </p>
                    </div>
                </div>
                <div class="row posts-container">

                <?php
                    $philosophy_fp = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 5
                        )
                    );

                    $post_data = array();
                    while ( $philosophy_fp->have_posts() ) {
                        $philosophy_fp->the_post();
                        $post_data[] = array(
                            "title" => get_the_title(),
                            "date"=>get_the_date('m'),
                            "datee"=>get_the_date('j'),
                            "exercpt"=>get_the_excerpt(),

                            
                            
                        );
                    }
                   ?>

                    <div class="post-excerpt post-excerpt-left">
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[0]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[0]['exercpt']); ?></p>
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[0]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[0]['datee']); ?></div>
                        </div>
                        <div class="post-arrow-container rotate-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                    </div>


                    <div class="post-excerpt post-excerpt-right">
                        <div class="post-arrow-container">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[1]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[1]['datee']); ?></div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[1]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[1]['exercpt']); ?></p>
                        </div>
                    </div>




                    <div class="post-excerpt post-excerpt-left">
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[2]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[2]['exercpt']); ?></p>

                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[2]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[2]['datee']); ?></div>
                        </div>
                        <div class="post-arrow-container rotate-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                    </div>



                    <div class="post-excerpt post-excerpt-right">
                        <div class="post-arrow-container">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[3]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[3]['datee']); ?></div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[3]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[3]['exercpt']); ?></p>

                        </div>
                    </div>



                    <div class="post-excerpt post-excerpt-left">
                        <div class="post-content">
                            <h3 class="post-title"><?php echo esc_html($post_data[4]['title']); ?></h3>
                            <p class="post-description"><?php echo esc_html($post_data[4]['exercpt']); ?></p>
                        </div>
                        <div class="post-date-container">
                            <div class="post-month"><?php echo esc_html($post_data[4]['date']); ?></div>
                            <div class="post-date"><?php echo esc_html($post_data[4]['datee']); ?></div>
                        </div>
                        <div class="post-arrow-container rotate-arrow">
                            <img src="<?php echo get_template_directory_uri()?>/img/blog-arrow.png" alt="arrow">
                        </div>
                    </div>


                

                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="templatemo-container features">
            <div class="container features-content">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title"><?php echo esc_html($my_options['opte4text'] ) ?></h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php echo esc_html($my_options['opt4ffftext'] ) ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="feature-container">
                        <p class="text-center margin-bottom-30 gray-text"><?php echo esc_html($my_options['opt4545ftext'] ) ?></p>
                        <?php 
                         $featureskill = $my_options['opt8e8ecrepeater-1eeeed'];
                        ?>
                        <div class="tm-progress-container tm-progress-container-left">
                            <div class="tm-progress-label">
                                <p class="pull-left"><?php echo esc_html($featureskill['aopt8hdfhgas7dd86text'] ) ;?></p>
                                <p class="pull-right"><?php echo esc_html($featureskill['opt4faaaffsnumber-1'] ) ;?>%</p>
                            </div>
                            <div class="progress tm-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html($featureskill['opt4faaaffsnumber-1'] ) ;?>%;">
                                <span class="sr-only"><?php esc_html('80% Complete')?> </span>
                              </div>
                            </div>
                        </div>

                        <div class="tm-progress-container tm-progress-container-right">
                            <div class="tm-progress-label">
                                <p class="pull-left"><?php echo esc_html($featureskill['oagdgpt87dd86text'] ) ;?></p>
                                <p class="pull-right"><?php echo esc_html($featureskill['opt4fffsnughnhmber-d1'] ) ;?>%</p>
                            </div>
                            <div class="progress tm-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( $featureskill['opt4fffsnughnhmber-d1']) ;?>%;">
                                <span class="sr-only"><?php esc_html( '75% Complete')?> </span>
                              </div>
                            </div>
                        </div>

                        <div class="tm-progress-container tm-progress-container-left">
                            <div class="tm-progress-label">
                                <p class="pull-left"><?php echo esc_html($featureskill['vopt87aaadd86text'] ) ;?></p>
                                <p class="pull-right"><?php echo esc_html($featureskill['opt4fffsngfdgdfgumber-cc1'] ) ;?>%</p>
                            </div>
                            <div class="progress tm-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( $featureskill['opt4fffsngfdgdfgumber-cc1']) ;?>%;">
                                <span class="sr-only">90% Complete</span>
                              </div>
                            </div>
                        </div>
                       
                        <div class="tm-progress-container tm-progress-container-right">
                            <div class="tm-progress-label">
                                <p class="pull-left"><?php echo esc_html( $featureskill['zopt87dd8hhsd6text'] );?></p>
                                <p class="pull-right"><?php echo esc_html( $featureskill['opt4fffsnumberfffs-ccc1']) ;?>%</p>
                            </div>
                            <div class="progress tm-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( $featureskill['opt4fffsnumberfffs-ccc1']) ;?>%;">
                                <span class="sr-only">86% Complete</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-overlay"></div>
        </section>



        <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
      <?php get_footer()?>