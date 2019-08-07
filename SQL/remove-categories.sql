DELETE a,c FROM wp_terms AS a 
LEFT JOIN wp_term_taxonomy AS c ON a.term_id = c.term_id
LEFT JOIN wp_term_relationships AS b ON b.term_taxonomy_id = c.term_taxonomy_id
WHERE c.taxonomy = 'product_tag';

DELETE a,c FROM wp_terms AS a
LEFT JOIN wp_term_taxonomy AS c ON a.term_id = c.term_id
LEFT JOIN wp_term_relationships AS b ON b.term_taxonomy_id = c.term_taxonomy_id
WHERE c.taxonomy = 'product_cat'
