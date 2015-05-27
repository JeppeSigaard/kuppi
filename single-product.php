<?php get_header();?>
<?php $image_url_small = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'preview-wider' );?>
<?php $image_url_narrow = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'preview-narrow' );?>
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sixteen-nine' );?>
<div class="single-bg" style="background-image:url(<?php echo $image_url[0] ?>);"></div>
<?php while(have_posts()) : the_post(); ?>
<?php wc_print_notices(); ?>
<section class="product-heading">
    <div class="inner content content-right">
        <main class="main-heading">
            <div class="main-heading-bins">
                <div class="bin bin-small">
                    <div class="designs">
                        <div class="design design-<?php the_ID() ?>" style="background-image: url(<?php echo $image_url_narrow[0] ?>);"></div>
                    </div>
                </div>
                <div class="bin bin-large">
                    <div class="designs">
                        <div class="design design-<?php the_ID() ?>" style="background-image: url(<?php echo $image_url_small[0] ?>);"></div>
                    </div>
                </div>
            </div>
            <nav class="main-heading-nav">
                <?php previous_post_link('%link', '', TRUE, ' ', 'product_cat'); ?>
                <?php if(get_previous_post_link() == '') : ?>
                <a href="#" class="disabled" rel="prev"></a>
                <?php endif; ?>
                <?php next_post_link('%link', '', TRUE, ' ', 'product_cat');?>
                <?php if(get_next_post_link() == '') : ?>
                <a href="#" class="disabled" rel="next"></a>
                <?php endif; ?>
            </nav>
            <h1 class="main-heading-title"><?php the_title(); ?></h1>
            <div class="main-heading-buttons quick-buy">
            <?php echo smamo_do_quick_buy($product); ?>
            </div>
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
                            <h3>Bestil speciel</h3>
                        </a>
                    </div>
                <div class="form-tabs">
                    <div class="tab tab-1 active quick-buy">
                        <?php echo smamo_do_quick_buy($product); ?>
                    </div>
                    <div class="tab tab-2">
                        <p>Har du dit eget design, eller en helt speciel affaldscontainer? Hos os kan du få det lige som du vil have det. Herunder kan du oprette og en anmodning om en helt speciel ordre. Anmodningen sendes med det samme, og vi besvarer den hurtigst muligt. Hvis du samtidig opretter en bruger, er det nemt at gennemføre ordren, når alt er på plads.</p>
                       
                        <div class="form-container">
                            <?php if(!is_user_logged_in()) : ?>
                            <div>
                                <label for="name">Dit navn</label>
                                <input type="text" name="name" placeholder="Peter Jensen" required>
                            </div>
                            <div>
                                <label for="email">Din email</label>
                                <input type="email" name="email" placeholder="hej@peterjensen.dk" required>
                            </div>
                            <div>
                                <label for="email">Opret et login samtidig: skriv et kodeord</label>
                                <input type="password" name="password" placeholder="··········" autocomplete="off">
                            </div>
                            <?php else : $current_user = wp_get_current_user(); ?>
                            <div>
                                <strong>Logget ind som <?php echo $current_user->display_name ?> | <a href="<?php echo wp_logout_url(get_the_permalink()); ?>">Log ud</a></strong>
                            </div>
                            <?php endif; ?>
                            <div>
                                <label for="description">Beskriv dine særlige behov</label>
                                <textarea name="description" placeholder="Jeg skal bruge..."></textarea>
                            </div>
                            <div>
                                <a href="#" class="form-submit">Send anmodning nu</a>
                            </div>
                        </div>
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


