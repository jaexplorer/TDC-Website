<div class="blog_section">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="blog_container"> 
        <div class="blog_image">
            <img src=<?php the_post_thumbnail( "full" ); ?>
        </div>
    </div>
    <?php } ?>
    <div class="blog_container">
        <div class="blog_content">
            <div class="blog_label">
                <div class="blog_title"><?php the_title(); ?></div>
                <div class="blog_title_line"></div>
                <div class="blog_subtitle"><?php echo get_secondary_title(); ?></div>
            </div>
            <div class="blog_text"><?php the_content(); ?></div>
        </div>
    </div>
</div>
