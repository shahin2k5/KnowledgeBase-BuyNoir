<?php

return [

    'index' => [
        'title' => 'Article',
    ],

    'create' => [
        'title' => 'Article Create',
    ],

    'edit' => [
        'title' => 'Article Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'breadcrumb' => [
        'index' => 'Article',
        'create' => 'Create',
        'edit' => 'Edit',
    ],

    'form'  => [
        'id' => 'ID',
        'title' => 'Title',
        'slug' => 'Slug',
        'category' => 'Category',
        'description' => 'Description',
        'status' => 'Status',
        'article_category' => 'Article Category',
        'user_id' => 'Published By',
        'permission' => 'Permission',
        'add-button' => 'Add New Article',
        'save-button' => 'Save',
        'edit-button' => 'Edit',
        'update-button' => 'Update',
        'delete-button' => 'Delete',
        'action' => 'Action',
        'edit'              => 'Edit',
        'delete'            => 'Delete',
        'delete-message' => 'Are you sure?',


        'validation'    => [
            'name' => [
                'required'  => 'The name field is required!',
                'unique'  => 'Name already exists!',
            ],
            'code' => [
                'required'  => 'The Code field is required!',
                'unique'  => 'Code already exists!',
            ],
            'symbol' => [
                'required'  => 'The Code field is required!',
            ],
            'permission' => [
                'required'  => 'Please select atleast one option!',
            ],

        ],

    ],

    'message' => [

        'store' => [
            'success' => 'Article added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Article updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Article deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Article' => 'Last Article Can not be deleted!',
        ],
    ]

];