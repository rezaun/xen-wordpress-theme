<!-- Footer Area Start Here -->
<footer class="footer-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 common-footer">
                <?php if (esc_html(get_theme_mod('footer_section_hide', true))== true){?>
                <h4><?php echo esc_html(get_theme_mod('footer_title'));?></h4>
                <a href="<?php echo esc_html(get_theme_mod('footer_fb'));?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo esc_html(get_theme_mod('footer_tw'));?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo esc_html(get_theme_mod('footer_yt'));?>" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="<?php echo esc_html(get_theme_mod('footer_lk'));?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <?php } ?>
                <p><?php echo esc_html(get_theme_mod('copyright_text'));?></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
<?php wp_footer();?>
</body>
</html>