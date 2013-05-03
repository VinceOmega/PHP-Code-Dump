<?php


 $dom = new DOMDocument;
 $dom->loadHTMLFile('index.html');
 $id = $dom->getElementById('videos');
 $n = 1;



    /* Loop through the directory and get vidoes*/
function videosLoad(){

    if ($handle = opendir('videos')) {
global $dom, $id, $n;
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        /*Video tag*/
$video = $dom->createElement('video');
$vattr = $dom->createAttribute('id');
$vattr->value = $entry.$n;
$video->appendChild($vattr);
$vattr= $dom->createAttribute('class');
$vattr->value = 'video-js vjs-default-skin';
$video->appendChild($vattr);
$vattr = $dom->createAttribute('controls');
$video->appendChild($vattr);
$vattr = $dom->createAttribute('preload');
$vattr->value = 'auto';
$video->appendChild($vattr);
$vattr = $dom->createAttribute('width');
$vattr->value='640';
$video->appendChild($vattr);
$vattr = $dom->createAttribute('height');
$vattr->value='264';
$video->appendChild($vattr);
$vattr = $dom->createAttribute('data-setup');
$vattr->value = "{ 'controls': true, 'autoplay':false, 'prelaod': 'auto'}";
$video->appendChild($vattr);
/*source tags*/
$source =  $dom->createElement('source');
$sattr = $dom->createAttribute('src');
$sattr->value= $entry;
$source->appendChild($sattr);
$sattr = $dom->createAttribute('type');
$sattr->value= 'video/mp4';
$source->appendChild($sattr);
/*script tags:: May not need it
$script = $dom->createElement('script');
$script->createAtrribute('type');
$script->value = "text/javascript";
$script->appendChild("var vObj =
document.getElementById("example_video_"'.$n');
document.getElementById("vidoes").appenedChild(vObj);");
*/
$video->appendChild($source);
$id->appendChild($video);
$dom->saveHTML();
//echo '<script> document.appendChild($id);</script>';



  

 /* echo $entry;*/
/*echo '<video id="example_video_" class="video-js vjs-default-skin" controls preload="auto" width="640" height="264" data-setup="{}"> <source src="$entry" type="video/mp4"/> </video>';
  <script type="text/javascript">
        var vObj = document.getElementById("example_video_".$n);
        document.getElementById("vidoes").appenedChild(vObj);
 </script>';
 */
    }

    /* This is the WRONG way to loop over the directory.
    while ($entry = readdir($handle)) {
        echo "$entry\n";
    }
 */
    closedir($handle);
    }
}    

videosLoad();
echo "1";
 /*Use Video.js as a the containter for the video*/
 
 
?>