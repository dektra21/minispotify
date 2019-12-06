<?php



?>




<!DOCTYPE html>
<html lang="en" style="background-color:black;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="spotify.png">
    <link rel="stylesheet" href="assets/css/uikit.min.css">
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
    <title>Dektra Register</title>
    <link rel="stylesheet" href="css/uikit.min.css">
    <style>
        .uk-background-cover{
            background-color:black;
        }
        
    </style>
</head>
<body>
<div class=" uk-position-center uk-section uk-section-default uk-flex uk-animation-fade uk-background-cover" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <h3 class="uk-card-title uk-text-center">Register</h3>
                            <form action="include/action/user-register.php" method="post">
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon "uk-icon="user" ></span>
                                        <input class="uk-input uk-form-large" type="text" name="username" id="username" placeholder="Enter Username">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-large" type="password" name="password" id="password" placeholder="Enter Password"  minlength="6" maxlength="25">	
                                        <br><br>
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-large" type="password" name="password2" id="password2" placeholder="Re-Enter Password"  minlength="6" maxlength="25">
                                        <br><br>
                                        <span class="uk-form-icon" uk-icon="lock"></span>
                                        <input class="uk-input uk-form-large" type="text" name="name" id="name" placeholder="Enter Name">	
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon "uk-icon="user" ></span>
                                        <input class="uk-input uk-form-large" type="text" name="email" id="email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <br>
                                <div class="uk-margin">
                                    <button type="submit" name="register" class="uk-button uk-button-secondary uk-button-large uk-width-1-1">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>