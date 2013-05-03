<!DOCTYPE html>
<html><head>
<!--<link rel="stylesheet" href="color_scheme_2.css" type="text/css">--><title>Righteous Inc's Admin Page</title>



    
    
    <script type="text/javascript" src="p_loader.js"></script>
    <script type="text/javascript" src="cat_calls.js"></script>
    <script type="text/javascript" src="SWFUploadv2.2/SWFUpload v2.2.0.1 Core/swfupload.js"></script>
    <link rel="stylesheet" href="color_scheme_2.css" type="text/css">
    <link rel="stylesheet" href="fileuploader.css" type="text/css">
        
        <!--
        <script type="text/javascript">
            function fileQueued(file) {
    $('filename-text').setValue(file.name);
}
function uploadFile(form, e) {
    try {
        swfu.startUpload();
    } catch (ex) {
    }
    return false;
}

function uploadProgress(file, bytesLoaded, bytesTotal) {
    try {
        var percent = Math.ceil((bytesLoaded / bytesTotal) * 100);
        $('upload-progressbar-container').setStyle({display:'block'});
        $('upload-progressbar').setStyle({width:percent+'%'});
    } catch (e) {
    }
}

function uploadError(file, errorCode, message) {
}

function uploadSuccess(file, serverData, receivedResponse) {
    try {
        if (serverData === " ") {
            this.customSettings.upload_successful = false;
        } else {
            this.customSettings.upload_successful = true;
            $('hidFileID').setValue(serverData);
        }
    } catch (e) {
    }
}

function uploadComplete(file) {
    try {
        if (this.customSettings.upload_successful) {
            var form = $('create-file');
            submitForm(form); // Not described here.
            // The above function is not described here.
            // It is a function that receives a form element as input
            // and constructs POST data from all the user input found on that form.
            // It then submit that data via AJAX and calls fileUploaded();
        } else {
            alert('There was a problem with the upload.');
        }
    } catch (e) {
    }
}

function fileUploaded(json) {
    alert(json.message);
    if (json.status == 1) {
        window.location = 'upload_successful.php';
    } else {
        form.setAttribute('onsubmit','submitForm(this);return false;');
    }
}
        </script>
        -->
        
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
            <li><a herf="#">Media</a></li>
            <li><a herf="#">Logout</a></li>


        </ul>

<div id="wrapper">
 
  
    <div id="artists">
        <form action="edit_page.php" method="post">
        <select name="new_or_edit" id="artists">
            <option selected="selected">Edit</option>
            <option>New</option>
        </select>
     <input type="file">
     <input name="artists_name" value="name" type="text">
     <textarea>    </textarea>
     <p>How many tracks?</p>
        <select name="a_tracks" id="a_track_number">
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
        <input value="submit" name="a_submit" type="button">
        
        <ul id="a_track_listing">
        </ul>
        </form>
    </div>
    
 
    
</div>


</body></html>