<?php

class mySQLHelper{
    
    public function checkPass($user, $pass){
        $db = @mysqli_connect('localhost', 'root', '');
        if (mysqli_connect_errno()){
            echo 'Can not connect to database';
            echo mysqli_connect_errno(). mysqli_connect_error();
            return false;
        }
        
        $db->select_db('mydb');
        
        $query = "SELECT user, password
                FROM Users
                WHERE user = $user
                AND password = $pass" ;
                
                echo $query;
     
        $results = $db->query($query);
        $url = 'http://'. $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
        if(!$results){
            mysqli_close($db);
            header("Location:.$url.login.php&msg=1");
            
        }
        
        else{
            mysqli_close($db);
            header("Location:.$url.featured.php");
            
            
        }
        
    }
    
    
    
}

?>