<?php
/*Dom vars*/
$x = new DOMImplementation;

$dom->encoding = "UTF-8";

//Find a way to insert dtd into post xml, or just abandon and use schema.

$previous_value = libxml_use_internal_errors(TRUE);
$dom->load('music/m_playlist.xml');
libxml_clear_errors();
libxml_use_internal_errors($previous_value);
$dom->formatOutput = true;
$dom->validateOnParse = true;
$dom->preserveWhiteSpace;
$xp = new DOMXPath($dom);

$playlist = $dom->getElementsByTagName('playlist');
$playlistxp = $xp->query("//playlist")->item(0);
$trackList = $dom->getElementsByTagName('trackList');
$trackList = $xp->query("//trackList")->item(0);
$track = $dom->getElementsByTagName('track');
$location = $dom->getElementsByTagname('location');
$image = $dom->getElementsByTagName('image');
$annotation = $dome->getElementByTagName('annotation')
$music_file = "";
$music_name = "";
$music_album_name = "";
$music_image = "";
$annotationT = "";



if (isset($_POST['music_file']) && isset($_POST['music_name']))  && isset($_POST['annotation']))){
//Do Nothing
}

$music_file = trim($_POST['music_file']);
$music_name = trim($_POST['music_name']);
//$music_image = trim($_POST['music_image']);
$annotationT = trim($_POST['annotation']);
$p = 0;
    
if ($trackListxp == null){
    $trackListC = $dom->createElement('trackList');
}

else {
    $trackListC = $trackListxp;
    
}
for($p = 0; $p < sizeof($music_file); $p++){
    
    $trackC = $dom->createElement('track');
    $locationC = $dom->createElement('location', $music_file);
    $imageC = $dom->createElement('image');
    $annotationC = $dom->createElement('annotation', $music_name);
    $trackC->appendChild($locationC);
    $trackC->appendChild($imageC);
    $trackC->appendChild($annotationC);
    $trackListC->appendChild($trackC);

}

if ($playlistxp == null){
    $playlistC = $dom->createElement('playlist');
    $playlistattr = $dom->createAttribute('version', '0');
    $playlistattr_ns = $dom->createAttribue('xmlns', 'http://xspf.org/ns/0/');
    $playlistC->appendChild($playlistattr);
    $playlistC->appendChild($playlistattr_ns);
    $playlistC->appendChild($trackListC);
    $dom->appendChild($logC);
}

else{
//$dom->formatOutput = true;
//$dom->validateOnParse = true;
//$dom->preserveWhiteSpace;
$playlistxp->appendChild($trackListC);


}



$dom->save('music/m_playlist.xml');

?>