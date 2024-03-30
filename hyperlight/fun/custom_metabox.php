<?php 


///////////////////////////////////////////////////////


// Add custom metabox
function custom_metabox() {
    add_meta_box(
        'custom_metabox_id',            // Metabox ID
        'Custom Metabox Title',         // Metabox title
        'custom_metabox_callback',      // Callback function to render the content of the metabox
        'post',                         // Post type (you can specify multiple post types separated by commas)
        'normal',                       // Metabox position ('normal', 'side', or 'advanced')
        'default'                       // Priority ('high', 'core', 'default', or 'low')
    );
}
add_action('add_meta_boxes', 'custom_metabox');

// Callback function to render the content of the metabox
function custom_metabox_callback($post) {
    global $wbdb;
    // Get any existing meta data associated with this post
    $meta_value = get_post_meta($post->ID, 'custom_meta_key', true);

    // Output the HTML for the metabox
    ?>
    <label for="custom_meta_field">Custom Field:</label>
    <input type="text" id="custom_meta_field" name="custom_meta_field" value="<?php echo $meta_value; ?>" style="width: 100%;" />
    <?php
}

// Save the metabox data
function save_custom_metabox_data($post) {
    // Check if our nonce is set.
    if (!isset($_POST['custom_metabox_nonce'])) {
        return;
    }

    // // Verify that the nonce is valid.
    // if (!wp_verify_nonce($_POST['custom_metabox_nonce'], 'custom_metabox_nonce')) {
    //     return;
    // }

    // // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    // if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    //     return;
    // }

    // // Check the user's permissions.
    if (!current_user_can('edit_post', $post)) {
        return;
    }

    // Update the meta field in the database.
    if (isset($_POST['custom_meta_field'])) {
        update_post_meta($post, 'custom_meta_key', $_POST['custom_meta_field']);
    }
}
add_action('save_post', 'save_custom_metabox_data');



    ///////////////////////////////////Adding custom menu///////////////////////////////
