<?php
$dom = new DOMDocument();
$dom->load('post.xml');
$xp = new DOMXPath($dom);
$i = 0;
$entry = $dom->getElementsByTagName('entry');
$br = $dom->getElementsByTagName('br');
$query = $xp->query("//entry");
$query2 = $xp->query("//log");
$child = $query2->item(0);
$parent = $child->parentNode;

$entryLength = $query->length;
$clones = $parent->cloneNode(true);
$nodearray = array();
$linkvalue = array();
$titlevalue = array();

foreach($query as $queries){
foreach($queries->childNodes as $node){
    

    if($node->nodeName == 'date'){
    $date = $node->nodeValue;
    echo "Date:".$date;
   $nodestr = "Date: ".$date."\n";
    }
    
    if($node->nodeName == 'para'){
      $para = $node->nodeValue;
       echo "Para:".$para;
      $nodestr .= $para."\n";
    }
    
    if($node->nodeName == 'title'){
        $title = $node->nodeValue;
        echo "Title: ".$title;
        $nodestr.= $title."\n";
        $titlevalue[] = $title;
    }
    
    if($node->nodeName == 'link'){

         $link = $node->nodeValue;
       echo "Link:".$link;
       $nodestr .= "Permalink: ".$link;
       $linkarray[] = $link;
       $nodearray[] = $nodestr;
       
    
         }
    
    }
   
    
}


$dom2 = new DOMDocument();
$dom2->loadHTMLFile('index.html');
$dom2->importNode($dom->getElementsByTagName('log')->item(0), true);
$xp2 = new DOMXPath($dom2);
$query3 = $xp2->query("//div[@id='sidebar']")->item(0);
$query4 = $xp2->query("//div[@id='home']")->item(0);
$oldhome = $query4->parentNode;

$parent2 = $query3->parentNode;
$newhome = $dom2->createElement('div');
$homeattr = $dom2->createAttribute('id');
$homeattr->value = 'home';
$newhome->appendChild($homeattr);

while($i < sizeof($nodearray)){
echo $nodearray[$i];
$i++;
}
$j = sizeof($nodearray);
$i = sizeof($nodearray)-1;
$l = sizeof($titlevalue)-1;
$counter = 0;
//This part is pretty compliacted so comments are going to be used
while($j > 0){
        //Ayo my man, this shit right har goes through the "node" (string values from the last dom) array and splits them up.
        global $i, $j, $l;
        $k = 0;
        $holder = explode("\n", $nodearray[$i]);
        //Yo booiiiiii, this shit right har makes a fucking span majiggy thing and and makes it a holder for each post from the xml dawg.
        $span = $dom2->createElement('span');
        $spanattr = $dom2->createAttribute('class');
        $spanattr->value = 'post';
        $span->appendChild($spanattr);
        $permadiv = $dom2->createElement('div');
        $permadivattr = $dom2->createAttribute('id');
        $permadivattr->value = 'sidebar';
        $permadiv->appendChild($permadivattr);
        $sidebarul = $dom2->createElement('ul');
        $permadiv->appendChild($sidebarul);
        
        
        //This is where the thing gets all complicated like a blat blat from a nina son
        //Ayo, the while loops repeats like a mother while using them if switches to determine the attribute to the p tag
    if($counter < 10){
        while($k < sizeof($holder)){
        
        
                
                if(substr_compare($holder[$k], "Date", 0, sizeof($holder[$k])) == 0){
                $appendage = $dom2->createElement('p', $holder[$k]);
                $appendattr = $dom2->createAttribute('class');
                $appendattr->value = 'date';
                $appendage->appendChild($appendattr);
                $span->appendChild($appendage);
                //$k++;
                }
                
                elseif(substr_compare($holder[$k], "Permalink", 0, sizeof($holder[$k])) == 0){
                $linknum = $linkarray[$l];
                $appendage = $dom2->createElement('a', $holder[$k]);
                $appendattr = $dom2->createAttribute('class');
                $appendattr->value = 'permalink';
                $appendage->appendChild($appendattr);
                $appendattr = $dom2->createAttribute('name');
                $appendattr->value = $linknum;
                $appendage->appendChild($appendattr);
                $appendattr = $dom2->createAttribute('href');
                $appendattr->value = "#".$linknum;
                $appendage->appendChild($appendattr);
                $span->appendChild($appendage);
                $l--;
                //$k++;
                }
                
                else{
                
                $appendage = $dom2->createElement('p', $holder[$k]);
                $appendattr = $dom2->createAttribute('class');
                $appendattr->value = 'body';
                $appendage->appendChild($appendattr);
                $span->appendChild($appendage);
                //$k++;
                     }
      
         $newhome->appendChild($span);
          $k++; //increments the while loop
            }
     
            
        }
        
         elseif($counter >= 10){
           
                $linknum = $linkarray[$i];
                $titlelabel = $titlevalue[$i];
                
               
                $sidebarli = $dom2->createElement('li');
                $sidebarlink = $dom2->createElement('a', $titlelabel);
                $sblattr = $dom2->createAttribute('name');
                $sblattr->value = $linknum;
                $sblattr2 = $dom2->createAttribute('href');
                $sblattr2->value = "#".$linknum;
                $sblattr3 = $dom2->createAttribute('class');
                $sblattr3->value = "Permalink";
                $sidebarlink->appendChild($sblattr);
                $sidebarlink->appendChild($sblattr2);
                $sidebarlink->appendChild($sblattr3);
                $sidebarli->appendChild($sidebarlink);
                $sidebarul->appendChild($sidebarli);
                
                echo $linknum;
                echo $titlelabel;
                $l--;
            
                
         }  
                //$k++;
                
            
       
       
    //Adds the span for the post
        
        $i--; //decreases the array for the node array
        $j--; //decreases j until it is 0
        $counter++; //keeps track of the number of the post
    }
    
    $query3->parentNode->replaceChild($permadiv , $query3);
   $oldhome->replaceChild($newhome, $query4);
    echo 1;
   $dom2->saveHTMLFile('index.html');


?>