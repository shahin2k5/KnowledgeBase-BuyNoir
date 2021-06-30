<?php

return [

    'index' => [
        'title' => 'Article Category',
    ],

    'create' => [
        'title' => 'Article Category Create',
    ],

    'edit' => [
        'title' => 'Article Category Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'breadcrumb' => [
        'index' => 'Article Category',
        'create' => 'Create',
        'edit' => 'Edit',
    ],

    'form'  => [
        'id' => 'ID',
        'title' => 'Title',
        'slug' => 'Slug',
        'description' => 'Description',
        'status' => 'Status',
        'permission' => 'Permission',
        'add-button' => 'Add New Article Category',
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
            'success' => 'Article Category added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Article Category updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Article Category deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Article Category' => 'Last Article Category Can not be deleted!',
        ],
    ]

];