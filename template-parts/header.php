<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


$site_name = get_bloginfo('name');
$header_nav_menu =  wp_nav_menu([
    'theme_location' => 'primary',
    'fallback_cb' => false,
    'echo' => false,
]);
?>

<header class="header">
    <div class="container">
        <div class="header__content">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } elseif ($site_name) {
            ?>
                <h1 class="header__content__site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e('Home', 'hello-elementor'); ?>" rel="home">
                        <?php echo esc_html($site_name); ?>
                    </a>
                </h1>
                <p>
                    <?php
                    if ($tagline) {
                        echo esc_html($tagline);
                    }
                    ?>
                </p>
            <?php }
            ?>
            <div class="header__menu--descktop">
                <?php if ($header_nav_menu) : ?>
                    <nav>
                        <?php echo $header_nav_menu; ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>


</header>