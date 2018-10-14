<?php
$paginate_num = get_query_var("paged");
$posts_per_page = 30;
$offset = ($paginate_num) ? (($paginate_num - 1) * $posts_per_page) : "0";
$args = array(
    'post_type' => 'portfolio',
    'offset' => $offset,
    'posts_per_page' => $posts_per_page,
    'order' => 'ASC',
    //'orderby'      => $orderby,
//            'orderby' => 'menu_order',
    'post_status' => 'publish'
);

$portfolio_query = new WP_Query($args);

if ($portfolio_query->have_posts()) {
    ?>

    <div id="portfolio-grid-container" <?php echo $data_attr; ?>>

        <?php
        foreach ($portfolio_query->posts as $post) {
            setup_postdata($post);

        }
        ?>
    </div><!--End #grid-container--> 
    <div class="clearfix clear"></div>
    <?php
    $pagination_link = paginate_links(array(
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $portfolio_query->max_num_pages
    ));

    if ($pagination_link) {
        echo '<nav class="stm-project-pagination">';
        echo $pagination_link;
        echo '</nav>';
    }
    ?>
    <?php
} else {
    ?>

    <div><h1 class="err-msg"><?php esc_html_e('No portfolio added, Please add from admin.', 'engage'); ?></h1></div>
    <?php
}

wp_reset_query();
