<?php
class Account
{

    public function __construct()
    { }
    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
        $this->validateUsername($un);
        $this->validateFirstname($fn);
        $this->validateLastname($ln);
        $this->validateEmails($em, $em2);
        $this->validatePasswords($pw, $pw2);
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
