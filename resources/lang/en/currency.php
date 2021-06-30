<?php

return [

    'index' => [
        'title' => 'Currency',
    ],

    'create' => [
        'title' => 'Currency Create',
    ],

    'edit' => [
        'title' => 'Currency Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'breadcrumb' => [
        'index' => 'Currency',
        'create' => 'Create',
        'edit' => 'Edit',
    ],

    'form'  => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'symbol' => 'Symbol',
        'status' => 'Status',
        'permission' => 'Permission',
        'add-button' => 'Add New Currency',
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
            'success' => 'Currency added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Currency updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Currency deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Currency' => 'Last Currency Can not be deleted!',
        ],
    ]

];