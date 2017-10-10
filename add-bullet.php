<?php
if (!empty($_POST['newbullet']))
{
   $newbullet  = trim($_POST['newbullet']);
}
else 
{
   $newbullet = NULL;
   echo 'Don\'t forget to add bullet text! <br />';	
}
s
if (!empty($_POST['newbulletdate']))
{
   $newbulletdate = trim($_POST['newbulletdate']);
}
else
{
   $newbulletdate = NULL;
   echo 'Don\'t forget to add a date for your bullet! <br />';   
}

if (!empty($_POST['newbulletype']))
{
   $newbulletbullet = trim($_POST['newbullettype']);
}

if (!empty($_POST['newbulletsignifier']))
{
   $newbulletsignifier = trim($_POST['newbulletsignifier']);
}

if (($newbullet != NULL) && ($newbulletdate != NULL))
   echo "Bullet: $newbullet <br />Date: $newbulletdate "; 

?>