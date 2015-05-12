<?php get_header();?>
<section class="blogroll content-right">
    <main>
        <?php woocommerce_content();?>
    </main>
    <aside>
        <?php get_template_part('modules/product','categories'); ?>
    </aside>
</section>

<?php get_footer();?>
