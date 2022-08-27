<?php
/**
 * @var $field
 * @var $field_name
 * @var $section_name
 *
 */

$field_key = "data['{$section_name}']['fields']['{$field_name}']";

include STMT_TO_DIR . '/post_type/metaboxes/components_js/socials.php';
?>

<label v-html="<?php echo esc_attr($field_key); ?>['label']"></label>

<stmt-socials v-bind:stored_faq="<?php echo esc_attr($field_key); ?>['value']"
         v-on:get-faq="<?php echo esc_attr($field_key); ?>['value'] = $event"></stmt-socials>

<input type="hidden"
       name="<?php echo esc_attr($field_name); ?>"
       v-model="<?php echo esc_attr($field_key); ?>['value']" />