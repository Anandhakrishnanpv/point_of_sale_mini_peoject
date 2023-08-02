<nav class="navbar navbar-expand-lg navbar-light bg-light" style="min-width:350px;">
            <div class="container-fluid">
                <a class="navbar-brand text-success" href="index.php?page_name=home"><h4><strong><?=esc(app_name) ?></h4></strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page_name=home"><i class="fa-solid fa-house" style="color: #187ee1;"></i><strong> Point of Sale</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page_name=admin"><i class="fa-solid fa-user-shield"style="color: #27ae60;"></i><strong> Admin</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page_name=login"><i class="fa-solid fa-warehouse"style="color: #1881e1;"></i><strong> Login</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page_name=signup"><i class="fa-solid fa-user-plus"style="color: #1881e1;"></i><strong> SignUp</strong></a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page_name=profile"><i class="fa-solid fa-user" style="color: #1881e1;"></i><strong> Profile</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page_name=profile-settings"><i class="fa-solid fa-gear"style="color: #1881e1;"></i><strong> Profile Settings</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page_name=logout"><i class="fa-solid fa-right-from-bracket " style="color: #fa0000;"></i><strong> Logout</strong></a>

                        </li>                        
                        
                
   
                        
                    </ul>
                    <form class="d-flex navbar-nav">
                        </li>
                         <li class="nav-item">
                           <a class="nav-link text-white  p-2 mb-2 bg-success text-white" href="#"><i class="fa-solid fa-hand fa-shake"></i><strong> <?=auth('username') ?></strong></a>
                        </li>
                    </form>
                </div>
            </div>
        </nav>