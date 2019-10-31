<?php
class Account
{

    public function __construct()
    { }
    public function register()
    {
        $this->validateUsername($username);
        $this->validateFirstname($firstname);
        $this->validateLastname($lastname);
        $this->validateEmails($email, $email2);
        $this->validatePasswords($password, $password2);
    }
    // Form Validation

    // Validating user name
    private function validateUsername($un)
    {
        echo "username function called";
     }

    // Validating first name
    private function validateFirstname($fn)
    { }

    // Validating last name
    private function validateLastname($ln)
    { }

    // Validating emails
    private function validateEmails($em, $em2)
    { }

    // Validating passwords 
    private function validatePasswords($pw, $pw2)
    { }
}
