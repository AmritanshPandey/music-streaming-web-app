<?php
// Form Sanitization

// username sanitization function
function sanitizeFormUsername($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

// string sanitization function
function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

// password sanitization function
function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    //Register Button Was Pressed

    // Register Form Sanitization 
    $username = sanitizeFormUsername($_POST['username']);
    $firstname = sanitizeFormString($_POST['firstname']);
    $lastname = sanitizeFormString($_POST['lastname']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);
}


?>