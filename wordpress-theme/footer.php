<?php
/**
 * The template for displaying the footer
 * 
 * @package NatsLearning
 * @version 1.0
 */
?>

    <footer id="colophon" class="footer site-footer">
        <div class="container">
            <div class="footer-content">
                
                <!-- Company Info -->
                <div class="footer-section">
                    <h3 class="chinese-text">智叻教育中心</h3>
                    <p class="footer-tagline" style="color: hsl(var(--primary));">Nat's Learning Education</p>
                    <p style="margin: 1rem 0;">香港頂尖升小面試專家，致力為每位學童提供最優質的升學準備服務。</p>
                    
                    <!-- Social Media -->
                    <div class="social-links" style="margin-top: 1.5rem;">
                        <h4 style="margin-bottom: 1rem;">關注我們</h4>
                        <div style="display: flex; gap: 1rem;">
                            <?php if (nats_get_option('social_facebook', '#') !== '#') : ?>
                                <a href="<?php echo esc_url(nats_get_option('social_facebook')); ?>" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--background)); text-decoration: none; padding: 0.5rem; background: #1877f2; border-radius: var(--radius);" aria-label="Facebook">
                                    <span>📘</span>
                                    <span>Facebook</span>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (nats_get_option('social_instagram', '#') !== '#') : ?>
                                <a href="<?php echo esc_url(nats_get_option('social_instagram')); ?>" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 0.5rem; color: hsl(var(--background)); text-decoration: none; padding: 0.5rem; background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); border-radius: var(--radius);" aria-label="Instagram">
                                    <span>📷</span>
                                    <span>Instagram</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3 class="chinese-text">快速連結</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-menu',
                        'fallback_cb'    => 'nats_learning_footer_default_menu',
                    ));
                    ?>
                </div>

                <!-- Contact Info -->
                <div class="footer-section">
                    <h3 class="chinese-text">聯絡資訊</h3>
                    
                    <div class="contact-item" style="margin-bottom: 1rem;">
                        <h4 style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <span>📞</span>
                            <span>電話</span>
                        </h4>
                        <a href="tel:<?php echo esc_attr(nats_get_option('contact_phone', '+852 2345 6789')); ?>" style="color: hsl(var(--background)); text-decoration: none;">
                            <?php echo esc_html(nats_get_option('contact_phone', '+852 2345 6789')); ?>
                        </a>
                    </div>

                    <div class="contact-item" style="margin-bottom: 1rem;">
                        <h4 style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <span>💬</span>
                            <span>WhatsApp</span>
                        </h4>
                        <a href="https://wa.me/<?php echo esc_attr(str_replace(array('+', ' '), '', nats_get_option('contact_whatsapp', '+852 9876 5432'))); ?>" target="_blank" style="color: hsl(var(--background)); text-decoration: none;">
                            <?php echo esc_html(nats_get_option('contact_whatsapp', '+852 9876 5432')); ?>
                        </a>
                    </div>

                    <div class="contact-item" style="margin-bottom: 1rem;">
                        <h4 style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <span>📧</span>
                            <span>電郵</span>
                        </h4>
                        <a href="mailto:<?php echo esc_attr(nats_get_option('contact_email', 'info@natslearning.hk')); ?>" style="color: hsl(var(--background)); text-decoration: none;">
                            <?php echo esc_html(nats_get_option('contact_email', 'info@natslearning.hk')); ?>
                        </a>
                    </div>

                    <div class="hours">
                        <h4 style="margin-bottom: 0.5rem;">營業時間</h4>
                        <p style="font-size: 0.9rem;">
                            星期一至五：9:00-21:00<br>
                            星期六日：9:00-18:00
                        </p>
                    </div>
                </div>

                <!-- Locations -->
                <div class="footer-section">
                    <h3 class="chinese-text">教學中心</h3>
                    
                    <div class="location" style="margin-bottom: 1.5rem;">
                        <h4 style="color: hsl(var(--primary)); margin-bottom: 0.5rem;">葵涌校</h4>
                        <p style="font-size: 0.9rem; line-height: 1.4;">
                            <?php echo esc_html(nats_get_option('location1_address', '大連排道35-41號金基工業大廈')); ?>
                        </p>
                        <p style="font-size: 0.8rem; color: rgba(255, 255, 255, 0.8);">
                            近葵涌廣場、新都會廣場
                        </p>
                    </div>

                    <div class="location">
                        <h4 style="color: hsl(var(--primary)); margin-bottom: 0.5rem;">灣仔校</h4>
                        <p style="font-size: 0.9rem; line-height: 1.4;">
                            <?php echo esc_html(nats_get_option('location2_address', '駱克道53-55號恒澤商業大廈')); ?>
                        </p>
                        <p style="font-size: 0.8rem; color: rgba(255, 255, 255, 0.8);">
                            近灣仔港鐵站、時代廣場
                        </p>
                    </div>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <p style="margin: 0;">
                        © <?php echo date('Y'); ?> 智叻教育中心 Nat's Learning Education. <?php esc_html_e('All rights reserved.', 'nats-learning'); ?>
                    </p>
                    
                    <div class="footer-links" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none; font-size: 0.9rem;" class="chinese-text">私隱政策</a>
                        <a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none; font-size: 0.9rem;" class="chinese-text">使用條款</a>
                        <a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none; font-size: 0.9rem;" class="chinese-text">網站地圖</a>
                    </div>
                </div>

                <!-- Additional Footer Info -->
                <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255, 255, 255, 0.1); text-align: center;">
                    <p style="font-size: 0.8rem; color: rgba(255, 255, 255, 0.6); margin: 0;" class="chinese-text">
                        專業升小面試課程 | 360°全人發展系統 | 香港教育中心
                    </p>
                </div>
            </div>
        </div>

        <?php do_action('nats_learning_footer_content'); ?>
    </footer>

</div><!-- #page -->

<!-- Back to Top Button -->
<button id="back-to-top" style="position: fixed; bottom: 2rem; right: 2rem; width: 50px; height: 50px; border-radius: 50%; background: hsl(var(--primary)); color: hsl(var(--primary-foreground)); border: none; cursor: pointer; box-shadow: var(--shadow-medium); display: none; z-index: 100; transition: var(--transition-smooth);" aria-label="<?php esc_attr_e('Back to top', 'nats-learning'); ?>">
    ↑
</button>

<?php wp_footer(); ?>

<!-- Theme JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');
    const menuIcon = document.querySelector('.menu-icon');
    const closeIcon = document.querySelector('.close-icon');

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', function() {
            const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
            
            mobileToggle.setAttribute('aria-expanded', !isExpanded);
            mobileNav.classList.toggle('active');
            
            if (menuIcon && closeIcon) {
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            }
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileNav.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                
                if (menuIcon && closeIcon) {
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });
    }

    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Back to top button
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Header scroll effect
    const header = document.querySelector('.header');
    if (header) {
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.style.boxShadow = 'var(--shadow-soft)';
                header.style.backdropFilter = 'blur(10px)';
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            } else {
                header.style.boxShadow = 'none';
                header.style.backdropFilter = 'none';
                header.style.background = 'hsl(var(--background))';
            }
            
            lastScrollTop = scrollTop;
        });
    }

    // Form handling (if contact form exists)
    const contactForms = document.querySelectorAll('form[data-contact-form]');
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = 'hsl(var(--destructive))';
                } else {
                    field.style.borderColor = 'hsl(var(--border))';
                }
            });
            
            if (isValid) {
                // Show success message (implement AJAX submission if needed)
                alert('感謝您的查詢！我們會盡快回覆。');
                form.reset();
            } else {
                alert('請填寫所有必填欄位。');
            }
        });
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Animation on scroll (optional)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Apply fade-in animation to cards and sections
    const animatedElements = document.querySelectorAll('.card, .advantage-card, .phase-card, .testimonial-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Performance: Preload critical resources
const preloadLinks = [
    'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Noto+Sans+TC:wght@300;400;500;600;700&display=swap'
];

preloadLinks.forEach(href => {
    const link = document.createElement('link');
    link.rel = 'preload';
    link.as = 'style';
    link.href = href;
    document.head.appendChild(link);
});
</script>

</body>
</html>

<?php
/**
 * Fallback function for default footer menu
 */
function nats_learning_footer_default_menu() {
    echo '<ul style="list-style: none; padding: 0;">';
    echo '<li><a href="#hero" class="chinese-text">首頁</a></li>';
    echo '<li><a href="#advantages" class="chinese-text">我們的優勢</a></li>';
    echo '<li><a href="#course" class="chinese-text">課程詳情</a></li>';
    echo '<li><a href="#success" class="chinese-text">成功實證</a></li>';
    echo '<li><a href="#contact" class="chinese-text">聯絡我們</a></li>';
    echo '</ul>';
}
?>