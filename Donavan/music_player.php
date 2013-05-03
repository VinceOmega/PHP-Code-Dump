   <?php
     
     
     
     
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
        
         <ul id="bar">
            <li><a href="#">Featured</a></li>
            <li><a href="#">Artists</a></li>
            <li><a href="#">Shows</a></li>
            <li><a href="#">Music Player</a></li>
            <li><a href="#">RSS Feed</a></li>
            <li><a herf="#">About</a></li>
            <li><a herf="#">Feedback</a></li>
            <li><a herf="#">Logout</a></li>

            
        </ul>

<div id="wrapper">
 
    <div id="m_player">
     
     <!--
     Upload the music with the ajax player
     -->
     
    <form method="post" action="music_player_action.php">
          <select name="songs">
               <?php
               
               
               ?>
          </select>
          <input name="add" type="button" value="add"/>
               
     
    </form>
    
    
    </div>
    
    
</div>


</body></html>