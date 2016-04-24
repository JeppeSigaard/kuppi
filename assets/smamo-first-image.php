<?php 

if (!function_exists('smamo_inner_img')){
    function smamo_inner_img($post_id = false) {
        global $post, $posts;
        if ($post_id){$post = get_post($post_id);}
        $first_img = '';
        
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        if (isset($matches[1]) && isset($matches[1][0])){
            $first_img = $matches[1][0];    
        }

        if(empty($first_img)) {$first_img = false;}
        
        return $first_img;
    }
}   