<?php
class rng_blog_thumb extends WP_Widget{
	public function __construct() {
		$widget_options = array(
			'classname' => 'WIDGET_CLASS',
			'description' => 'WIDGET_DESCRIPTION'
		);
		parent::__construct("WIDGET_NAME" , "WIDGET_TITLE" , $widget_options);
    }
    /**
     * output widget
     */
	public function widget(  $args , $instance ){
        //$instance = get value from admin panel
        //$args = get structure of widget
        //apply_filters widget_title
        $title = !empty($instance['title']) ? $instance['title'] : "";
        
        $title = apply_filters("widget_title" , $title);
        
		$output = $args["before_widget"];
		$output .= $args["before_title"];
		$output .= $title;
		$output .= $args["after_title"];
		$output = 'OUTPUT_CONTENT';
		$output .= $args["after_widget"];
		echo $output;
    }
    /**
     * form admin panel widgt
     */
	public function form( $instance ) {
        //$instance = get value from admin panel fields
        //$this->get_field_id('FIELDNAME') = avoid id conflict
        //$this->get_field_name('FIELDNAME') = avoid name conflict
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
	?>
	<input type="text" id="<?php echo $this->get_field_id('title'); ?>" class="widg-title" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
	<?php
    }
    /**
     * save admin panel fields in $instance
     */
	public function update(  $new_instance , $old_instance){
        //$old_instance = old instance
        //$new_instance = new instance
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		return $instance;
	}
}
/**
 * register widget main function
 */
function register_WIDGET_NAME(){
	register_widget("WIDGET_NAME");
}
add_action("widgets_init" ,"register_WIDGET_NAME");

/*
*Constants*
1.WIDGET_CLASS
2.WIDGET_DESCRIPTION
3.WIDGET_NAME
4.WIDGET_TITLE
5.OUTPUT_CONTENT
*/