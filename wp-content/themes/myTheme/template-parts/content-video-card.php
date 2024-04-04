<article class="video-card">
    <figure class="video-card__img-wrapper">
        <a target="_blank" href="   
        <?php 
        if(get_field('video_url')){
            echo get_field('video_url');
        } ?>
        ">
            <?php if(has_post_thumbnail()){ ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail image" class="najava__img">
            <?php }else{ ?>
            <img src="/wp-content/themes/myTheme/src/assets/images/video-thumbnail-img.png" alt="default generic image"
                class="najava__img">
            <?php
                        } ?>
        </a>
    </figure>
    <div class="video-card__body">
        <div class="video-card__body-upper">
            <h3 class="h3-heading video-card-heading"><?php the_title() ?></h3>
            <div class="video-card__meta-info">
                <div class="date">
                    <img src="/wp-content/themes/myTheme/src/assets/icons/time-icon.svg" class="icon"
                        alt="time icon" /><?php the_time('F j, Y') ?>
                </div>
                <div class="tags-wrapper">
                    <?php
                    $terms = get_tags( array(
                            'hide_empty' => true, 
                    ));
                    

                    foreach( $terms as $term ) {
                        echo '<span class="aside__tag tag">#'.  $term->name  .'</span>';
                    }
?>

                </div>
            </div>
        </div>
        <div class="video-card__body-lower">
            <p class="video-card-paragraph">
                <?php 
                    if(get_field('video_description')){
                        echo get_field('video_description');
                    } ?>
            </p>
        </div>
    </div>
</article>