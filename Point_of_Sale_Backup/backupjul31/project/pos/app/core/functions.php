<?php
function show($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function views_path($view)
{
    // Construct the file path for the view file
    if (file_exists("../app/views/$view.view.php")) {
        // Check if the view file exists
        return "../app/views/$view.view.php";
    } else {
        // If the view file does not exist, echo an error message
        echo "view '$view' not found";
    }
}


//escape function
function esc($str)
{
    // Sanitize the string by converting special characters to HTML entities
    return htmlspecialchars($str);

}

//using prepared statement to prevent sql injection
function redirect($page)
{
    header("location:index.php?page_name=" .$page);
    die;
}


//function is used to stay the value in the box as the page is refreshed or other input errors
function set_value($key,$default="")
{
    if(!empty($_POST[$key]))
    {
        return $_POST[$key];
    }
    return $default;
}
function authenticate($row)
{
    
    $_SESSION['USER']=$row;
}
function auth($column)
{
    if(!empty($_SESSION['USER'][$column])){
    return $_SESSION['USER'][$column];
 } 
 return "Unknown";
}