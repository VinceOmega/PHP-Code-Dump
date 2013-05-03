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
 
    
    
    <div id="rss_feed">
        <p>This is your rss feed, enter what the subject of the feed will be,
        the link to that item and a short description of what you
        want to explain about it before they go to the link.    
        </p>
        <form action="rss_feed_action_php" method="post">
            Subject
            <input name="rss_subject" type="text" size="200" maxlength="200"/>
            Link
            <input name="rss_link" type="text" size="255" maxlength="255"/>
            Description
            <textarea name="rss_description">
                
            </textarea>
            <input name="rss_submit" type="submit" value="Enter"/>
        </form>
        
        
    </div>
    
</div>


</body></html>