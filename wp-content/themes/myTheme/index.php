<?php get_header() ?>

<main class="main main-radovi">
    <!-- RADOVI SECTION -->
    <section class="radovi">
        <div class="container">
            <div class="radovi__outter-wrapper">
                <div class="radovi__wrapper">
                    <?php
                        if(have_posts()){
                            the_post();
                              get_template_part('template-parts/content', 'video-card');
                    }
                    ?>
                </div>
                <iframe src='https://widgets.sociablekit.com/linkedin-page-posts/iframe/25393075' frameborder='0'
                    width='100%' height='1000'></iframe>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>


<?php get_footer() ?>