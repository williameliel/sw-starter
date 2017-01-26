<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_57585ea75c914',
        'title' => 'Room',
        'fields' => array (
            array (
                'key' => 'field_57718a7ce8df0',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_57718a85e8df1',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array (
                'key' => 'field_57718aaae8df2',
                'label' => 'Emphasized Links',
                'name' => 'emphasized_links',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'row',
                'button_label' => 'Add Row',
                'sub_fields' => array (
                    array (
                        'key' => 'field_57718ad1e8df4',
                        'label' => 'Link Text',
                        'name' => 'link_text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57718abae8df3',
                        'label' => 'Link URL',
                        'name' => 'link_url',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                ),
            ),
            array (
                'key' => 'field_57585edf1583b',
                'label' => 'Gallery',
                'name' => 'gallery',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'min' => '',
                'max' => '',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_5772bd2b019d7',
                'label' => 'Secondary Image',
                'name' => 'secondary_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'rooms',
                ),
            ),
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event-spaces',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array (
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'custom_fields',
            3 => 'discussion',
            4 => 'comments',
            5 => 'format',
            6 => 'page_attributes',
            7 => 'categories',
            8 => 'tags',
            9 => 'send-trackbacks',
        ),
        'active' => 1,
        'description' => '',
        'modified' => 1467138340,
        'local' => 'json',
    ));

endif;
