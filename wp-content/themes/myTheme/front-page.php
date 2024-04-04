<?php get_header() ?>


<main class="main">
    <!-- HERO SECTION -->
    <section class="hero">
        <video class="video-overlay mobile-video" autoplay loop muted playsinline preload="auto"
            poster="/wp-content/themes/myTheme/src/assets/images/hero-overlay.jpg">
            <source src="/wp-content/themes/myTheme/src/assets/hero-video-overlay-mobile.mp4" type="video/mp4" />
        </video>
        <video class="video-overlay desktop-video" autoplay loop muted playsinline preload="auto"
            poster="/wp-content/themes/myTheme/src/assets/images/hero-overlay.jpg">
            <source src="/wp-content/themes/myTheme/src/assets/hero-video-overlay (2).mp4" type="video/mp4" />
        </video>
        <div class="video-overlay-after"></div>
        <div class="container">
            <div class="hero__wrapper">
                <div class="headline-wrapper">
                    <h1 class="hero__headline typing-demo"></h1>
                </div>
            </div>
        </div>
        <a class="scroll-down-btn" href="#about"><img
                src="/wp-content/themes/myTheme/src/assets/icons/down-arrow-icon.svg" alt="donw arrow" /></a>
    </section>
    <!-- end of hero section -->
    <!-- ABOUT US SECTION -->
    <section class="about" id="about">
        <div class="about__wrapper">
            <h2 class="about-heading">
                <img src="/wp-content/themes/myTheme/src/assets/images/logo-white.png" alt="eleven av logo" />
            </h2>
            <div class="about__inner-wrapper">
                <h3 class="about-subheading">
                    Dobrodošli na stranice naše video produkcije!
                </h3>
                <div class="about__text-wrapper">
                    <p>
                        ELEVEN AV specijaliziran  je za raznolike usluge profesionalnog
                        video stvaralaštva, uključujući prijenose uživo, roizvodnju
                        podcasta i TV emisija, korporativne i  promotivne spotove te
                        snimanje svih vaših događaja koje želite trajno i profesionalno
                        zabilježiti.
                    </p>
                    <p>
                        Iza nas su godine rada u medijima i produkcijskim kućama, tisuće
                        sati provedenih na terenu, na snimanjima, u montaži i
                        prijenosima uživo. Sa strašću i predanošću, stvaramo
                        visokokvalitetne sadržaje koji će vas oduševiti i istaknuti vašu
                        priču na najbolji mogući način.
                    </p>
                </div>
                <span class="about-last-heading">Otkrijte kako naša kreativnost može rpetvoriti vaše ideje u
                    stvarnost!</span>
            </div>
        </div>
    </section>
    <!-- LINKEDIN FEED -->
    <section class="linkedin-feed">
        <div class="container">
            <!-- <?php
                  if(is_active_sidebar('linkedin-feed')){
                    dynamic_sidebar('linkedin-feed');
                    }
            ?> -->
        </div>
    </section>
    <!-- PORTFOLIO SECTION -->
    <section class="portfolio">
        <div class="portfolio__wrapper container">
            <h2 class="h2-heading dark-text">primjeri</h2>
            <div class="portfolio__inner-wrapper">
                <div class="portfolio-row">
                    <div class="portfolio__offer">
                        <img src="/wp-content/themes/myTheme/src/assets/icons/produkcija-icon.svg" alt="produckija icon"
                            class="portfolio-icon" />
                        <div class="portfolio__offer-body">
                            <h3 class="h3-heading portfolio-offer-heading">
                                produkcija & postprodukcija
                            </h3>
                            <p class="dark-text">
                                Snimanje i montaža svih formata: korporativni video, video
                                za društvene mreže, ENG i news, TV emisije, podcasti.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio__offer">
                        <img src="/wp-content/themes/myTheme/src/assets/icons/prijenos-icon.svg" alt="prijenos icon"
                            class="portfolio-icon" />
                        <div class="portfolio__offer-body">
                            <h3 class="h3-heading portfolio-offer-heading">
                                prijenosi uživo
                            </h3>
                            <p class="dark-text">
                                Od podcasta do TV emisija, pomoć pri realizaciji ili
                                kompletna realizacija projekata.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                                             $args = array(
                                                'post_type'=> 'post',
                                               );
                                               $the_query = new WP_Query($args);
                                            if($the_query->have_posts()){
                                            while( $the_query->have_posts()){
                                                $the_query->the_post();
                                            get_template_part('template-parts/content', 'video-thumbnail');
                                            }
                                        }else{
                                            echo "<h3>Trenutno nema videa</h3>";
                                        }

                       ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="see-more-btn-wrapper">
                    <a role="button" class="see-more-btn" href="<?php echo site_url('blog') ?>">Vidi detaljnije</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of portfolio section -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>


<?php get_footer() ?>