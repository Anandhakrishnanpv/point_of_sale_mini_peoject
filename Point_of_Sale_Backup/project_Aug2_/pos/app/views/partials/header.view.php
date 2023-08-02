<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?=esc($app_name); ?>
    </title>
    <!-- Linking the Bootstrap and Font Awesome CSS files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

<style type="text/css"></style>
    <!-- not showing the nav bar in the login page  -->
       <?php
       $no_nav[] = "login";
       
       ?> 
       <?php if(!in_array($controller,$no_nav)): ?>
       <?php require views_path('partials/nav'); ?>
       <?php endif; ?>

        <div class="container-fluid" style="min-width: 350px;">