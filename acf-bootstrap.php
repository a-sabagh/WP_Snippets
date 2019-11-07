<?php
/*  *********** R E M O V E M E *************  */

define('THEME_ACF_DIR', trailingslashit(FAQ_PDP) . "vendor/acf/");
define('THEME_ACF_URL', trailingslashit(FAQ_PDU) . "vendor/acf/");
define('THEME_ACF_INT', trailingslashit(FAQ_PDP) . "vendor/acf/acf.php");
//wp_die(THEME_ACF_URL);
require_once wp_normalize_path(THEME_ACF_INT);

add_filter('acf/settings/url', function ($url) {
    return THEME_ACF_URL;
});

/* add_filter('acf/settings/show_admin', function ($show_admin) {
  return false;
  }); */

/*  *********** R E M O V E M E *************  */


$arguments = array(
    'key' => 'theme_section_name',
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'product',
            ),
        ),
    ),
    'title' => 'عنوان متاباکس',
    'menu_order' => 0,
    'fields' => array(
        array(
            'key' => 'faq-questions',
            'name' => 'faq_questions',
            'label' => 'لیست تکرار شونده',
            'type' => 'repeater',
            'layout' => 'block', // block
            'collapsed' => 'title',
            'sub_fields' => array(
                array(
                    'key' => 'question',
                    'label' => 'پرسش',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_5d3b4c2e5ddde',
                    'label' => 'ویرایشگر',
                    'name' => 'ویرایشگر',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'acfe_permissions' => '',
                    'default_value' => '',
                    'tabs' => 'text', // all
                    'media_upload' => 1,
                    'acfe_validate' => '',
                    'acfe_update' => '',
                    'toolbar' => 'basic', // basic
                    'delay' => 0,
                ),
            ),
            'button_label' => 'افزودن',
            'min' => '',
            'max' => '',
        ),
    ),
);
acf_add_local_field_group($arguments);
