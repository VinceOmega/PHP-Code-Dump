<?php

$dom = new DOMDocument();
$dom->loadHTMLFile('index.html');
$xp = new DOMXPath($dom);
$i = 10;
$count = 0;
$br = $dom->getElementsByTagName('br');
$query = $xp->query("//div[@id='home']");
$query2 = $xp->query("//div[@id='home']/span");

$nodearray = array();
$linkvalue = array();
$postid = array();

foreach($query as $queries){
foreach($queries->childNodes as $node){
    

    if($node->nodeName == 'span'){
        $count++;
        if($count > $i){
            $diff = ($i - $count);
            $g = 0;
            while($g < $diff){
                foreach($query2 as $queries2){
                    foreach($queries2->childNodes as $node2){
                                     if($node2->nodeName == 'a'){
                           $postid[] =  $node2->attributes->getNamedItem("href")->nodeValue;
                                       
                               
                                    }
                    
                            }
                    }
            $dom->removeChild($query2->item($g));
            $g++;
            }
        }
   
        }
    
    }
   
    
}
$i = 0;
while(sizeof($postid) > $i){
echo json_encode($postid[$i]);
$dom->saveHTMLFile('index.html');
$i++;
}
?>