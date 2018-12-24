<?php 
$link_fanpage=get_field('op_link_fanpage','option');
?>
<div class="fb-page" data-href="<?php echo @$link_fanpage; ?>" data-tabs="timeline" data-width="350" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo @$link_fanpage; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo @$link_fanpage; ?>"><?php echo get_bloginfo('name'); ?></a></blockquote></div>