<?php
/**
 * The header for the theme
 * 
 * @package NatsLearning
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Preconnect to external domains for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Noto+Sans+TC:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    
    <!-- Additional CSS for font integration -->
    <style>
        body {
            font-family: 'Inter', 'Noto Sans TC', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Chinese text optimization */
        .chinese-text {
            font-family: 'Noto Sans TC', 'Inter', sans-serif;
        }
        
        /* Performance optimization */
        img {
            height: auto;
            max-width: 100%;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Focus accessibility */
        .btn:focus,
        .mobile-menu-toggle:focus {
            outline: 2px solid hsl(var(--ring));
            outline-offset: 2px;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link sr-only" href="#main"><?php esc_html_e('Skip to content', 'nats-learning'); ?></a>

    <header id="masthead" class="header site-header">
        <div class="container">
            <div class="header-content">
                
                <!-- Logo -->
                <div class="site-branding">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                            <span class="site-title chinese-text">智叻教育</span>
                            <span class="site-tagline" style="display: block; font-size: 0.8rem; font-weight: 400; color: hsl(var(--muted-foreground));">Nat's Learning</span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation -->
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'nats-learning'); ?>">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav',
                        'container'      => false,
                        'fallback_cb'    => 'nats_learning_default_menu',
                    ));
                    ?>
                </nav>

                <!-- Contact Info & CTA (Desktop) -->
                <div class="contact-info">
                    <div style="display: flex; align-items: center; gap: 0.5rem; margin-right: 1rem;">
                        <span style="font-size: 1.2rem;">📞</span>
                        <span class="contact-phone">
                            <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" style="color: hsl(var(--foreground)); text-decoration: none;">
                                <?php echo esc_html(nats_get_option('contact_phone', '+852 2345 6789')); ?>
                            </a>
                        </span>
                    </div>
                    <a href="#contact" class="btn btn-primary chinese-text">免費諮詢</a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" type="button" aria-controls="mobile-navigation" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'nats-learning'); ?>">
                    <span class="menu-icon">☰</span>
                    <span class="close-icon hidden">✕</span>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-navigation" class="mobile-nav" role="navigation" aria-label="<?php esc_attr_e('Mobile Menu', 'nats-learning'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'mobile-nav-list',
                    'container'      => false,
                    'fallback_cb'    => 'nats_learning_mobile_default_menu',
                ));
                ?>
                
                <!-- Mobile Contact & CTA -->
                <div class="mobile-contact" style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid hsl(var(--border));">
                    <div style="margin-bottom: 1rem;">
                        <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--foreground)); text-decoration: none; padding: 0.5rem 0;">
                            <span>📞</span>
                            <span><?php echo esc_html(nats_get_option('contact_phone', '+852 2345 6789')); ?></span>
                        </a>
                    </div>
                    <a href="#contact" class="btn btn-primary w-full chinese-text">免費諮詢</a>
                </div>
            </nav>
        </div>
    </header>

<?php
/**
 * Fallback function for default desktop menu
 */
function nats_learning_default_menu() {
    echo '<ul class="nav">';
    echo '<li><a href="#hero" class="chinese-text">首頁</a></li>';
    echo '<li><a href="#advantages" class="chinese-text">我們的優勢</a></li>';
    echo '<li><a href="#course" class="chinese-text">課程詳情</a></li>';
    echo '<li><a href="#success" class="chinese-text">成功實證</a></li>';
    echo '<li><a href="#contact" class="chinese-text">聯絡我們</a></li>';
    echo '</ul>';
}

/**
 * Fallback function for default mobile menu
 */
function nats_learning_mobile_default_menu() {
    echo '<ul class="mobile-nav-list" style="list-style: none; padding: 0;">';
    echo '<li style="margin-bottom: 0.5rem;"><a href="#hero" class="chinese-text" style="display: block; padding: 0.75rem 0; color: hsl(var(--foreground)); text-decoration: none; border-bottom: 1px solid hsl(var(--border));">首頁</a></li>';
    echo '<li style="margin-bottom: 0.5rem;"><a href="#advantages" class="chinese-text" style="display: block; padding: 0.75rem 0; color: hsl(var(--foreground)); text-decoration: none; border-bottom: 1px solid hsl(var(--border));">我們的優勢</a></li>';
    echo '<li style="margin-bottom: 0.5rem;"><a href="#course" class="chinese-text" style="display: block; padding: 0.75rem 0; color: hsl(var(--foreground)); text-decoration: none; border-bottom: 1px solid hsl(var(--border));">課程詳情</a></li>';
    echo '<li style="margin-bottom: 0.5rem;"><a href="#success" class="chinese-text" style="display: block; padding: 0.75rem 0; color: hsl(var(--foreground)); text-decoration: none; border-bottom: 1px solid hsl(var(--border));">成功實證</a></li>';
    echo '<li><a href="#contact" class="chinese-text" style="display: block; padding: 0.75rem 0; color: hsl(var(--foreground)); text-decoration: none;">聯絡我們</a></li>';
    echo '</ul>';
}
?>