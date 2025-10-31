<?php
if ( ! defined('ABSPATH') ) {
    exit;
}

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        ['astra-theme-css'],
        wp_get_theme()->get('Version')
    );
}, 20);

add_action('wp', function() { 
    remove_all_actions('astra_footer');
    add_action('astra_footer', 'astra_child_footer_markup');
});

function astra_child_footer_markup() { ?>
    <footer class="site-footer ast-container">
        <div class="footer-grid">
            <p class="copy">
                © 2025 <a href="https://tonsite.com" target="_blank" rel="noopener">Kouatan Pemen Christian</a>
            </p>
        </div>
    </footer>
<?php }
