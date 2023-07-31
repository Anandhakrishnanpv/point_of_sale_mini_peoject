<?php require views_path('partials/header'); ?>
        <!--resizing the tab according to the screen size -->
        <div class="container-fluid border col-lg-5 col-md-6 mt-5 p-5 shadow-lg"> 
                <form method="post">
                
                        <center>
                                <div class="text-success"><h1><strong>Şpi¢ē r໐นtē</strong></h1></div><br>
                                <h4><i class="fa fa-user "></i><b> User Signup</b></h4>
                                
                        </center>
                        <br>
                        
                        <div class="form-group">
                        <label for="exampleFormControlInput1"><b>Username</b></label>
                        <input value="<?=set_value('username')?>" name="username" type="text" class="form-control <?=!empty($errors['username']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="username" autofocus>
                        <?php if (!empty($errors['username'])): ?>
                           <small class="text-danger"><?= $errors['username']  ?></small>
                        <?php endif; ?>
                        </div>
                        <br>
                        
                        <div class="form-group">
                        <label for="exampleFormControlInput1"><b>Email address</b></label>
                        <input value="<?=set_value('email')?>" name="email" type="email" class="form-control <?=!empty($errors['email']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="name@example.com">
                        <?php if (!empty($errors['email'])): ?>
                           <small class="text-danger"><?= $errors['email']  ?></small>
                        <?php endif; ?>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><b>Password</b></span>
                        </div>
                        <input value="<?=set_value('password')?>" name="password" type="text" class="form-control <?=!empty($errors['password']) ? 'border-danger':''?>" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                        <?php if (!empty($errors['password'])): ?>
                           <small class="text-danger col-12"><?= $errors['password']  ?></small>
                        <?php endif; ?>
                        </div> 
                        <br>
                                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><b>Retype Password</b></span>
                        </div>
                        <input value="<?=set_value('password_retype')?>" name="password_retype" type="text" class="form-control <?=!empty($errors['password_retype']) ? 'border-danger':''?>" placeholder="Retype Password" aria-label="Username" aria-describedby="basic-addon1">
                        <?php if (!empty($errors['password_retype'])): ?>
                           <small class="text-danger col-12"><?= $errors['password_retype']  ?></small>
                        <?php endif; ?>
                        </div> 
                        <br>
                        <button class="btn btn-primary float-end"><b>SignUp</b></button>
                        <button class="btn btn-danger"><b>cancel</b></button>
                <form>
        </div> 
           
       

        <?php require views_path('partials/footer'); ?>