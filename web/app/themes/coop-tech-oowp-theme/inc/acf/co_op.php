<?php

use Outlandish\MappingCoTech\Fields\Fields;

if (function_exists("register_field_group")) {

    register_field_group(array(
        'id' => 'acf_co-op-financials',
        'title' => 'Co-op financials',
        'fields' => array(
            array(
                'key' => 'field_59f0ebd3d3373',
                'label' => 'Current annual turnover',
                'name' => 'current_turnover',
                'type' => 'number',
                'instructions' => 'The income you expect in the next 12 months. This intended to show your current capacity and income. Use your most recent figures or your last month\'s turnover * 12 or your T12 or a projection or a guess.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '£',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => 0,
            ),
            array(
                'key' => 'field_59f10c9e092ba',
                'label' => 'Number of current members',
                'name' => 'current_total_members',
                'type' => 'number',
                'instructions' => 'The number of full members (owners) in the co-op.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_59f0f626092b9',
                'label' => 'Total number of workers',
                'name' => 'current_total_workers',
                'type' => 'number',
                'instructions' => 'The total number of people who work regularly as part of the co-op, regardless of their employment/membership status.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_59f0eda0ea3ca',
                'label' => 'Current Full-Time Equivalent workers',
                'name' => 'current_fte',
                'type' => 'number',
                'instructions' => 'e.g. the number of hours work done in an average week / ~40.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'co_op',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'acf_rates-and-availability',
        'title' => 'Rates and availability',
        'fields' => array (
            array (
                'key' => 'field_5a1d88fd25f6d',
                'label' => 'Minimum day rate',
                'name' => 'minimum_day_rate',
                'type' => 'number',
                'instructions' => 'What is the lowest rate someone from your co-op could be hired for?',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '£',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_5a1d892925f6e',
                'label' => 'Maximum day rate',
                'name' => 'maximum_day_rate',
                'type' => 'number',
                'instructions' => 'What\'s your highest day rate?',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '£',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_5a1d895f25f6f',
                'label' => 'VAT registered?',
                'name' => 'vat_registered',
                'type' => 'radio',
                'choices' => array (
                    'Unknown' => 'Unknown',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_5a1d89b525f70',
                'label' => 'Lead time (months)',
                'name' => 'lead_time',
                'type' => 'number',
                'instructions' => 'How long would it be before you\'re available to hire? If you don\'t update this regularly choose a value that most closely reflects your general availability. If you have someone that could do some work tomorrow, put "0"',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => 'months',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_5a1d8a2a25f71',
                'label' => 'Contract types',
                'name' => 'contract_types',
                'type' => 'checkbox',
                'choices' => array (
                    'Time/materials' => 'Time/materials',
                    'Fixed price' => 'Fixed price',
                ),
                'default_value' => '',
                'layout' => 'vertical',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'co_op',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));


    register_field_group(array(
        'id' => 'acf_coop',
        'title' => 'CoOp',
        'fields' => array(
            array(
                'key' => 'field_583eb5b1febec',
                'label' => 'Logo',
                'name' => Fields::FEATURED_IMAGE,
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'required' => 'true',
            ),
            array(
                'key' => 'field_583eb589febea',
                'label' => 'Website URL',
                'name' => Fields::WEBSITE_URL,
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_583eb66bfebef',
                'label' => 'Address',
                'name' => Fields::ADDRESS,
                'type' => 'flexible_content',
                'layouts' => array(
                    array(
                        'label' => 'Address',
                        'name' => Fields::ADDRESS,
                        'display' => 'row',
                        'min' => 1,
                        'max' => 1,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_583eb6aafebf0',
                                'label' => 'Address Line 1',
                                'name' => Fields::ADDRESS_LINE_1,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_583eb6b9febf1',
                                'label' => 'Address Line 2',
                                'name' => Fields::ADDRESS_LINE_2,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_583eb6bdfebf2',
                                'label' => 'Address Line 3',
                                'name' => Fields::ADDRESS_LINE_3,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_583eb6c1febf3',
                                'label' => 'City',
                                'name' => Fields::CITY,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_583eb6c6febf4',
                                'label' => 'Country',
                                'name' => Fields::COUNTRY,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_583eb6ccfebf5',
                                'label' => 'Postcode',
                                'name' => Fields::POSTCODE,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_583edd92cca6c',
                                'label' => 'Location',
                                'name' => Fields::LOCATION,
                                'type' => 'google_map',
                                'center_lat' => '51',
                                'center_lng' => '0',
                                'zoom' => '',
                                'height' => '400',
                            )
                        ),
                    ),
                ),
                'button_label' => 'Add Row',
                'min' => '',
                'max' => '',
            ),
            array(
                'key' => 'field_584aa93e9dce4',
                'label' => 'Phone',
                'name' => Fields::PHONE,
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_583eb71346c95',
                'label' => 'Social Media',
                'name' => Fields::SOCIAL_MEDIA,
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_583eb72c46c96',
                        'label' => 'Social Media Type',
                        'name' => Fields::SOCIAL_MEDIA_TYPE,
                        'type' => 'select',
                        'column_width' => '',
                        'choices' => array(
                            Fields::EMAIL => 'E-mail',
                            Fields::FACEBOOK => 'Facebook',
                            Fields::GITHUB => 'Github',
                            Fields::GOOGLE_PLUS => 'Google+',
                            Fields::INSTAGRAM => 'Instagram',
                            Fields::PINTEREST => 'Pinterest',
                            Fields::SNAPCHAT => 'Snapchat',
                            Fields::TWITTER => 'Twitter',
                            Fields::YOUTUBE => 'YouTube',
                            Fields::LINKED_IN => 'LinkedIn',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array(
                        'key' => 'field_583eb76146c97',
                        'label' => 'Social Media Link',
                        'name' => Fields::SOCIAL_MEDIA_LINK,
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
            array(
                'key' => 'field_583eb659febee',
                'label' => 'Turnover (deprecated)',
                'name' => Fields::TURNOVER,
                'type' => 'number',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_583eb5f5febed',
                'label' => 'Number of Employees (deprecated)',
                'name' => Fields::EMPLOYEE_COUNT,
                'type' => 'select',
                'required' => 0,
                'choices' => array(
                    '0-3' => '0-3',
                    '4-5' => '4-5',
                    '6-10' => '6-10',
                    '11-15' => '11-15',
                    '16-20' => '16-20',
                    '20-30' => '20-30',
                    '30+' => '30+',
                ),
                'default_value' => '',
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => ouCoOp::postType(),
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));



}
