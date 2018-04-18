<?php

function rng_TAXMETA_INPUT_NAME_add() {

	?>
	<p>sample input</p>
	<input type="text" name="input_name" vlaue="">
	<?php
}

function rng_TAXMETA_INPUT_NAME_created( $term_id ) {
	$input_name	 = $_POST[ 'input_name' ];
	if ( isset( $input_name ) && !empty( $input_name ) ) {
		add_term_meta( $term_id, 'TAXMETA_NAME', $input_name );
	}
}

function rng_TAXMETA_INPUT_NAME_edit( $term ) {
	$input_name	 = get_term_meta( $term->term_id, 'TAXMETA_INPUT_NAME', TRUE );
	?>
	<table class="form-table">
		<tbody>
			<tr class="form-field form-required term-name-wrap">
				<th scope="row"><label for="name">sample input</label></th>
				<td>	
					<input type="text"  name="TAXMETA_INPUT_NAME" value="<?php echo $input_name; ?>" />	
				</td>
			</tr>
		</tbody>
	</table>
	<?php
}

function rng_TAXMETA_INPUT_NAME_update( $term_id ) {
	$input_name	 = $_POST[ 'TAXMETA_INPUT_NAME' ];
	if ( !empty( $input_name ) ) {
		update_term_meta( $term_id, 'TAXMETA_NAME', $input_name );
	} else {
		add_term_meta( $term_id, 'TAXMETA_NAME', $input_name );
	}//endif
}

add_action( 'TAXONOMY_add_form_fields', 'rng_TAXMETA_INPUT_NAME_add', 50 );
add_action( 'created_TAXONOMY', 'rng_TAXMETA_INPUT_NAME_created' );
add_action( 'TAXONOMY_edit_form_fields', 'rng_TAXMETA_INPUT_NAME_edit', 50 );
add_action( 'edited_TAXONOMY', 'rng_TAXMETA_INPUT_NAME_update' );
