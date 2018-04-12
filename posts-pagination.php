<?php 
    the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '<i class="flaticon-left-arrow"></i>', 'textdomain' ),
        'next_text' => __( '<i class="flaticon-right-arrow"></i>', 'textdomain' ),
        'screen_reader_text' => ' ',
    ));
?>
