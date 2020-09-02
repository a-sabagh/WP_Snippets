<?php
$role_name = 'administrator';
$capability_name = 'rng-talk-panel';

// get the the role object
$role_object = get_role( $role_name );

// add $cap capability to this role object
$role_object->add_cap( $capability_name );

// remove $cap capability from this role object
$role_object->remove_cap( $capability_name );
