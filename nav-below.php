<?php $args = [
    'prev_text' => sprintf(esc_html__('%s Older', 'vanhoover'), '<span class="fas fa-lg fa-chevron-left" aria-hidden="true"></span>'),
    'next_text' => sprintf(esc_html__('Newer %s', 'vanhoover'), '<span class="fas fa-lg fa-chevron-right" aria-hidden="true"></span>')
];
the_posts_navigation( $args );