 <?php
 
 include 'loadpictures.php';
 include 'loadvidoes.php';
 include 'loadmusic.php';
 
 
 class domHelper{
    
    public function picLoader4Featured(){
 $dom = new DOMDocument();
$dom->loadHTMLFile('featured.php');
$xp = new DOMXPath($dom);
$query = $xp->query("//div[@id='load_pictures']")->item(0);


$parent = $query->parentNode;
$newspan = $dom->createElement('span');
$spanattr = $dom->createAttribute('id');
$spanattr->value = 'load_pictures';
$newspan->appendChild($homeattr);

picsLoad();
json_decode($videos);
    $i = 0;
    while($i != (sizeof($videos) - 1)){
        $radio = $dom->createElement('input', $videos[$i]);
        $radioattr = $dom->createAttribute('type', 'radio');
        $radioattr = $dom->createAttribute('value', $videos[$i]);
        $radio->appendChild($radioattr);
        $newspan->appendChild($radio)
        $i+;
        
    }
    
   $parent->replaceChild($newspan, $query);
   $dom2->saveHTMLFile('featured.php');


    }
    
    public function editHome4Featured(){
 
 }
 
 }
 
 
 ?>