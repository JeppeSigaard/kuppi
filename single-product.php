<?php get_header();?>
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="single-bg" style="background-image:url(<?php echo $image_url[0] ?>);"></div>
<?php while(have_posts()) : the_post(); ?>
<?php wc_print_notices(); ?>
<section class="product-heading">
    <div class="inner content content-right">
        <main class="main-heading">
            <div class="main-heading-bins">
                <div class="bin bin-small">
                    <div class="designs">
                        <div class="design design-<?php the_ID() ?>" style="background-image: url(<?php echo $image_url[0] ?>);"></div>
                    </div>
                </div>
                <div class="bin bin-large">
                    <div class="designs">
                        <div class="design design-<?php the_ID() ?>" style="background-image: url(<?php echo $image_url[0] ?>);"></div>
                    </div>
                </div>
            </div>
            <h1 class="main-heading-title"><?php the_title(); ?></h1>
            <div class="main-heading-buttons quick-buy">
            <?php echo smamo_do_quick_buy($product); ?>
            </div>
            <nav class="main-heading-nav">
                <?php previous_post_link('%link', '', FALSE, ' ', 'product_cat'); ?>
                <?php if(get_previous_post_link() == '') : ?>
                <a href="#" class="disabled" rel="prev"></a>
                <?php endif; ?>
                <?php next_post_link('%link', '', FALSE, ' ', 'product_cat');?>
                <?php if(get_next_post_link() == '') : ?>
                <a href="#" class="disabled" rel="next"></a>
                <?php endif; ?>
            </nav>
        </main>
    </div>
</section>

<section class="product-body">
    <div class="inner content content-right">
        <main itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 itemprop="name" class="main-content-title"><?php the_title(); ?></h2>
            <p itemprop="description"><?php the_content();?></p>
            <meta itemprop="url" content="<?php the_permalink(); ?>" />
            <form class="order-form" method="post" action="<?php echo get_template_directory_uri();?>/ajax/form.php">
                <input type="hidden" name="productId" value="<?php the_ID(); ?>">
                    <div class="form-toggle">
                        <a class="toggle toggle-1 active" href="#">
                            <h3>Vælg størrelse</h3>
                        </a>
                        <a class="toggle toggle-2" href="#">
                            <h3>Mål selv</h3>
                        </a>
                    </div>
                <div class="form-tabs">
                    <div class="tab tab-1 active quick-buy">
                        <?php echo smamo_do_quick_buy($product); ?>
                    </div>
                    <div class="tab tab-2">
                        <div class="b-width">
                            <label for="w">Bredde</label>
                            <input type="number" name="w" placeholder="80cm - 240cm">
                        </div>
                        <div class="b-depth">
                            <label for="d-top">Dybde, spandens top</label>
                            <input type="number" name="d-top" placeholder="80cm - 240cm">
                        </div>
                        <div class="b-depth">
                            <label for="d-bottom">Dybde, spandens bund</label>
                            <input type="number" name="d-bottom" placeholder="80cm - 240cm">
                        </div>
                        <div class="b-height">
                            <label for="h">Højde</label>
                            <input type="number" name="h" placeholder="80cm - 240cm">
                        </div>
                        <a href="#" class="form-submit button">Læg i kurv</a>
                    </div>
                </div>
            </form>

            <?php get_template_part('modules/products','list');?>
        </main>
        <aside>
            <?php echo get_template_part('modules/product','categories'); ?>
        </aside>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer();?>


