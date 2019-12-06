<?php
    $errorLogin = isset($_GET['error']) ? $_GET['error'] : NULL;
?>

<!DOCTYPE html>

<html lang="en" style="background-color:black;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" type="image/png" href="spotify.png">
    <link rel="stylesheet" href="css/uikit.min.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>Admin Sepotifae</title>
    <style>
        .uk-background-cover{
            background-color:black;
        } 
    </style>
</head>
<body >

<div class=" uk-position-center uk-section uk-section-default uk-flex uk-animation-fade uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"   uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large " style: >
                            <h3 class="uk-card-title uk-text-center">Log In</h3>

                            <?php if ($errorLogin == '0') : ?>
                                    <p style="color: red; font-style: italic;">Incorrect username or password!</p>
                            <?php endif; ?>

                            <form action="../include/action/user-login-admin.php" method="post">
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="user"></span>
                                        <input class="uk-input uk-form-large" type="text" name="username" id="username" placeholder="Enter Username">
                                       
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="lock"></span>
                                        <input class="uk-input uk-form-large" type="password" name="password" id="password" placeholder="Enter Password" minlength="6" maxlength="25">	
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <button type="submit" name="login" class="uk-button uk-button-secondary uk-button-large uk-width-1-1">Login</button>
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