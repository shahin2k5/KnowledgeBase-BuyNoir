<?php

return [

    'index' => [
        'title' => 'Specialty',
    ],

    'create' => [
        'title' => 'Specialty Create',
    ],

    'edit' => [
        'title' => 'Specialty Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'breadcrumb' => [
        'index' => 'Specialty',
        'create' => 'Create',
        'edit' => 'Edit',
    ],

    'form'  => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'image' => 'Image',
        'status' => 'Status',
        'permission' => 'Permission',
        'add-button' => 'Add New Specialty',
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
            'success' => 'Specialty added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Specialty updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Specialty deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Specialty' => 'Last Specialty Can not be deleted!',
        ],
    ]

];