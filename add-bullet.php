<?php
if (!empty($_POST['newbullet']))
{
   $newbullet  = $_POST['newbullet'];
}
else 
{
   $newbullet = NULL;
   echo 'Don\'t forget to add bullet text! <br />';	
}
s
if (!empty($_POST['newbulletdate']))
{
   $newbulletdate = $_POST['newbulletdate'];
}
else
{
   $newbulletdate = NULL;
   echo 'Don\'t forget to add a date for your bullet! <br />';   
}
if (($newbullet != NULL) && ($newbulletdate != NULL))
   echo "Bullet: $newbullet <br />Date: $newbulletdate "; 

?>