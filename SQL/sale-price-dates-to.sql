SELECT posts.ID , posts.post_title 
FROM wp_posts AS posts 
INNER JOIN wp_postmeta AS postmeta 
ON postmeta.post_id = posts.ID 
WHERE postmeta.meta_key = '_sale_price_dates_to' AND postmeta.meta_value > UNIX_TIMESTAMP()
