<?php get_header();?>
<!-- Banner Area Start Here -->
<section class="banner-area" id="banner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="banner-content">
                    <h1><?php echo esc_html(get_theme_mod('slider_heading'));?></h1>
                    <p><?php echo esc_html(get_theme_mod('slider_sub_heading'));?> </p>
                    <a href="#contact" class="box-btn"><i class="fas fa-angle-double-right"></i><?php esc_html_e('contact us', 'xen')?></a>
                </div>
            </div>
        </div>
    </div>
    <video src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/video.mp4" muted autoplay loop></video>
</section>
<!-- Banner Area End Here -->

<!-- About Area Start Here -->
<?php if (get_theme_mod('about_section_hide', true)== true){?>
<section class="about-area pt-80 pb-80" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4">
                <div class="about-img">
                    <img class="w-100" src="<?php echo esc_url(get_theme_mod('about_img'));?>" alt="About Image">
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="about-content">
                    <h4><?php echo esc_html(get_theme_mod('about_title'));?></h4>
                    <h5><?php echo esc_html(get_theme_mod('about_sub_title'));?></h5>
                    <p><?php echo esc_html(get_theme_mod('about_desc'));?></p>
                    <a href="#contact" class="box-btn"><i class="fas fa-angle-double-right"></i> <?php esc_html_e('contact us', 'xen');?></a>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php }?>
<!-- About Area End Here -->

<!-- Services Area Start Here -->
<?php if (get_theme_mod('services_section_hide', true)== true){?>
<section class="services-area pt-80 pb-80" id="services">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('services_section_title'));?></h2>
                    <p><?php echo esc_html (get_theme_mod('services_section_des'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $services= get_theme_mod('services_box');
            foreach ($services as $service){
            ?>
            <div class="<?php echo esc_html(get_theme_mod('service_column'))?>">
                <div class="single-service">
                    <i class="<?php echo $service['service_icon']?>"></i>
                    <h4><?php echo $service['service_title']?></h4>
                    <p><?php echo $service['service_desc']?></p>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>
 <?php } ?>
<!-- Services Area End Here -->

<!-- Projects Area Start Here -->
<?php if (get_theme_mod('project_section_hide', true)== true){?>
<section class="projects-are pt-80 pb-80" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('project_section_title'));?></h2>
                    <p><?php echo esc_html (get_theme_mod('project_section_des'));?></p>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <?php
                if ($projects = get_theme_mod('project_box')){
                    foreach ($projects as $project){
            ?>
            <div class="col-xxl-4">
                <div class="single-project">
                    <img src="<?php echo wp_get_attachment_url( $project['project_main_image'] ); ?>" alt="">
                    <div class="project-hover">
                        <div class="project-content">
                            <a href="<?php echo wp_get_attachment_url( $project['project_popup_image'] ); ?>" class="project-popup"><i class="far fa-plus-square"></i></a>
                            <h4><?php echo $project['project_name'];?> <span><?php echo $project['project_category'];?></span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>

        </div>
    </div>
</section>
<?php } ?>
<!-- Projects Area End Here -->

<!-- Counter Area Start Here -->
<?php if (get_theme_mod('working_section_hide', true)== true){?>
<section class="counter-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('working_stas_title'));?></h2>
                    <p> <?php echo esc_html(get_theme_mod('working_stas_des'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
        $working_stats = get_theme_mod('work_stas_box');
        foreach ($working_stats as $working_stat){
        ?>

            <div class="col-xxl-3">
                <div class="single-counter">
                    <i class="<?php echo $working_stat['work_stas_icon'];?>"></i>
                    <h4 class="counterup"><?php echo $working_stat['working_stas_number'];?></h4>
                    <p><?php echo $working_stat['working_stas_name'];?></p>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>
<?php } ?>
<!-- Counter Area End Here -->

<!-- Testimonials Area Start Here -->
<?php if (get_theme_mod('testimonial_section_hide', true)== true){?>
<section class="testimonilas-area pt-80 pb-80" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('testimonial_title'));?></h2>
                    <p><?php echo esc_html(get_theme_mod('testimonial_desc'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-7 mx-auto">
                <div class="testimonials">
                    <?php
                    if ($testimonials = get_theme_mod('testimonial_box')){
                        foreach ($testimonials as $testimonial){
                    ?>
                    <div class="single-testimonial">
                        <img src="<?php echo wp_get_attachment_url( $testimonial['testimonial_image'] ); ?>" alt="">
                        <p><?php echo $testimonial['testimonial_text'];?></p>
                        <h4><?php echo $testimonial['testimonial_name'];?> <span><?php echo $testimonial['testimonial_desination'];?></span></h4>
                    </div>
                    <?php }} ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- Testimonilas Area End Here -->

<!-- Price Area Start Here -->
<?php if (get_theme_mod('price_section_hide', true)== true){?>
<section class="price-area pt-80 pb-80" id="prices">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('pricing_title'));?></h2>
                    <p><?php echo esc_html(get_theme_mod('pricing_desc'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if ( $prices= get_theme_mod('price_box')){
                foreach ($prices as $price){
            ?>
            <div class="col-xxl-4">
                <div class="single-price">
                    <h5><?php echo $price['price_package_title'];?></h5>
                    <h2><?php echo $price['price_package_price'];?></h2>
                    <ul>
                        <li><?php echo $price['price_package_list_one'];?></li>
                        <li><?php echo $price['price_package_list_two'];?></li>
                        <li><?php echo $price['price_package_list_three'];?></li>
                        <li><?php echo $price['price_package_list_four'];?></li>
                        <li><?php echo $price['price_package_list_five'];?></li>
                    </ul>
                    <a href="#contact" class="box-btn"><i class="fas fa-angle-double-right"></i> <?php esc_html_e('sign up', 'xen')?> </a>
                </div>
            </div>
            <?php } }?>

        </div>
    </div>
</section>
<!-- Price Area End Here -->
<?php } ?>
<!-- Team Area Start Here -->
<?php if (get_theme_mod('team_section_hide', true)== true){?>
<section class="team-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('team_title'));?></h2>
                    <p><?php echo esc_html(get_theme_mod('team_desc'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($teams = get_theme_mod('team_box')){
                foreach ($teams as $team){
            ?>
            <div class="col-xxl-4">
                <div class="single-team">
                    <img src="<?php echo wp_get_attachment_url( $team['team_member_image'] ); ?>" alt="">

                    <div class="team-social">
                        <a href="<?php echo $team['member_fb']?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $team['member_tw']?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $team['member_yt']?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="<?php echo $team['member_ln']?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="team-content">
                        <h4><?php echo $team['team_member_name'];?><span><?php echo $team['team_member_desination'];?></span></h4>
                    </div>
                </div>
            </div>
             <?php }} ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- Team Area End Here -->

<!-- Blog Area Start Here -->
<?php if (get_theme_mod('blog_section_hide', true)== true){?>
<section class="blog-area pt-80 pb-80" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('blog_title'));?></h2>
                    <p><?php echo esc_html(get_theme_mod('blog_desc'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type'=>'post',
                    'post_per_page'=>3,
                );
                $query = new WP_Query($args);
                while ($query->have_posts()){
                    $query->the_post();

            ?>
            <div class="col-xxl-4">
                <div class="single-blog">
                    <div class="blog-img">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="blog-content">
                        <h4><a href=""><?php the_title();?></a></h4>
                        <ul>
                            <li><a href=""><?php the_author();?></a></li>
                            <li><a href=""><?php echo get_the_date();?></a></li>
                        </ul>
                        <p><?php the_excerpt();?></p>
                        <a href="<?php the_permalink();?>" class="box-btn"><i class="fas fa-angle-double-right"></i> <?php esc_html_e('read more ', 'xen')?></a>
                    </div>
                </div>
            </div>
                <?php }
                wp_reset_postdata();
                ?>

        </div>
    </div>
</section>
<?php } ?>
<!-- Blog Area End Here -->

<!-- CTA Area Start Here -->
<?php if (get_theme_mod('hireme_section_hide', true)== true){?>
<section class="cta-area pt-80 pb-80" style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/assets/img/hire-me.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 mx-auto hireme">
                <h4><?php echo esc_html(get_theme_mod('hireme_title'))?></h4>
                <p><?php echo esc_html(get_theme_mod('hireme_desc'));?> </p>
                <a href="#contact" class="box-btn"><i class="fas fa-angle-double-right"></i><?php esc_html_e(' hire me', 'xen')?> </a>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- CTA Area End Here -->

<!-- Contact Area Start Here-->
<?php if (get_theme_mod('contact_section_hide', true)== true){?>
<section class="contact-area pt-80 pb-80" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title">
                    <h2><?php echo esc_html(get_theme_mod('contact_title'));?></h2>
                    <p><?php echo esc_html(get_theme_mod('contact_desc'));?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-8">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="514" title="Contact Form"]')?>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="contact-address">
                    <ul>
                        <li class="contact-social">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4><span><?php esc_html_e('Address', 'xen')?>  </span><?php echo esc_html(get_theme_mod('contact_address'));?></h4>
                        </li>
                        <li class="contact-social">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h4><span><?php esc_html_e('Phone', 'xen')?>  </span><?php echo esc_html(get_theme_mod('contact_phone'));?></h4>
                        </li>
                        <li class="contact-social">
                            <div class="contact-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <h4><span><?php esc_html_e('Email', 'xen')?>  </span><?php echo esc_html(get_theme_mod('contact_email'));?></h4>
                        </li>
                        <li class="contact-social">
                            <div class="contact-icon">
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <h4><span><?php esc_html_e('Website', 'xen')?>  </span><?php echo esc_html(get_theme_mod('contact_web_address'));?></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- Contact Area End Here-->
<?php get_footer();?>