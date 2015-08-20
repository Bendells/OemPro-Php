# OemPro-Php
A simple SDK for the OemPro platform in php

it is an itnegration of their API in php. You will first need to login by either creating a user or a an administrator and use the login function:

$user = new user('username', 'password');
$user->login();

And then use the other SDK commands.
