<?php get_header(); ?>

<div class="container atc-main-content">
    <div class="row">
        <div class="col-md-12">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else : ?>

                <h2><?php esc_html_e('404 Error', 'phpform'); ?></h2>
                <p><?php esc_html_e('Sorry, content not found', 'phpform'); ?></p>

            <?php endif; ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>