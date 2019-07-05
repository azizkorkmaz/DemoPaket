<?php

$users = [[
    "user_name" => "Aziz",
    "mail" => "aziz@korkmaz.com"
    ],
    [
        "user_name" => "Yusuf",
        "email" => "yusuf@ulusoy.com"
    ]];

function users()
{
    global $users;
    return $users;
}