

<?php session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>

<!DOCTYPE html>
<html><head>
<!--<link rel="stylesheet" href="color_scheme_2.css" type="text/css">--><title>Righteous Inc's Admin Page</title>



    
    
    <script type="text/javascript" src="p_loader.js"></script>
    <script type="text/javascript" src="cat_calls.js"></script>
    <script type="text/javascript" src="SWFUploadv2.2/SWFUpload v2.2.0.1 Core/swfupload.js"></script>
    <link rel="stylesheet" href="color_scheme_2.css" type="text/css">
    <link rel="stylesheet" href="fileuploader.css" type="text/css">
        

        
</head>
    <body>
        

<div id="wrapper">
 
       
  
    
    <div id="login">
       <form action="checkpassword.php" method="post">
        <p class="header">Username:</p><input size="60"  name="username" value="username" type="text" >
        <p class="header">Password:</p><input size="60" name="password" value="password" type="password" >
        <input value="submit" name="L_submit" type="submit">
       </form>
    </div>

</div>


</body></html>