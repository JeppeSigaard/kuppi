<div class="artist-meta">
    <?php $by = get_post_meta(get_the_ID(),'by',true); if($by !== '') :?>
        <span class="by" itemscope="homeLocation"><?php echo $by ?></span>
    <?php endif; ?>

    <?php $web = get_post_meta(get_the_ID(),'web',true); if($web !== '') :?>
        <a href="<?php echo esc_url($web); ?>" class="web" itemscope="website"><?php echo $web ?></a>
    <?php endif; ?>

    <?php $facebook = get_post_meta(get_the_ID(),'facebook',true); if($facebook !== '') :?>
        <a href="<?php echo esc_url($facebook); ?>" class="facebook" itemscope="facebook"><?php echo $facebook ?></a>
    <?php endif; ?>

    <?php $twitter = get_post_meta(get_the_ID(),'twitter',true); if($twitter !== '') :?>
        <a href="<?php echo esc_url($twitter); ?>" class="twitter" itemscope="twitter"><?php echo $twitter ?></a>
    <?php endif; ?>

    <?php $instagram = get_post_meta(get_the_ID(),'instagram',true); if($instagram !== '') :?>
        <a href="<?php echo esc_url($instagram); ?>" class="instagram" itemscope="instagram"><?php echo $instagram ?></a>
    <?php endif; ?>

    <?php $pinterest = get_post_meta(get_the_ID(),'pinterest',true); if($pinterest !== '') :?>
        <a href="<?php echo esc_url($pinterest); ?>" class="pinterest" itemscope="pinterest"><?php echo $pinterest ?></a>
    <?php endif; ?>

</div>
