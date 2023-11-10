<?php
require_once "core/init.php";
require_once "includes/header.php";

// Nếu đăng nhập
if ($user)
{
 
}
// Nếu không đăng nhập
else
{
    // Hiển thị form đăng nhập
    require_once 'templates/signin.php';
}

require_once "includes/footer.php";


?>