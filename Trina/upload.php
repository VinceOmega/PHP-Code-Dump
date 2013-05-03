<?php
/*Uploading script.*/
if(isset($POST['Video1']) && isset($POST['Video2']) && isset($POST['Video3']) && isset($POST['Video4']) && isset($POST['Video5'])){
    //Do nothing
}
$tracks = $POST['Num'];
$varnum = array();
while($tracks > 0){
    $varnum[]= $FILES['Video_'.$tracks]['name']; 
    $tracks--;
    
}

/*Sort it into a certain directory*/
$a = sizeof($varnum);
$videos= "vidoes";
    while($a > 0){
$videos= $videos.basename($varnum[$a]);
    $a--;
    }
?>