<?php /* Template Name: Front Page */ ?>

    <?php get_header(); ?>
<!-- Main Content
    ------------------------------------------------------------------- -->
    <div class="main_content">
        <div class="m_banner">
            <div class="banner_image"
                <?php if ( has_post_thumbnail() ) { ?>
                    style="background-image: url('<?php the_post_thumbnail_url(); ?>')"
                <?php } ?>
            ></div>
            <div class="banner_title"><?php echo "Triantis Design and Consultancy" ?></div>
        </div>
        <div class="m_content">
            <?php 
                query_posts('category_name=' . 'Triantis Design and Consultancy');
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    get_template_part('content', get_post_format()); 
                endwhile; endif; 
            ?>
        </div>
    </div>

    <?php get_footer(); ?>

