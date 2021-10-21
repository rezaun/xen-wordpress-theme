<?php
get_header();
?>
    <section class="blog-area pt-80 pb-80" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8">
                    <?php
                        while (have_posts()){
                            the_post();
                            get_template_part('template-parts/content');
                        }

                    ?>
                </div>
                <div class="col-xxl-4">
                    <div class="section-title">
                        <h2>Sidebar</h2>
                        <ul>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                            <li><a href="">One</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php
get_footer();
?>