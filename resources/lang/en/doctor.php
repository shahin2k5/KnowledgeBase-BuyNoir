<?php

return [

    'index' => [
        'title' => 'Doctor Management',
    ],

    'create' => [
        'title' => 'Doctor Create',
    ],

    'edit' => [
        'title' => 'Doctor Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'profile' => [
        'title' => 'Profile',
    ],

    'breadcrumb' => [
        'index' => 'Doctor',
        'create' => 'Create',
        'edit' => 'Edit',
    ],


    'form'  => [
        'id'                => 'ID',
        'image'             => 'Image',
        'upload_image'      => 'Upload Image',
        'change_image'      => 'Change Image',
        'name'              => 'Name',
        'email'             => 'Email',
        'password'          => 'Password',
        'mobile'            => 'Mobile',
        'password-confirm'  => 'Confirm Password',
        'specialty'         => 'Specialty',
        'department'        => 'Department',
        'designation'       => 'Designation',
        'gender'            => 'Gender',
        'bio'               => 'Bio',
        'status'            => 'Status',
        'role-current'      => 'Current Role',

        'morning_start_time'=> 'Morning - Start Time',
        'morning_end_time'  => 'Morning - End Time',
        'evening_start_time'=> 'Evening - Start Time',
        'evening_end_time'  => 'Evening - End Time',
        'interval_time_length'=> 'Interval Time Length (In Minutes)',

        'add-button'        => 'Add New Doctor',
        'save-button'       => 'Save',
        'edit-button'       => 'Edit',
        'update-button'     => 'Update',
        'delete-button'     => 'Delete',
        'Doctor-since'      => 'Doctor Since',
        'last-update'       => 'Last Update',
        'action'            => 'Action',
        'edit'              => 'Edit',
        'delete'            => 'Delete',
        'delete-message'    => 'Are you sure?',

        'validation'    => [
            'password' => [
                'required'  => 'The password field is required!',
                'same'      => 'The password and confirm-password must match.',
            ],
            'name' => [
                'required'  => 'The name field is required!',
            ],
            'email' => [
                'required'  => 'The email field is required!',
                'email'     => 'Please your email format!',
                'unique'    => 'Email already exists!',
            ],
            'roles' => [
                'required'  => 'The roles field is required!',
            ],
            'mobile' => [
                'required'  => 'The mobile field is required!',
            ],
            'district' => [
                'required'  => 'The district field is required!',
            ],
            'sub_district' => [
                'required'  => 'The sub_district field is required!',
            ],
            'address' => [
                'required'  => 'The address field is required!',
            ],
            'image' => [
                'required'  => 'The image field is required!',
                'image'     => 'The uploaded file must be an image!',
                'mimes'     => 'Only jpeg,png,jpg formats are supported!',
                'max'       => 'File size must not be more than 10M!',
            ],

        ],

    ],

    'message' => [
        'profile' => [
            'success'   => 'Profile updated successfully',
            'error'     => 'There is an error!',
        ],

        'store' => [
            'success'   => 'Doctor added successfully!',
            'error'     => 'There is an error! Please try later!',
        ],

        'update' => [
            'success'   => 'Doctor updated successfully!',
            'error'     => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success'   => 'Doctor deleted successfully!',
            'error'     => 'There is an error! Please try later!',
            'warning_last_Doctor' => 'Last Doctor can not be deleted!',
        ],
    ]

];