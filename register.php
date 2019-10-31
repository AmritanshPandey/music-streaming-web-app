<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Slotify</title>
</head>

<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your Account</h2>
            <p>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="Enter User Name" required>
            </p>

            <p>
                <label for="loginPassword">Password: </label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Enter Password" required>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>

    </div>

</body>

</html>