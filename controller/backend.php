<?php
require('./model/backend.php');

function loginAdmin()
{
    require('./view/backend/loginView.php');
}

function viewAdmin()
{
    require('./view/backend/adminView.php');
}

function editPost()
{
    require('./view/backend/editView.php');
}

function addPost($title, $content)
{
    
}
?>