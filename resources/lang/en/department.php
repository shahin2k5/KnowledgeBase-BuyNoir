<?php

return [

    'index' => [
        'title' => 'Department',
    ],

    'create' => [
        'title' => 'Department Create',
    ],

    'edit' => [
        'title' => 'Department Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'breadcrumb' => [
        'index' => 'Department',
        'create' => 'Create',
        'edit' => 'Edit',
    ],

    'form'  => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',

        'description' => 'Description',
        'price' => 'Price',
        'image' => 'Image',
        'status' => 'Status',
        'permission' => 'Permission',
        'add-button' => 'Add New Department',
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
            'permission' => [
                'required'  => 'Please select atleast one option!',
            ],

        ],

    ],

    'message' => [

        'store' => [
            'success' => 'Department added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Department updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Department deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Department' => 'Last Department Can not be deleted!',
        ],
    ]

];