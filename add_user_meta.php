<?php
add_action('show_user_profile', 'rng_user_profile_metahtml');
add_action('edit_user_profile', 'rng_user_profile_metahtml');

function rng_user_profile_metahtml($user) {
    $input = get_user_meta($user->ID,'INPUT',true);
    ?>
    <h2></h2>
    <table class="form-table">
        <tbody>
            <tr>
                <th>
                    <label></label>
                </th>
                <td>
                    <input type="text" name="INPUT" value="">
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}

add_action('personal_options_update', 'rng_user_profile_metasave');
add_action('edit_user_profile_update', 'rng_user_profile_metasave');

function rng_user_profile_metasave($user_id) {
    update_user_meta($user_id, 'INPUT', $_POST['INPUT']);
}

