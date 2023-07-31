<?php 
if(isset($_SESSION['USER'])){

    unset($_SESSION['USER']);
}

//session_destroy();
//session_registered_id();

redirect('login');
?>