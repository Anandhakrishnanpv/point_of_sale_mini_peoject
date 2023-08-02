<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user=new user();
    $email = $_POST['email'];
    $user =$user->where(['email' => $email], 'users');

    if ($user && isset($user[0]['password'])) {

        $row = $user[0];
        
        if(password_verify($_POST['password'],$row['password'])) {
            
            authenticate($row);
            redirect('home');
        } else {
            $errors['password'] = "Wrong Password";
        }
    } else {
        $errors['email'] = "Wrong email";
    }
}

require views_path('auth/login');
?>