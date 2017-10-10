<?php
if (!empty($_POST['password']))
{
   $password  = trim($_POST['password']);
}

if (strlen($password) < 6)
    pwdSize($password);

function pwdSize($x){
    $passwordSize= strlen($x);
    echo "Password must be at least 6 characters. You only entered " + $passwordSize + ' characters.';
}
?>