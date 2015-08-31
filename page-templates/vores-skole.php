<?php 
/*
Template name: Vores Skole
*/
get_header();
?>

<section class="content" data-base="<?php echo get_bloginfo('url') ?>">
   
   <div class="quick-buy">
       <div class="inner read-width">
           <div class="left">
               <img src="<?php echo get_template_directory_uri() ?>/statics/vores-skole/vores-skole-4.png"/>
           </div>
           <div class="right">
                <h3>Vores skole</h3>
                <span>En anderledes skole for faglighed og fremtid</span>
                <div class="price-table">
                    <div><span>Pris</span> 149,-</div>
                    <div><span>Levering</span> 45,-</div>
                    <div><strong><span>Ialt</span> 194,-</strong></div>

                    <a class="buy-now-btn button" data-buy-item="518" href="<?php echo get_bloginfo('url') ?>/checkout/">Køb nu</a>
                </div>
           </div>
       </div>
   </div>
   
   
    <?php while (have_posts()) : the_post();?>
    <main>
        <article <?php post_class('read-width'); ?>>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    </main>
    <?php endwhile; ?>
    
    
    <div class="plx-img">
       <div class="inner" style="background-image:url(<?php echo get_template_directory_uri() ?>/statics/vores-skole/vores-skole-2.png);">
           
       </div>
   </div>
   
   <div class="quick-buy grey">
       <div class="inner read-width">
           <div class="left">
               <h4>Vores skole</h4>
                <span>En anderledes skole for faglighed og fremtid</span>
           </div>
           <div class="right">
                
                <div class="price-table">
                    <div><span>Pris</span> 149,-</div>
                    <div><span>Levering</span> 45,-</div>
                    <div><strong><span>Ialt</span> 194,-</strong></div>
                    <a class="buy-now-btn button" data-buy-item="518" href="<?php echo get_bloginfo('url') ?>/checkout/">Køb nu</a>
                </div>
           </div>
       </div>
   </div>
    
</section>

<?php get_footer(); ?>