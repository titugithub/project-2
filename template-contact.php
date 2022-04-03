<?php 

/*
    Template Name: Contact Us
*/




?>
<?php get_header()?>
<?php 
$my_options = get_option( 'my_framework' );

?>
        <!-- header image -->
        <div class="header-img-2 header-img-5">
        </div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase"><?php echo esc_html( $my_options['ofsdafsfpt344gfssgstext']) ; ?></h2>
                            <img src="<?php echo get_template_directory_uri()?>/img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description"><?php echo esc_html( $my_options['offdsfdshpt4535texthdarea']) ; ?></p>
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
                        <h2 class="section-title"><?php echo esc_html( $my_options['opt7f55d7etext']) ; ?></h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small"><?php echo esc_html($my_options['opt9d5tt5909text'] ) ; ?></p>
                    </div> <!-- col-lg-12 -->
                </div> <!-- row -->
                <div class="row margin-bottom-30">
                    <div class="col-lg-6 col-md-6 contact-left">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><?php echo esc_html( $my_options['opt7tt445f55d7etext']) ; ?></h3>
                        <p class="margin-bottom-30"><?php echo esc_html($my_options['opt945t55d55909text'] ) ; ?></p>
                        <div class="contact-point">
                            <i class="fa fa-map-marker fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700"><?php esc_html( 'Address')?> </b>
                                <p class="contact-point-detail"><?php echo esc_html($my_options['opt7445f43543t55d7etext'] ) ; ?></p>
                            </div>
                        </div>
                        <div class="contact-point">
                            <i class="fa fa-envelope-o fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Email</b>
                                <p class="contact-point-detail"><?php echo esc_html($my_options['opt744544f43543t55d7etext'] ) ; ?></p>
                            </div>
                        </div>
                        <div class="contact-point">
                            <i class="fa fa-phone fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Phone</b>
                                <p class="contact-point-detail"><?php echo esc_html($my_options['opt744445f43543t55d7etext'] ) ; ?></p>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6 contact-right">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b><?php esc_html( 'Leave')?> </b> <span class="blue-text"><?php esc_html( 'a message')?> </span></h3>
                        <div action="#" method="post" class="tm-contact-form">
                            <div class="tm-contact-form">


                                <!-- <div class="form-group">
                                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" class="form-control" rows="8" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="text-uppercase btn-blue-gradient btn-submit">send message</button>
                                </div> -->

                                <?php 
                                    echo do_shortcode('[contact-form-7 id="118" title="Contact form 1"]');
                                ?>



                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map-container">
                            <div id="google-map" class="google-map">
                            <?php
                                $google_map = $my_options['opt-map-1'];
                            ?>
                            <div class="responsive-map-container">
                            <iframe width="1130" height="423" src="https://maps.google.com/maps?q=<?php echo esc_html($google_map['latitude'] ) ;?>, <?php echo esc_html($google_map['longitude'] ) ;?>&z=15&output=embed" style="border:0"></iframe>
                        </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </section>
        <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
        <script>
            /* Google map
            ------------------------------------------------*/
            // var map = '';
            // var center;

            // function initialize() {
            //     var mapOptions = {
            //       zoom: 16,
            //       center: new google.maps.LatLng(13.758468,100.567481),
            //       scrollwheel: false
            //     };

            //     map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            //     google.maps.event.addDomListener(map, 'idle', function() {
            //         calculateCenter();
            //     });

            //     google.maps.event.addDomListener(window, 'resize', function() {
            //         map.setCenter(center);
            //     });
            // }

            // function calculateCenter() {
            //   center = map.getCenter();
            // }

            // function loadGoogleMap(){
            //     var script = document.createElement('script');
            //     script.type = 'text/javascript';
            //     script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            //     document.body.appendChild(script);
            // }
            // $(document).ready(function(){
            //     loadGoogleMap();
            // });
        </script>
        <?php get_footer()?>