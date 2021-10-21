<div class="section-title single-page">
    <h2><?php the_title();?></h2>
    <p class="author-box"><a href=""><?php the_author();?></a> / <span><b><?php echo get_the_date();?></b></span></p>
    <p class="single-post-img"><?php the_post_thumbnail();?></p>

    <?php the_content();?>
</div>