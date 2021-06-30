<?php

return [

    'index' => [
        'title' => 'Appointment',
    ],

    'create' => [
        'title' => 'Appointment Create',
    ],

    'edit' => [
        'title' => 'Appointment Edit',
    ],

    'delete' => [
        'title' => 'Delete',
    ],

    'breadcrumb' => [
        'index' => 'Appointment',
        'create' => 'Create',
        'edit' => 'Edit',
    ],

    'form'  => [
        'id'                => 'ID',
        'department_id'     => 'Department',
        'tracking_id'       => 'Tracking Id',
        'doctor_id'         => 'Doctor',
        'patient_id'        => 'Patient',
        'date'              => 'Date',
        'time'              => 'Time',
        'price'             => 'Amount',
        'status'            => 'Status',
        'permission'        => 'Permission',
        'add-button'        => 'Add New Appointment',
        'save-button'       => 'Save',
        'edit-button'       => 'Edit',
        'update-button'     => 'Update',
        'delete-button'     => 'Delete',
        'action'            => 'Action',
        'edit'              => 'Edit',
        'delete'            => 'Delete',
        'delete-message'    => 'Are you sure?',


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
            'success' => 'Appointment added successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'update' => [
            'success' => 'Appointment updated successfully!',
            'error' => 'There is an error! Please try later!',
        ],

        'destroy' => [
            'success' => 'Appointment deleted successfully!',
            'error' => 'There is an error! Please try later!',
            'warning_last_Appointment' => 'Last Appointment Can not be deleted!',
        ],
    ]

];