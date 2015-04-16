<?php
/*
    Plugin Name: Relative Content Links
    Plugin URI: https://github.com/enscope/wp-relative-content-links
    Description: Allows to include relative ROOT in links in content displayed by the_content().
    Version: 1.0
    Author: Miroslav Hudak (enscope, s.r.o.)
    Author URI: http://www.enscope.com
*/

add_filter('the_content', function($content) {
    // trim trailing slash and consider multi-site setup
    $rootUrl = rtrim(is_multisite() ? network_site_url() : home_url(), '/');
    return preg_replace('/https?:\/\/%ROOT%/i', $rootUrl, $content);
}, 10, 1);
