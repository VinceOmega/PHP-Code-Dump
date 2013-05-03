<?php

$videos = array();


    /* Loop through the directory and get vidoes*/
function videosLoad(){
global $videos;
    if ($handle = opendir('pics')) {

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
     
        $videos[] = $entry;

  

      }

    closedir($handle);
    }
    return $videos;
}    

videosLoad();
echo json_encode($videos);
 /*Use Video.js as a the containter for the video*/
 
 
?>