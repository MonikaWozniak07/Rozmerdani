<?php
// pagination class
add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');
function posts_link_attributes_1() {return 'class="link-next"';}
function posts_link_attributes_2() {return 'class="link-prev"';}