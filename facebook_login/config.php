<?php


 require 'api/facebook.php';


 $config['App_ID'] = 'Facebook App Id';
 $config['App_Secret'] = 'Facebook App Secret';


 $facebook = new Facebook(array(
  'appId'  => $config['App_ID'],
  'secret' => $config['App_Secret']
 ));


?>