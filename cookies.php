<?php
setcookie("user_name", "rath", time()+ 60,'/'); // expires after 60 seconds
echo 'the cookie has been set for 60 seconds';
?>