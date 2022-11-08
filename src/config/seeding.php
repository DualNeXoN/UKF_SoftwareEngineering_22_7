<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Seeding Modes
    |--------------------------------------------------------------------------
    |
    | List of defined seeding modes.
    |
    | full:
    | - seeds the full database
    | - takes on some Windows filesystems about 30-45 minutes
    | - on Linux the process is much faster
    | - suits for full frontend tests
    |
    | fast:
    | - seeds ~1/10 of data comparing to full seed
    | - takes on some Windows filesystems about 3-4 minutes
    | - on Linux the process is much faster
    | - suits for ordinary development
    |
    | basic:
    | - seeds just necessary data like countries or roles
    | - takes less than 1 minute on Windows filesystem
    | - on Linux the process is much faster
    | - suits for ordinary development
    |
    */

    'modes' => [
        'full' => 0,
        'fast' => 1,
        'basic' => 2,
    ],

    /*
    |--------------------------------------------------------------------------
    | Selected Seeding Mode
    |--------------------------------------------------------------------------
    |
    | Selects the seeding mode from list above.
    | Default value: fast
    |
    */

    'current_mode' => 'fast',

    /*
    |--------------------------------------------------------------------------
    | Seed Defaults
    |--------------------------------------------------------------------------
    |
    | Selects the default value
    |
    | admin_role:
    | - Default role for admin while seeding general_user
    |
    | student_role:
    | - Default role for student while seeding general_user
    |
    */
    
    'admin_role' => 'Admin',
    'student_role' => 'Student',
];