<?php require views_path('partials/header'); ?>
<div style="color:#666">
<center class="p-2"><h4><i class="fa fa-user-shield"></i><strong>Admin</strong></h4></center>
<div class="container-fluid row">
    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
    <ul class="list-group">
        <a href="index.php?page_name=admin&tab=dashboard">
        <li class="list-group-item <?=!$tab || $tab=='dashboard'? 'active':''?>"><i class="fa-solid fa-chart-line"></i><strong> Dashboard</strong></li>
        </a>
        <a href="index.php?page_name=admin&tab=users">
        <li class="list-group-item <?=$tab=='users'? 'active':''?>"><i class="fa-solid fa-users"></i><strong> Users</strong></li>
        </a>
        <a href="index.php?page_name=admin&tab=products">
        <li class="list-group-item <?=$tab=='products'? 'active':''?>"><i class="fa-solid fa-hamburger"></i><strong> Products</strong></li>
        </a>
        <a href="index.php?page_name=logout">
        <li class="list-group-item "><i class="fa-solid fa-right-from-bracket"></i><strong> Logout</strong></li>
        </a>
    </ul>
    </div>
    <div class="border col">
    <h2><?=strtoupper($tab)?></h2>  

    <?php

    switch($tab){
        case 'products':
            require views_path('admin/products');
            break;
        default:
            break;    
    }

    ?>
    </div>
</div>
</div>
<?php require views_path('partials/footer');?>