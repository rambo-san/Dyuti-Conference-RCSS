<?php

return [
    
    "password_protect" => env('PASSWORD_PROTECT', false),


    /**
     * CONFIGURATIONS
     */
    "project_name" => "Rajagiri Conference ",
    "backend_url_prefix" => "backend-admin",
    "project_environment" => "DEV",
    "token_cookie_name" => "as__",
    "email" => "support@rajagiri.com",
    "conversion_rate" => "83.23",
    

    "img_prefix" => "lr_",
    "version" => "?ver=" . time(),
    
    "password_format" => "/^(?=.*?[A-Za-z0-9]).{6,}$/",
    "password_message" => "Password should be minimum 6 characters long.",


    "profile_img" => [
        "width" => 150,
        "height" => 150,
    ],


    "product_img" => [
        "width" => 600,
        "height" => 710,
    ],

    "title" => [
        1 => "Pro",
        2 => "Dr",
        3 => "Mrs",
        4 => "Mr",
        5 => "Ms"
    ],

    "designation" => [
        1 => "Professor",
        2 => "Associate Professor",
        3 => "Assistant Professor",
        4 => "Delegates",
        5 => "Field/Industry Practitioner",
        6 => "Research Scholar",
        7 => "Postgraduate Student",
        8 => "Undergraduate Student",
    ],

    "conference_theme" => [
        1 => ['title' => "Social Work (DYUTI 2024) (10/01/2024-11/01/2024)",'date'=>'10/01/2024-11/01/2024'],
        2 => ['title' => "General Management (RCNPM'24) (12/01/2024-13/01/2024)",'date'=>'12/01/2024-13/01/2024'],
        3 => ['title' => "Behavioural Sciences",'date'=>''],
        4 => ['title' => "Life Sciences (10/01/2024-11/01/2024)",'date'=>'10/01/2024-11/01/2024'],
        5 => ['title' => "Analytics and Informatics (10/01/2024-11/01/2024)",'date'=>'10/01/2024-11/01/2024'],
        6 => ['title' => "Finance and Economics (RCEF'24) (10/01/2024-11/01/2024)",'date'=>'10/01/2024-11/01/2024'],
        7 => ['title' => "Operations (RCOM'24) (11/01/2024)",'date'=>'11/01/2024'],
        8 => ['title' => "Marketing (RICIM'24) (11/01/2024-12/01/2024)",'date'=>'11/01/2024-12/01/2024'],
        9 => ['title' => "Human Resource",'date'=>'']
    ],

    
   

    

];
