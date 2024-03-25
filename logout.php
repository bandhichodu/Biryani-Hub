<?php
include("links.html");

setcookie("username","$email",time()-3600,"/","",0);
echo "log out successfully...";

?>