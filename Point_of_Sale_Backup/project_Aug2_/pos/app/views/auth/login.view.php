<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Add any additional CSS or meta tags as needed -->
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <link rel="stylesheet" href="path/to/font-awesome.css">
    <style>
        body {
                background-image: url("assets/images/bg4.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                padding: 300px;
                /* Add the following two lines to flip the background image horizontally */
                -webkit-transform: scaleX(-1);
                transform: scaleX(1);
        }

        .login-form {
            width: 100%;
            max-width: 500px; /* Adjust this value as needed */
            background-color: #ffffff;
            padding: 40px;
            border: 0px solid #ccc;
            border-radius: 5px;
            margin: 0 20px; /* Set equal padding on the left and right sides */
            border-radius: 25px;   
        }
    </style>
</head>
<body>

<?php require views_path('partials/header'); ?>

<!-- Resizing the tab according to the screen size -->
<div class="login-form">
    <form method="post">

        <center>
            <div class="text-success"><h1><strong>Şpi¢ē r໐นtē</strong></h1></div>
            <br>
            <h4><i class="fa fa-user"></i><strong> Login</strong></h4>
            <h3></h3>
            
        </center>
        <br>

        <div class="form-group">
               <strong> Email</strong>
            <input value="<?=set_value('email')?>" name="email" type="email" class="form-control <?=!empty($errors['email']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="example@gmail.com" autofocus>
            <?php if (!empty($errors['email'])): ?>
                <small class="text-danger"><?= $errors['email']  ?></small>
            <?php endif; ?>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><strong>Password</strong></span>
            </div>
            <input name="password" type="password" class="form-control <?=!empty($errors['password']) ? 'border-danger':''?>" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
            <?php if (!empty($errors['password'])): ?>
                <small class="text-danger col-12"><?= $errors['password']  ?></small>
            <?php endif; ?>
        </div>
        <br>
        <div class="row">
            <button class="btn btn-success" style="font-size:20px;"><strong>Login</strong></button>
        </div>
    </form>
</div>

<?php require views_path('partials/footer'); ?>

<!-- Add any additional scripts or JavaScript libraries as needed -->
<script src="path/to/jquery.js"></script>
<script src="path/to/bootstrap.js"></script>
</body>
</html>
