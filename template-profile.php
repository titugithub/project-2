<?php 

/*
    Template Name: Profile
*/




?>
<?php 
$my_options = get_option( 'my_framework' );

?>
<?php get_header()?>
        <!-- header image -->
        <div class="header-img-3"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase"><?php echo esc_html( $my_options['ofsdafsfpt-4gfssgstext'] ) ; ?></h2>
                            <img src="<?php echo get_template_directory_uri()?>/img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description"><?php echo esc_html( $my_options['offdsfdshpt-texthdarea'] ) ; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Profile</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>


                <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                           
                            <!-- <li class=""><a href="#" data-filter=".web">Web</a></li>
                            <li class=""><a href="#" data-filter=".branding">Branding</a></li>
                            <li class=""><a href="#" data-filter=".print">Print</a></li> -->

                            <?php
                                $cats = get_terms('portfolio-cat');
                                foreach($cats as $cat) {
                            ?>
                                
                                <li class=""><a href="#" data-filter=".<?php echo esc_html($cat->slug) ;?>"><?php echo esc_html( $cat->name ) ;?></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>


                <div id="folio-container" class="row">



                    <?php

                    $args = array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => -1
                    );
                    $query = new WP_Query($args);
                    while( $query -> have_posts() ) {
                        $query -> the_post();
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item 
                    <?php
                        $port_cat = get_the_terms(get_the_ID(), 'portfolio-cat');
                        foreach($port_cat as $cat) {
                           echo esc_html($cat->slug) .' ';
                        }
                     ?> ">
                    ">
                        
                        <?php the_post_thumbnail('', ['class' => 'img-thumbnail', 'title' => 'Feature image'])?>
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