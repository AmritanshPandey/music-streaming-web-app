<?php
class Account
{
    private $errorArray;
    public function __construct()
    { 
        $this->errorArray = array();
    }
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
        if(strlen($un) > 25 || strlen($un) < 5){
            array_push($this->errorArray, "Your username must be between 5 and 25 characters");
            return;
        }

        //TODO: check if username exists
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
