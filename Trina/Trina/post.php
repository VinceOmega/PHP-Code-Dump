<?php

/*Dom vars*/
$x = new DOMImplementation;
$dtd = $x->createDocumentType('log', '', 'entry.dtd');
$dom = $x->createDocument("","" , $dtd);

$dom->encoding = "UTF-8";

//Find a way to insert dtd into post xml, or just abandon and use schema.

$previous_value = libxml_use_internal_errors(TRUE);
$dom->load('post.xml');
libxml_clear_errors();
libxml_use_internal_errors($previous_value);
$dom->formatOutput = true;
$dom->validateOnParse = true;
$dom->preserveWhiteSpace;
$xp = new DOMXPath($dom);

$log = $dom->getElementsByTagName('log');
$logxp = $xp->query("//log")->item(0);
$entry = $dom->getElementsByTagName('entry');
$date = $dom->getElementsByTagName('date');
$para = $dom->getElementsByTagname('para');
$link = $dom->getElementsByTagName('link');
$title = "";
$text = "";



/* Dem POST vars used by dat Ajax mah ziggen, yeah boi*/
if (isset($_POST['Text']) && isset($_POST['Title'])){
//Do Nothing
}

$text = trim($_POST['Text']);
$title = trim($_POST['Title']);
/*
function post(){
    global $dom, $entry, $date, $para, $link, 
    $home, $about, $contact, $text;
*/
    
    $entryC = $dom->createElement('entry');
    $dateC = $dom->createElement('date', date("m d, y H:i:s")) ;
    $entryC->appendChild($dateC);
   
   $titleC = $dom->createElement('title', $title);
   $entryC->appendChild($titleC);
   
$tab = "\n";
$frags = explode($tab, $text);
$i = count($frags);
$b = 0;

while($b < $i){

$paraC = $dom->createElement('para', $frags[$b]);
$entryC->appendChild($paraC);
$b++;
}



$linkC = $dom->createElement('link', rand(100000, 999999));
$entryC->appendChild($linkC);

if ($logxp == null){
    $logC = $dom->createElement('log');
    $logC->appendChild($entryC);
    $dom->appendChild($logC);
}

else{
//$dom->formatOutput = true;
//$dom->validateOnParse = true;
//$dom->preserveWhiteSpace;
$logxp->appendChild($entryC);


}



$dom->save('post.xml');

/*}

post();
*/echo 1;

?>