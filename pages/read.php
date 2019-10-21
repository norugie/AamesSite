<?php 
    if($page_name == 'news' && isset($url[1]) && !empty($url[1]) && $url[1] == 'read' && isset($url[2]) && !empty($url[2])){
        $post_info = $site->postInformation($database, $url[2]);
        if($post_info['status'] == 'Inactive' || empty($post_info)){
        ?>
            <script>window.location.replace("/404");</script>
        <?php
        } else {
            require 'news_read.php';
        }
    }
?>
