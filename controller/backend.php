<?php
require('./model/backend.php');

function loginAdmin()
{
    $login = getLog();
    require('./view/backend/loginView.php');
}

function viewAdmin()
{
    $login = getAdmin();
    require('./view/backend/adminView.php');
}
?>