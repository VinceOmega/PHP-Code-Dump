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
 
       
  
    <div id="featured">
        <p class="header">Mixtape Picture:</p>
  <!--<form action="javascript:;" method="post" onsubmit="editHomePage()">-->
        <input type="file" name="Mtape_i">
        <p class="header">Description:</p>       
        <textarea name="m_description">            
        </textarea>
        <p class="header">Track Listing:</p>
        <p>How many tracks?</p>
       
        <select name="tracks" id="track_number">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
        <input value="submit" name="F_submit" type="button">
            <ul id="track_listing">
            </ul>
  <!--</form>-->
    </div>
    
   
    
</div>


</body></html>