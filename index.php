<?php
$inDir = get_template_directory_uri();
get_header();
get_template_part('components/index/hero');
get_template_part('components/index/about');
get_template_part('components/index/values');
get_template_part('components/index/services');
get_template_part('components/index/faq');
get_footer();
?>
