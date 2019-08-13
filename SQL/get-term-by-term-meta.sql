SELECT term_taxonomy.term_id 
FROM wp_term_taxonomy AS term_taxonomy INNER JOIN wp_termmeta AS termmeta 
WHERE termmeta.meta_key = 'frotel_directory_id' 
AND termmeta.meta_value = 19 
AND term_taxonomy.term_id = termmeta.term_id 
AND term_taxonomy.taxonomy = 'product_cat'
