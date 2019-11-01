<?php
class Account
{
    private $con;
    private $errorArray;
    public function __construct($con)
    {
        $this->con =$con;
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
            return insertUserDetails($un, $fn, $ln, $em, $pw);
        }
        else{
            return false;  
        }
    }

    // Function to check if the error message passed exists in errorArray
    public function getError($error){
        if(!in_array($error, $this->errorArray)){
            $error = "";
        }
        return "<span class='errorMessage'>$error</span>";
    }


    private function insertUserDetails($un, $fn, $ln, $em, $pw){
        $encryptedPw = md5($pw); //Password is encrypted
        $profilePic = "assets/images/profile-pics/pf.png";
        $date = date("Y-m-d");

        $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')");

        return $result;
    }
    // Form Validation

    // Validating user name
    private function validateUsername($un)
    {
        if (strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArray, Constants::$userNameCharacters);
            return;
        }

        //TODO: check if username exists
    }

    // Validating first name
    private function validateFirstname($fn)
    {
        if (strlen($fn) > 50 || strlen($fn) < 2) {
            array_push($this->errorArray, Constants::$firstNameCharacters);
            return;
        }
    }

    // Validating last name
    private function validateLastname($ln)
    {
        if (strlen($ln) > 50 || strlen($ln) < 2) {
            array_push($this->errorArray, Constants::$lastNameCharacters);
            return;
        }
    }

    // Validating emails
    private function validateEmails($em, $em2)
    { 
        if($em != $em2){
            array_push($this->errorArray, Constants::$emailsDonotMatch); 
            return; 
        }

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, Constants::$emailInvalid); 
            return;
        }

        //TODO: Check if the email has already been used
    }

    // Validating passwords 
    private function validatePasswords($pw, $pw2)
    { 
        if($pw != $pw2){
            array_push($this->errorArray, Constants::$passwordDonotMatch); 
            return; 
        }

        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray, Constants::$passwordNotAlphanumeric); 
            return;
        }
        if (strlen($pw) > 30 || strlen($pw) < 8) {
            array_push($this->errorArray, Constants::$passwordCharacters);
            return;
        }
    }
}
