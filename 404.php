<?php get_header(); ?>
<main>
    <a class="fourohfour" href="<?php echo esc_url(get_bloginfo('url')); ?>">
        <h1>404</h1>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/statics/404.png"/>
        <span>Siden du søger findes desværre ikke.</span>
        <span class="contrast">Klik på spanden for at vende tilbage til forsiden.</span>
    </a>
</main>
<?php get_footer(); ?>
