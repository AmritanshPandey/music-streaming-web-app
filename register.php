<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");
$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");


function getInputValue($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Music Whiz</title>
</head>

<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your Account</h2>
            <p>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="Enter User Name"  required>
            </p>

            <p>
                <label for="loginPassword">Password: </label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Enter Password" required>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>



            <form id="registerForm" action="register.php" method="POST">
                <h2>Create your free Account</h2>
                <p>
                    <!--Outputting Error Message-->
                    <?php echo $account->getError(Constants::$userNameCharacters); ?>
                    <label for="username">Username: </label>
                    <input id="username" name="username" type="text" placeholder="Enter User Name" value="<?php getInputValue('username')?>" required>
                </p>

                <p>
                    <!--Outputting Error Message-->
                    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <label for="firstname">First Name: </label>
                    <input id="firstname" name="firstname" type="text" placeholder="Enter your First Name" value="<?php getInputValue('firstname')?>" required>
                </p>
                <p>
                    <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                    <label for="lastname">Last Name: </label>
                    <input id="lastname" name="lastname" type="text" placeholder="Enter your Last Name" value="<?php getInputValue('lastname')?>" required>
                </p>

                <p>
                    <!--Outputting Error Message-->
                    <?php echo $account->getError(Constants::$emailsDonotMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <label for="email">Email: </label>
                    <input id="email" name="email" type="email" placeholder="Enter your Email" value="<?php getInputValue('email')?>" required>
                </p>

                <p>
                    <label for="email2">Confirm Email: </label>
                    <input id="email2" name="email2" type="email" placeholder="Re-Enter your Email" value="<?php getInputValue('email2')?>" required>
                </p>

                <p>
                    <!--Outputting Error Message-->
                    <?php echo $account->getError(Constants::$passwordDonotMatch); ?>
                    <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                    <?php echo $account->getError(Constants::$passwordCharacters); ?>
                    <label for="password">Password: </label>
                    <input id="password" name="password" type="password" placeholder="Enter Password"  required>
                </p>

                <p>
                    <label for="password2">Confirm Password: </label>
                    <input id="password2" name="password2" type="password" placeholder="Re-Enter Password"  required>
                </p>

                <button type="submit" name="registerButton">SIGN UP</button>


    </div>

</body>

</html>