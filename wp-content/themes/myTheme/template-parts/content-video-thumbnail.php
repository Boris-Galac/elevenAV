<div class="swiper-slide">
    <a target="_blank" href="   
        <?php 
        if(get_field('video_url')){
            echo get_field('video_url');
        } ?>
        ">
        <?php if(has_post_thumbnail()){ ?>
        <img src="<?php the_post_thumbnail_url();?>" alt="thumbnail image" class="najava__img">
        <?php }else{ ?>
        <img src="/wp-content/themes/myTheme/src/assets/images/video-thumbnail-img.png" alt="default generic image"
            class="najava__img">
        <?php } ?>
    </a>
</div>