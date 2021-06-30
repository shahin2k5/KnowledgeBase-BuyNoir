<?php

return [

    'index' => [
        'title' => 'Setting',
    ],

    'edit' => [
        'title' => 'Setting Edit',
    ],

    'breadcrumb' => [
        'edit' => 'Edit',
    ],

    'form'  => [
        'title' => 'Website Title',
        'logo' => 'Website Logo',
        'logo_white' => 'Website Logo White',
        'favicon' => 'Website Favicon',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'meta_tag' => 'Meta Tag',
        'address' => 'Address',
        'phone' => 'Phone/Mobile',
        'email' => 'Email',
        'currency' => 'Currency',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'linkedin' => 'LinkedIn',
        'instagram' => 'Instagram',
        'save-button' => 'save',


        'validation'    => [
            'name' => [
                'required'  => 'The name field is required!',
                'unique'  => 'Name already exists!',
            ],

        ],

    ],

    'message' => [

        'store' => [
            'success' => 'Setting added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Setting updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Setting deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Setting' => 'Last Setting Can not be deleted!',
        ],
    ]

];