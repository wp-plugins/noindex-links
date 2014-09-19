<?php
/*
Plugin Name: Noindex Links
Plugin URI: Author URI: http://wordpress.org/plugins/noindex-links/
Description: Плагин заключает любые ссылки в комментариях в теги &lt;noindex&gt;&lt;/noindex&gt;, что запрещает их индексацию Яндексом.
Version: 2.00
Author: Flector
Author URI: http://wordpress.org/plugins/noindex-links/
*/ 

function wp_noindex($comment) {
	return str_replace(array('<a ','</a>'), array('<!--noindex--><a ','</a><!--/noindex-->'), $comment);
}
add_filter('comment_text', 'wp_noindex');

function noindex_comment_author_link($link) {
    $new_link = '<!--noindex-->' . $link . '<!--/noindex-->';
    return $new_link;
}
add_filter('get_comment_author_link', 'noindex_comment_author_link');

?>