<?php 

use UserInfo;


require 'src/UserInfo.php';

 $userinfo = new UserInfo; 

echo $userinfo->getIp(); 