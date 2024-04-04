<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="ELEVEN AV specijaliziran  je za raznolike usluge profesionalnog video stvaralaštva, uključujući prijenose uživo, roizvodnju podcasta i TV emisija, korporativne i  promotivne spotove te snimanje svih vaših događaja koje želite trajno i profesionalno zabilježiti.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="montaža, snimanje, eleven, audio, video, produkcija, postprodukcija">
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>
    <?php 
    if(is_page()){ ?>
    <header class="header">
        <a href="<?php echo site_url() ?>" class="header-white" data-active="true">
            <img class="header__logo" src="/wp-content/themes/myTheme/src/assets/images/logo-white.png"
                alt="eleven logo" />
        </a>
    </header>
    <?php } ?>
    <?php 
    if(is_home()){ ?>
    <header class="header header-radovi">
        <a href="<?php echo site_url() ?>" class="header-white" data-active="false">
            <img class="header__logo" src="/wp-content/themes/myTheme/src/assets/icons/logo.svg" alt="eleven logo" />
        </a>
        <div class="header-back-block" data-active="true">
            <a class="max-width" href="<?php echo site_url() ?>">
                <img class="header__logo" src="/wp-content/themes/myTheme/src/assets/icons/eleven-dark-logo.svg"
                    alt="eleven logo" />
            </a>
            <a class="back-to-home-btn" href="<?php echo site_url() ?>"><img
                    src="/wp-content/themes/myTheme/src/assets/icons/traingle-icon.svg" aria-hidden="true" />Početna</a>
        </div>
    </header>
    <?php } ?>