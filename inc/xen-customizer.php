<?php

Kirki::add_config( 'xen_config', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );
Kirki::add_panel( 'xen_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Xen Options', 'xen' ),
    'description' => esc_html__( 'Xen panel description', 'xen' ),
) );
Kirki::add_section( 'slider_section', array(
    'title'          => esc_html__( 'Slider Settings', 'xen' ),
    'panel'          => 'xen_panel',
) );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Slider Heading', 'xen' ),
    'type'     => 'text',
    'settings' => 'slider_heading',
    'section'  => 'slider_section',
    'default'  => esc_html__( 'My Name is Xen Doe', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.banner-content h1',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Slider Sub Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'slider_sub_heading',
    'section'  => 'slider_section',
    'default'  => esc_html__( 'developer - freelancer - photographer ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.banner-content p',
            'function' => 'html',
        ],
    ]
] );

//About Section
Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show About Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'about_section_hide',
    'section'  => 'about_section',
    'default'  => true,

] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add About Image', 'xen' ),
    'type'     => 'image',
    'settings' => 'about_img',
    'section'  => 'about_section',
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.about-img',
            'function' => 'html',
        ],
    ]
] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add About Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'about_title',
    'section'  => 'about_section',
    'default'  => esc_html__( 'Xen Doe', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.about-content h4',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add About Sub-Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'about_sub_title',
    'section'  => 'about_section',
    'default'  => esc_html__( 'Professional Web Developer', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.about-content h5',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'About Section Description', 'xen' ),
    'type'     => 'editor',
    'settings' => 'about_desc',
    'section'  => 'about_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est modi ad maiores, quia labore dolorem neque quae accusantium unde doloremque.', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.about-content p',
            'function' => 'html',
        ],
    ]
] );

//Services Section
Kirki::add_section( 'services_section', array(
    'title'          => esc_html__( 'Service Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Services Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'services_section_hide',
    'section'  => 'services_section',
    'default'  => true,

] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Service Column', 'xen' ),
    'type'     => 'select',
    'settings' => 'service_column',
    'section'  => 'services_section',
    'default'  => esc_html__( 'lorem ipsum', 'xen' ),
    'choices'  =>[
        'col-xxl-4' =>__('3 column', 'xen'),
        'col-xxl-3' =>__('4 column', 'xen'),
        'col-xxl-6' =>__('2 column', 'xen'),

    ],
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Servies Section Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'services_section_title',
    'section'  => 'services_section',
    'default'  => esc_html__( 'What i do', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Services Section Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'services_section_des',
    'section'  => 'services_section',
    'default'  => esc_html__( 'lorem ipsum', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Services Control', 'xen' ),
    'type'      => 'repeater',
    'settings' => 'services_box',
    'section'  => 'services_section',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Add New Service', 'xen' ),
    ],
    'fields' => [
        'service_icon' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Add Service Icon', 'xen' ),
            'choices' => [
                'fab fa-dribbble'       => __('Dribbble', 'xen'),
                'fas fa-code'           => __('Code', 'xen'),
                'far fa-copy'           => __('Copy', 'xen'),
                'fas fa-rocket'         => __('Rocket', 'xen'),
                'fas fa-camera-retro'   => __('Camera', 'xen'),
                'far fa-clock'          => __('Clock', 'xen'),
            ],
            'transport' => 'postMessage',
            'js_vars'   => [
            [
                'element'  => '.single-service i',
                'function' => 'html',
            ],
        ]
        ],
        'service_title'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Services title', 'xen' ),
            'default'     => '',
            'transport' => 'postMessage',
            'js_vars'   => [
                [
                    'element'  => '.single-service h4',
                    'function' => 'html',
                ],
            ]

        ],
        'service_desc'  => [
            'type'        => 'textarea',
            'label'       => esc_html__( 'Add Services Description', 'xen' ),
            'default'     => '',
            'transport' => 'postMessage',
            'js_vars'   => [
                [
                    'element'  => '.single-service p',
                    'function' => 'html',
                ],
            ]
        ],
    ],
] );


//Project section
Kirki::add_section( 'peoject_section', array(
    'title'          => esc_html__( 'Project Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Project Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'project_section_hide',
    'section'  => 'peoject_section',
    'default'  => true,

] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Project Section Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'project_section_title',
    'section'  => 'peoject_section',
    'default'  => esc_html__( 'See My Projects', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Project Section Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'project_section_des',
    'section'  => 'peoject_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Single Project Control', 'xen' ),
    'type'      => 'repeater',
    'settings' => 'project_box',
    'section'  => 'peoject_section',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Add Single Project', 'xen' ),
    ],
    'fields' => [
        'project_main_image' => [
            'type'        => 'image',
            'label'       => esc_html__( 'Image main', 'xen' ),
        ],
        'project_popup_image'  => [
            'type'        => 'image',
            'label'       => esc_html__( 'Pop up Image', 'xen' ),
            'default'     => '',
        ],
        'project_name'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Project Name', 'xen' ),
            'default'     => '',
        ],
        'project_category'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Project Category', 'xen' ),
            'default'     => '',
        ],
    ],
] );

//Working Statistics
Kirki::add_section( 'working_stas_section', array(
    'title'          => esc_html__( 'Working Statistics Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Working Statistics Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'working_section_hide',
    'section'  => 'working_stas_section',
    'default'  => true,

] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Working Statistics Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'working_stas_title',
    'section'  => 'working_stas_section',
    'default'  => esc_html__( 'Working Statistics', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Working Statistics Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'working_stas_des',
    'section'  => 'working_stas_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Services Control', 'xen' ),
    'type'      => 'repeater',
    'settings' => 'work_stas_box',
    'section'  => 'working_stas_section',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Add New Working Stas', 'xen' ),
    ],
    'fields' => [
        'work_stas_icon' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Add Working Stas Icon', 'xen' ),
            'choices' => [
                'fas fa-user'       => __('User', 'xen'),
                'fas fa-trophy'     => __('Trophy', 'xen'),
                'fas fa-coffee'     => __('Coffee', 'xen'),
                'far fa-gem'        => __('Dimond', 'xen'),
            ],
            'transport' => 'postMessage',
            'js_vars'   => [
                [
                    'element'  => '.single-counter i',
                    'function' => 'html',
                ],
            ]
        ],
        'working_stas_number'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Workin Stastics Number', 'xen' ),
            'default'     => '',
            'transport' => 'postMessage',
            'js_vars'   => [
                [
                    'element'  => '.single-counter h4',
                    'function' => 'html',
                ],
            ]

        ],
        'working_stas_name'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Working Stastics Name', 'xen' ),
            'default'     => '',
            'transport' => 'postMessage',
            'js_vars'   => [
                [
                    'element'  => '.single-counter p',
                    'function' => 'html',
                ],
            ]
        ],
    ],
] );

//Testimonial  Section
Kirki::add_section( 'testimonial_section', array(
    'title'          => esc_html__( 'Testimonial Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Testimonial Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'testimonial_section_hide',
    'section'  => 'testimonial_section',
    'default'  => true,

] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Testimonial Section Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'testimonial_title',
    'section'  => 'testimonial_section',
    'default'  => esc_html__( 'what clients say', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Testimonial Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'testimonial_desc',
    'section'  => 'testimonial_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Services Control', 'xen' ),
    'type'      => 'repeater',
    'settings' => 'testimonial_box',
    'section'  => 'testimonial_section',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Add Single Testimonial', 'xen' ),
    ],
    'fields' => [
        'testimonial_image' => [
            'type'        => 'image',
            'label'       => esc_html__( 'Testimonial Image', 'xen' ),
        ],
        'testimonial_text'  => [
            'type'        => 'textarea',
            'label'       => esc_html__( 'Testimonial Text', 'xen' ),
            'default'     => '',

        ],
        'testimonial_name'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Testimonial Name', 'xen' ),
            'default'     => '',
        ],
        'testimonial_desination'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Testimonial Desination', 'xen' ),
            'default'     => '',
        ],
    ],
] );

//Price Section
Kirki::add_section( 'price_section', array(
    'title'          => esc_html__( 'Price Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Price Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'price_section_hide',
    'section'  => 'price_section',
    'default'  => true,

] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Pricing Section Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'pricing_title',
    'section'  => 'price_section',
    'default'  => esc_html__( 'Working Statistics', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Working Statistics Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'pricing_desc',
    'section'  => 'price_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Price Control', 'xen' ),
    'type'      => 'repeater',
    'settings' => 'price_box',
    'section'  => 'price_section',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Add Price Package', 'xen' ),
    ],
    'fields' => [
        'price_package_title'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Price Package Title', 'xen' ),
            'default'  => esc_html__( 'basic', 'xen' ),
        ],
        'price_package_price'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Price Table package Price', 'xen' ),
            'default'  => esc_html__( '$199', 'xen' ),
        ],
        'price_package_list_one'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Price Package List One', 'xen' ),
            'default'  => esc_html__( '10 Pages Website Design', 'xen' ),
        ],
        'price_package_list_two'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Price Package List two', 'xen' ),
            'default'  => esc_html__( 'Free 1 Year Domain', 'xen' ),
        ],
        'price_package_list_three'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Price Package List three', 'xen' ),
            'default'  => esc_html__( 'Unlimited My Sql Database', 'xen' ),
        ],
        'price_package_list_four'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Price Package List four', 'xen' ),
            'default'  => esc_html__( '10 GB Free Hosting', 'xen' ),
        ],
        'price_package_list_five'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Price Package List five', 'xen' ),
            'default'  => esc_html__( '24/7 support', 'xen' ),
        ],
    ],
] );

//Team Section
Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Team Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'team_section_hide',
    'section'  => 'team_section',
    'default'  => true,

] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Team Section Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'team_title',
    'section'  => 'team_section',
    'default'  => esc_html__( 'our team', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Team Section Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'team_desc',
    'section'  => 'team_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Team Control', 'xen' ),
    'type'      => 'repeater',
    'settings' => 'team_box',
    'section'  => 'team_section',
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Add Single Team', 'xen' ),
    ],
    'fields' => [
        'team_member_image'  => [
            'type'        => 'image',
            'label'       => esc_html__( 'Team Member Image', 'xen' ),
            'default'     => '',
        ],
        'team_member_name'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Team Member Name', 'xen' ),
            'default'  => esc_html__( 'john doe ', 'xen' ),
        ],
        'team_member_desination'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Team Member Desination', 'xen' ),
            'default'  => esc_html__( 'web developer', 'xen' ),
        ],
        'member_fb'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Member Facebook', 'xen' ),
            'default'  => esc_html__( 'https://www.facebook.com/', 'xen' ),
        ],
        'member_tw'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Member Twitter', 'xen' ),
            'default'  => esc_html__( 'https://www.twitter.com/', 'xen' ),
        ],
        'member_yt'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Member Youtube', 'xen' ),
            'default'  => esc_html__( 'https://www.youtube.com/', 'xen' ),
        ],
        'member_ln'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Add Member Linkedin', 'xen' ),
            'default'  => esc_html__( 'https://www.linkedin.com/', 'xen' ),
        ],
    ],
] );


//Blog Statistics
Kirki::add_section( 'blog_section', array(
    'title'          => esc_html__( 'Blog Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Blog Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'blog_section_hide',
    'section'  => 'blog_section',
    'default'  => true,

] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Blog Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'blog_title',
    'section'  => 'blog_section',
    'default'  => esc_html__( 'Latest Articles', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Blog Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'blog_desc',
    'section'  => 'blog_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );



//Hire Me Section
Kirki::add_section( 'hireme_section', array(
    'title'          => esc_html__( 'Hire Me Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Hireme Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'hireme_section_hide',
    'section'  => 'hireme_section',
    'default'  => true,

] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Team Section Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'hireme_title',
    'section'  => 'hireme_section',
    'default'  => esc_html__( 'I Am Available For Freelancer.', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.hireme h4',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Team Section Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'hireme_desc',
    'section'  => 'hireme_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum? Eos autem natus et veniam perspiciatis. ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.hireme p',
            'function' => 'html',
        ],
    ]
] );

//Contact Us Section
Kirki::add_section( 'contact_section', array(
    'title'          => esc_html__( 'Contact Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Contact Section', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'contact_section_hide',
    'section'  => 'contact_section',
    'default'  => true,

] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Contact Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'contact_title',
    'section'  => 'contact_section',
    'default'  => esc_html__( 'contact us', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title h2',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Contact Description', 'xen' ),
    'type'     => 'textarea',
    'settings' => 'contact_desc',
    'section'  => 'contact_section',
    'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title p',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Contact Address', 'xen' ),
    'type'     => 'text',
    'settings' => 'contact_address',
    'section'  => 'contact_section',
    'default'  => esc_html__( 'New York, USA ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.contact-social h4',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Contact Phone', 'xen' ),
    'type'     => 'text',
    'settings' => 'contact_phone',
    'section'  => 'contact_section',
    'default'  => esc_html__( '+123456789 ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.contact-social h4',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Contact Email Address', 'xen' ),
    'type'     => 'text',
    'settings' => 'contact_email',
    'section'  => 'contact_section',
    'default'  => esc_html__( 'info@xen.com ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.contact-social h4',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Contact Web Address', 'xen' ),
    'type'     => 'text',
    'settings' => 'contact_web_address',
    'section'  => 'contact_section',
    'default'  => esc_html__( 'www.xen.com ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.contact-social h4',
            'function' => 'html',
        ],
    ]
] );

//   Footer Section
Kirki::add_section( 'footer_section', array(
    'title'          => esc_html__( 'Footer Section', 'xen' ),
    'panel'          => 'xen_panel',
) );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Show Upper Footer Portion', 'xen' ),
    'type'     => 'checkbox',
    'settings' => 'footer_section_hide',
    'section'  => 'footer_section',
    'default'  => true,

] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Footer Title', 'xen' ),
    'type'     => 'text',
    'settings' => 'footer_title',
    'section'  => 'footer_section',
    'default'  => esc_html__( 'xen doe ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.common-footer h4',
            'function' => 'html',
        ],
    ]
] );
Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Footer Facebook link', 'xen' ),
    'type'     => 'text',
    'settings' => 'footer_fb',
    'section'  => 'footer_section',
        'default'  => esc_html__( 'https://www.facebook.com/ ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.common-footer a',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Footer Facebook link', 'xen' ),
    'type'     => 'text',
    'settings' => 'footer_tw',
    'section'  => 'footer_section',
        'default'  => esc_html__( 'https://www.twitter.com/ ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.common-footer a',
            'function' => 'html',
        ],
    ]
] );

Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Footer Facebook link', 'xen' ),
    'type'     => 'text',
    'settings' => 'footer_yt',
    'section'  => 'footer_section',
        'default'  => esc_html__( 'https://www.youtube.com/ ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.common-footer a',
            'function' => 'html',
        ],
    ]
] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Add Footer Facebook link', 'xen' ),
    'type'     => 'text',
    'settings' => 'footer_lk',
    'section'  => 'footer_section',
        'default'  => esc_html__( 'https://www.linkedin.com/ ', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.common-footer a',
            'function' => 'html',
        ],
    ]
] );


Kirki::add_field( 'xen_config', [
    'label'    => esc_html__( 'Copyright Text', 'xen' ),
    'type'     => 'text',
    'settings' => 'copyright_text',
    'section'  => 'footer_section',
        'default'  => esc_html__( 'all rights reserved © 2021', 'xen' ),
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.common-footer p',
            'function' => 'html',
        ],
    ]
] );

