<?php
$inDir = get_template_directory_uri();
get_header();
get_template_part('components/news/selection');
get_template_part('components/news/container');
get_footer();
?>