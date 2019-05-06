<?php
require('./model/backend.php');

function loginAdmin()
{
    $login = getLog();
    require('./view/backend/loginView.php');
}
?>