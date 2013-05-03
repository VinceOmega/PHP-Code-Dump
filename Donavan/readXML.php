
<?php

if(isset($_POST['Username']) && isset($_POST['Password'])){
$user = $_POST['Username'];
$code = $_POST['Password'];
}


    global $user, $code;
    
    
    $info = array();
    $dom = new DOMDocument();
    $dom->load('admininfo.xml');
    $admin = $dom->getElementsByTagName('user');
    $pass =  $dom->getElementsByTagName('password');
    $admins = $admin->item(0);
    $passes = $pass->item(0);
   // echo $user;
    //echo $code;
    //echo $admins->nodeValue;
    //echo $passes->nodeValue;
    if($user == $admins->nodeValue){
            if($code == $passes->nodeValue){
    
echo 1;
$dom->save('admininfo.xml');
return true;
            }
            
else
$dom->save('admininfo.xml');
return false;
    }




?>