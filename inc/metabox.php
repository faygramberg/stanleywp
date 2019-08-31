<?php

/** Business Category  **/
add_action( 'cmb2_admin_init', 'stanleywp_metaboxes' );

function stanleywp_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_stanleywp_';


    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'post_metabox',
        'title'         => __( 'Post Settings', 'stanleywp' ),
        'object_types'  => array( 'post', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Full Width Featured Image', 'stanleywp' ),
        'id'         => $prefix . 'full_featured',
        'type'       => 'checkbox',
    ) );

}


