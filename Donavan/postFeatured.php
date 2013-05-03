<?php

/*Dom controllers*/
$dom = new DOMDocument();
$dom->loadHTMLFile('index.html');
$xp = new DOMXPath($dom);

$old = $xp->query("//div[@id='featured']")->item(0);
var_dump($old);

/* Dem POST vars used by dat Ajax mah ziggen, yeah boi*/
if (isset($_POST['Text'])){
    $text = trim($_POST['Text']);
}
var_dump($_POST['Text']);
$tab = "\n";
$frags = explode($tab, $text);
$i = count($frags);
$b = 0;
//See all this shit, correct it tomorrow. Hint: YOU DON'T FUCKING NEED TO CREATE OPENING AND CLOSING P TAGS THE DOM DOES THAT FOR YOU MORON!

$p = $dom->createElement('div');
$pattr = $dom->createAttribute('id');
$pattr->value = 'contact_us';
$p->appendChild($pattr);
while($b < $i){



$new = $dom->createElement('p', $frags[$b]);
$p->appendChild($new);
$b++;
}

$old->parentNode->replaceChild($p, $old);



echo 1;
$dom->saveHTMLFile('index.html');


?>