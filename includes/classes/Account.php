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

        // Condition checking if the error array is empty
        if(empty($this->errorArray) ==true){
            //Insert into DB
            return true;
        }
        else{
            return false;
        }
    }
    // Form Validation

    // Validating user name
    private function validateUsername($un)
    {
        if (strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArray, "Your Username must be between 5 and 25 characters");
            return;
        }

        //TODO: check if username exists
    }

    // Validating first name
    private function validateFirstname($fn)
    {
        if (strlen($fn) > 50 || strlen($fn) < 2) {
            array_push($this->errorArray, "Your First Name must be between 2 and 50 characters");
            return;
        }
    }

    // Validating last name
    private function validateLastname($ln)
    {
        if (strlen($ln) > 50 || strlen($ln) < 2) {
            array_push($this->errorArray, "Your Last Name must be between 2 and 50 characters");
            return;
        }
    }

    // Validating emails
    private function validateEmails($em, $em2)
    { 
        if($em != $em2){
            array_push($this->errorArray, "Your Emails dont match"); 
            return; 
        }

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, "Your Emails is invalid"); 
            return;
        }

        //TODO: Check if the email has already been used
    }

    // Validating passwords 
    private function validatePasswords($pw, $pw2)
    { 
        if($pw != $pw2){
            array_push($this->errorArray, "Your Passwords dont match"); 
            return; 
        }

        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray, "Your Password can only contain numbers and alphabet"); 
            return;
        }
        if (strlen($pw) > 30 || strlen($pw) < 8) {
            array_push($this->errorArray, "Your Password must be between 8 and 30 characters");
            return;
        }
    }
}
