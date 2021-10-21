<?php

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function xen_activation(){
    $plugins =array(
        array(
            'name'      => __('Kirki Customizer Framework','xen'),
            'slug'      => 'kirki',
            'required'  => true,

        ),
        array(
            'name'      => __('Contact Form 7','xen'),
            'slug'      => 'contact-form-7',
            'required'  => true,

        )
    );

    $config = array(
        'id'            => 'xen_plugins_activation',
        'menu'          => 'xen-plugins-activation',
        'parent_slug'   => 'themes.php',
        'has_notices'   => true,
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register','xen_activation');