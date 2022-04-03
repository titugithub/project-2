<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Option',
      'menu_slug'  => 'my-framework',
    ) );

    // Create a top-tab
    CSF::createSection( $prefix, array(
        'id'    => 'primary_tab', // Set a unique slug-like ID
        'title' => 'Homepage',
    ) );
  
    // header option area

    CSF::createSection( $prefix, array(
        'title'  => 'Header Option',
        'parent' => 'primary_tab',
        'fields' => array(
            array(
                'id'    => 'opt-switcher-1',
                'type'  => 'switcher',
                'title' => 'Switcher',
                'default'    => true
              ),
            // slider
            array(
                'id'    => 'opt-background-1',
                'type'  => 'background',
                'title' => 'Background',
                'output' => '.header-img',
              ),
            //   header title
            array(
                'id'      => 'opt-text',
                'type'    => 'text',
                'title'   => 'Title',
                'default' => 'Hello world.'
            ),
            //   header content
            array(
                'id'      => 'opt-textarea',
                'type'    => 'textarea',
                'title'   => 'Description',
                'default' => 'Multi Profile is free responsive website template for everyone. Feel free to download and use this template for your websites. Thank you for visiting templatemo.'
            ),

              
  
    
        )
      ) );

        // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Slider Option',
    'parent' => 'primary_tab',
    'fields' => array(

      //
      // slider title
      array(
        'id'    => 'ofpft2text',
        'type'  => 'text',
        'title' => 'slider title',
      ),
      // slider subtitle
      array(
        'id'    => 'opftsftext',
        'type'  => 'text',
        'title' => 'slider subtitle',
      ),
      // slider content title
      array(
        'id'    => 'opftsfftext',
        'type'  => 'text',
        'title' => ' slider content title',
      ),
      // slider content
      array(
        'id'    => 'opftdsftext',
        'type'  => 'wp_editor',
        'title' => 'slider content',
      ),
      
    //   add slider image
      array(
        'id'     => 'optwrerwwpeater1',
        'type'   => 'repeater',
        'title'  => 'add slider image',
        'fields' => array(
      
            array(
                'id'    => 'optyuddusmediai1',
                'type'  => 'media',
                'title' => 'slider image',
              ),
      
        ),
      ),

    )
  ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'About Us',
        'parent' => 'primary_tab',
        'fields' => array(
    
            // About title
            array(
                'id'    => 'ofpfqt2tdext',
                'type'  => 'text',
                'title' => 'About title',
            ),
            // About subtitle
            array(
                'id'    => 'opftwsfetext',
                'type'  => 'text',
                'title' => 'About subtitle',
            ),
             // About content title
            array(
                'id'    => 'opftsfsdftext',
                'type'  => 'text',
                'title' => ' About content title',
            ),
            // About content
            array(
                'id'    => 'opfstdsssftext',
                'type'  => 'wp_editor',
                'title' => 'About content',
            ),



            // Title1
            array(
                'id'    => 'ofpffqt2fftdext',
                'type'  => 'text',
                'title' => 'Title1',
            ),
            // Image1
            array(
                'id'    => 'opddfst-media-1',
                'type'  => 'media',
                'title' => 'Image1',
              ),
            // Title2
            array(
                'id'    => 'ofdfpfqt2tdext',
                'type'  => 'text',
                'title' => 'Title2',
            ),
            // Image2
            array(
                'id'    => 'opt-mdedfffsia-1',
                'type'  => 'media',
                'title' => 'Image2',
              ),
            // Title3
            array(
                'id'    => 'ofpfqt2tffdext',
                'type'  => 'text',
                'title' => 'Title3',
            ),
            // Image3
            array(
                'id'    => 'opt-mefddddia-1',
                'type'  => 'media',
                'title' => 'Image3',
              ),
              

    
        )
      ) );

  

        // Create a sub-tab
        CSF::createSection( $prefix, array(
          'parent' => 'primary_tab', // The slug id of the parent section
          'title'  => 'Feature Section',
          

          'fields' => array(

            // Feature title
            array(
              'id'    => 'opte4text',
              'type'  => 'text',
              'title' => 'Feature title',
            ),
            // Feature subtitle
            array(
              'id'    => 'opt4ffftext',
              'type'  => 'text',
              'title' => 'Feature title',
            ),
            // Feature content
            array(
              'id'    => 'opt4545ftext',
              'type'  => 'textarea',
              'title' => 'Feature title',
            ),
            // Feature repeater
            array(
              'id'     => 'opt8e8ecrepeater-1eeeed',
              'type'   => 'fieldset',
              'title'  => 'Add Feature',
              'max'  => 4,
              'fields' => array(
                // Skill title
                array(
                  'id'    => 'aopt8hdfhgas7dd86text',
                  'type'  => 'text',
                  'title' => 'Skill1 Name'
                ),
                // Skill Number
                array(
                  'id'    => 'opt4faaaffsnumber-1',
                  'type'  => 'number',
                  'title' => 'Skill1 Number',
                ),
                // Skill2 title
                array(
                  'id'    => 'oagdgpt87dd86text',
                  'type'  => 'text',
                  'title' => 'Skill2 Name'
                ),
                // Skill2 Number
                array(
                  'id'    => 'opt4fffsnughnhmber-d1',
                  'type'  => 'number',
                  'title' => 'Skill2 Number',
                ),
                // Skill3 title
                array(
                  'id'    => 'vopt87aaadd86text',
                  'type'  => 'text',
                  'title' => 'Skill3 Name'
                ),
                // Skill3 Number
                array(
                  'id'    => 'opt4fffsngfdgdfgumber-cc1',
                  'type'  => 'number',
                  'title' => 'Skill3 Number',
                ),
                // Skill4 title
                array(
                  'id'    => 'zopt87dd8hhsd6text',
                  'type'  => 'text',
                  'title' => 'Skill4 Name'
                ),
                // Skill4 Number
                array(
                  'id'    => 'opt4fffsnumberfffs-ccc1',
                  'type'  => 'number',
                  'title' => 'Skill4 Number',
                ),
            
              ),
            ),
            

          )
        ) );
















    // Create a top-tab
    CSF::createSection( $prefix, array(
        'id'    => 'primary_tab2', // Set a unique slug-like ID
        'title' => 'Aboutpage',
    ) );

    CSF::createSection( $prefix, array(
      'title'  => 'Header Option',
      'parent' => 'primary_tab2',
      'fields' => array(
          array(
              'id'    => 'opt-switcher-2',
              'type'  => 'switcher',
              'title' => 'Switcher',
              'default'    => true
            ),
          // slider
          array(
              'id'    => 'opt-background-12',
              'type'  => 'background',
              'title' => 'Background',
              'output' => '.header-img-2',
            ),
          //   header title
          array(
              'id'      => 'opt-ddtext1212',
              'type'    => 'text',
              'title'   => 'Title',
              'default' => 'Hello world.'
          ),
          //   header content
          array(
              'id'      => 'opt-tfgggextarea323',
              'type'    => 'textarea',
              'title'   => 'Description',
              'default' => 'Multi Profile is free responsive website template for everyone. Feel free to download and use this template for your websites. Thank you for visiting templatemo.'
          ),

            

  
      )
    ) );


      // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'primary_tab2', // The slug id of the parent section
    'title'  => 'Feature',
    'fields' => array(

      // title
      array(
        'id'    => 'opt-t33342342fext',
        'type'  => 'text',
        'title' => 'Title',
      ),
      // subtitle
      array(
        'id'    => 'opt43-54423text',
        'type'  => 'text',
        'title' => 'Subtitle',
      ),

      array(
        'id'     => 'opt-rsfserrr865repeater-1',
        'type'   => 'repeater',
        'title'  => 'Add Feature',
        'fields' => array(
      
          array(
            'id'    => 'opt545345-5text',
            'type'  => 'media',
            'title' => 'Image'
          ),
          array(
            'id'    => 'opt-4355text',
            'type'  => 'text',
            'title' => 'Title'
          ),
          array(
            'id'    => 'o342423545pt-text',
            'type'  => 'textarea',
            'title' => 'Description'
          ),
      
        ),
      ),

    )
  ) );

      // Create a top-tab
      CSF::createSection( $prefix, array(
        'id'    => 'primary_tab3', // Set a unique slug-like ID
        'title' => 'Profile Page',
    ) );
  
    // header option area

    CSF::createSection( $prefix, array(
        'title'  => 'Header Option',
        'parent' => 'primary_tab3',
        'fields' => array(
            array(
                'id'    => 'opt-swsfsdfdsgdditcher-1',
                'type'  => 'switcher',
                'title' => 'Switcher',
                'default'    => true
              ),
            // slider
            array(
                'id'    => 'opt4dd-bacskground-1',
                'type'  => 'background',
                'title' => 'Background',
                'output' => '.header-img-3',
              ),
            //   header title
            array(
                'id'      => 'ofsdafsfpt-4gfssgstext',
                'type'    => 'text',
                'title'   => 'Title',
                'default' => 'Hello world.'
            ),
            //   header content
            array(
                'id'      => 'offdsfdshpt-texthdarea',
                'type'    => 'textarea',
                'title'   => 'Description',
                'default' => 'Multi Profile is free responsive website template for everyone. Feel free to download and use this template for your websites. Thank you for visiting templatemo.'
            ),

              
  
    
        )
      ) );







      // Contact


            // Create a top-tab
            CSF::createSection( $prefix, array(
              'id'    => 'primary_tab4', // Set a unique slug-like ID
              'title' => 'Contact Page',
          ) );
        
          // header option area
      
          CSF::createSection( $prefix, array(
              'title'  => 'Header Option',
              'parent' => 'primary_tab4',
              'fields' => array(
                  array(
                      'id'    => 'opt43423swsfsdfdsgdditcher-1',
                      'type'  => 'switcher',
                      'title' => 'Switcher',
                      'default'    => true
                    ),
                  // slider
                  array(
                      'id'    => 'opt4dd36666bacskground-1',
                      'type'  => 'background',
                      'title' => 'Background',
                      'output' => '.header-img-5',
                    ),
                  //   header title
                  array(
                      'id'      => 'ofsdafsfpt344gfssgstext',
                      'type'    => 'text',
                      'title'   => 'Title',
                      'default' => 'Hello world.'
                  ),
                  //   header content
                  array(
                      'id'      => 'offdsfdshpt4535texthdarea',
                      'type'    => 'textarea',
                      'title'   => 'Description',
                      'default' => 'Multi Profile is free responsive website template for everyone. Feel free to download and use this template for your websites. Thank you for visiting templatemo.'
                  ),
      
                    
        
          
              )
            ) );

              // Create a sub-tab
              CSF::createSection( $prefix, array(
                'parent' => 'primary_tab4', // The slug id of the parent section
                'title'  => 'Contact Section',
                'fields' => array(

                  // contact title
                  array(
                    'id'    => 'opt7f55d7etext',
                    'type'  => 'text',
                    'title' => 'Contact title',
                  ),
                  // contact subtitle
                  array(
                    'id'    => 'opt9d5tt5909text',
                    'type'  => 'text',
                    'title' => 'Contact subtitle',
                  ),
                  // Information title
                  array(
                    'id'    => 'opt7tt445f55d7etext',
                    'type'  => 'text',
                    'title' => 'Information title',
                  ),
                  // Information subtitle
                  array(
                    'id'    => 'opt945t55d55909text',
                    'type'  => 'textarea',
                    'title' => 'Information subtitle',
                  ),
                  // Address title
                  array(
                    'id'    => 'opt7445f43543t55d7etext',
                    'type'  => 'text',
                    'title' => 'Address',
                  ),
                  // Email title
                  array(
                    'id'    => 'opt744544f43543t55d7etext',
                    'type'  => 'text',
                    'title' => 'Email',
                  ),
                  // Phone title
                  array(
                    'id'    => 'opt744445f43543t55d7etext',
                    'type'  => 'text',
                    'title' => 'Phone',
                  ),
                  array(
                    'id'    => 'opt-map-1',
                    'type'  => 'map',
                    'title' => 'Map',
                  ),

                )
              ) );


  }
  