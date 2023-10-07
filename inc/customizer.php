<?php

function blogtheme_customizer($wp_customize){
        //1-copyright section:
        $wp_customize->add_section(
            'sec_copyright',
            array(
                'title' => 'Copyright Settings',
                'description' => 'Copyright Settings'
            )
        );
        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => 'Copyright X - All Rights Reserved',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
        $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => 'Copyright Information',
                'description' => 'Please type your copyright info here',
                'section' => 'sec_copyright',
                'type' => 'text'
            )
        );
        //1-Hero section:
        $wp_customize->add_section(
            'sec_hero',
            array(
                'title' => 'Hero Section',
            )
        );
            //Hero Height:
            $wp_customize->add_setting(
                'set_hero_height',
                array(
                    'type' => 'theme_mod',
                    'default' => 450,
                    'sanitize_callback' => 'absint'
                )
            );
            $wp_customize->add_control(
                'set_hero_height',
                array(
                    'label' => 'Hero height',
                    'description' => 'Please type your Height info here',
                    'section' => 'sec_hero',
                    'type' => 'number'
                )
            );        
        //slide 1
            //hero section TITLE: 
            $wp_customize->add_setting(
                'set_slid1_hero_title',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Title Here',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'set_slid1_hero_title',
                array(
                    'label' => 'Hero Title for slide 1',
                    'description' => 'Please type your Title info here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );
            //Subtitle:
            $wp_customize->add_setting(
                'set_slid1_hero_subtitle',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Subtitle Here',
                    'sanitize_callback' => 'sanitize_textarea_field'
                )
            );
            $wp_customize->add_control(
                'set_slid1_hero_subtitle',
                array(
                    'label' => 'Hero Subtitle for slide 1',
                    'description' => 'Please type your Subtitle info here',
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
            );
            //Button Text:
            $wp_customize->add_setting(
                'set_slid1_hero_text_button',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Text Button Here',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'set_slid1_hero_text_button',
                array(
                    'label' => 'Hero Text Button for slide 1',
                    'description' => 'Please type your Text Button info here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );
            //Button Link:
            $wp_customize->add_setting(
                'set_slid1_hero_button_link',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Button Link Here',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );
            $wp_customize->add_control(
                'set_slid1_hero_button_link',
                array(
                    'label' => 'Hero Button Link for slide 1',
                    'description' => 'Please type your Button Link info here',
                    'section' => 'sec_hero',
                    'type' => 'url'
                )
            );
            //Hero background:
            $wp_customize->add_setting(
                'set_slid1_hero_background',
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
                )
            );
            $wp_customize->add_control(
                new WP_Customize_Media_Control(
                    $wp_customize,
                    'set_slid1_hero_background',
                    array(
                        'label' => 'Hero Image for slide 1',
                        'section' => 'sec_hero',
                        'mime_type' => 'image',
                    )
                )
            );
        //slide 2
            //hero section TITLE: 
            $wp_customize->add_setting(
                'set_slid2_hero_title',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Title Here',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'set_slid2_hero_title',
                array(
                    'label' => 'Hero Title for slide 2',
                    'description' => 'Please type your Title info here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );
            //Subtitle:
            $wp_customize->add_setting(
                'set_slid2_hero_subtitle',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Subtitle Here',
                    'sanitize_callback' => 'sanitize_textarea_field'
                )
            );
            $wp_customize->add_control(
                'set_slid2_hero_subtitle',
                array(
                    'label' => 'Hero Subtitle for slide 2',
                    'description' => 'Please type your Subtitle info here',
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
            );
            //Button Text:
            $wp_customize->add_setting(
                'set_slid2_hero_text_button',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Text Button Here',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'set_slid2_hero_text_button',
                array(
                    'label' => 'Hero Text Button for slide 2',
                    'description' => 'Please type your Text Button info here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );
            //Button Link:
            $wp_customize->add_setting(
                'set_slid2_hero_button_link',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Button Link Here',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );
            $wp_customize->add_control(
                'set_slid2_hero_button_link',
                array(
                    'label' => 'Hero Button Link for slide 2',
                    'description' => 'Please type your Button Link info here',
                    'section' => 'sec_hero',
                    'type' => 'url'
                )
            );
            //Hero background:
            $wp_customize->add_setting(
                'set_slid2_hero_background',
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
                )
            );
            $wp_customize->add_control(
                new WP_Customize_Media_Control(
                    $wp_customize,
                    'set_slid2_hero_background',
                    array(
                        'label' => 'Hero Image for slide 2',
                        'section' => 'sec_hero',
                        'mime_type' => 'image',
                    )
                )
            );
        //slide 3
            //hero section TITLE: 
            $wp_customize->add_setting(
                'set_slid3_hero_title',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Title Here',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'set_slid3_hero_title',
                array(
                    'label' => 'Hero Title for slide 3',
                    'description' => 'Please type your Title info here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );
            //Subtitle:
            $wp_customize->add_setting(
                'set_slid3_hero_subtitle',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Subtitle Here',
                    'sanitize_callback' => 'sanitize_textarea_field'
                )
            );
            $wp_customize->add_control(
                'set_slid3_hero_subtitle',
                array(
                    'label' => 'Hero Subtitle for slide 3',
                    'description' => 'Please type your Subtitle info here',
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
            );
            //Button Text:
            $wp_customize->add_setting(
                'set_slid3_hero_text_button',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Text Button Here',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'set_slid3_hero_text_button',
                array(
                    'label' => 'Hero Text Button for slide 3',
                    'description' => 'Please type your Text Button info here',
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );
            //Button Link:
            $wp_customize->add_setting(
                'set_slid3_hero_button_link',
                array(
                    'type' => 'theme_mod',
                    'default' => 'Add Your Button Link Here',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );
            $wp_customize->add_control(
                'set_slid3_hero_button_link',
                array(
                    'label' => 'Hero Button Link for slide 3',
                    'description' => 'Please type your Button Link info here',
                    'section' => 'sec_hero',
                    'type' => 'url'
                )
            );
            //Hero background:
            $wp_customize->add_setting(
                'set_slid3_hero_background',
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
                )
            );
            $wp_customize->add_control(
                new WP_Customize_Media_Control(
                    $wp_customize,
                    'set_slid3_hero_background',
                    array(
                        'label' => 'Hero Image for slide 3',
                        'section' => 'sec_hero',
                        'mime_type' => 'image',
                    )
                )
            );
        //blog section:
        $wp_customize->add_section(
            'sec_blog',
            array(
                'title' => 'Blog Section'
            )
        );
        //Post per page:
        $wp_customize->add_setting(
            'set_per_page',
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_per_page',
             array(
                'label' => 'Number Of Posts Per Page',
                'section' => 'sec_blog',
                'type' => 'number'   
             )
        );


}
add_action('customize_register', 'blogtheme_customizer');