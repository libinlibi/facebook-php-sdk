<?php
 require_once 'src/facebook.php';
 
 $appId = '453967178338403';
 $secret = '611ccc5b3ca44103af1cacea8f203a72';
 $returnurl = 'http://localhost/facebook/';
 $permissions = 'manage_pages, publish_stream';
 
 $fb = new Facebook(array('appId'=>$appId, 'secret'=>$secret));
 
 $fbuser = $fb->getUser();
 if($fbuser){   
 }else{
    $loginurl = $fb->getLoginUrl(array('scope'=>$permissions,
        'redirect-uri'=>$returnurl, 'scope'=>$permissions));
    echo '<a href="'.$loginurl.'">Login with FB</a>';
 }
 
?>
