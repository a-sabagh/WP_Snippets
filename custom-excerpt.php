<?php
function custom_excerpt(  $count ){
	$output = get_the_content();
	$output = strip_tags($output);
	$output = mb_substr($output , 0 , $count);
	$output = mb_substr($output , 0 , mb_strrpos($output, " "));
	$output .= "...";
	return $output;
}
function archive_excerpt(){
	return custom_excerpt(300);
}
function title_excerpt(){
	return custom_excerpt( 40 );
}
function alt_excerpt(){
	return custom_excerpt( 100 );
}
function related_excerpt(){
	return custom_excerpt( 120 );
}
function course_excerpt(){
	return custom_excerpt( 150);
}
function share_excerpt(){
    return custom_excerpt(140);
}