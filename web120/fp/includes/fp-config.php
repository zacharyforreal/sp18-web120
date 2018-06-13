<?php
/*
big-config.php 

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;
/* $siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretkey = "6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv"; */

$siteKey = "6LeTjVoUAAAAADe1BWkfXoGIK9sYluDxIJk4m5k8";
$secretKey = "6LeTjVoUAAAAAIean8d1gfPg0aHn-hitQLidNaQr";

switch(THIS_PAGE){
    case 'index.php':
        $title = "Binyue Haitang Resort";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;
        
    case 'destination.php':
        $title = "Binyue Haitang's Destination";
        $logo = "fa-th-large";
        $PageID = "Destination";
        break;
       
    case 'room.php':
        $title = "Binyue Haitang's Room";
        $logo = "fa-file-image-o";
        $PageID = "Rooms";
        break;
    
    case 'dining.php':
        $title = "Binyue Haitang's Dining";
        $logo = "fa-map-o";
        $PageID = "Dining";
        break;
    
    case 'events.php':
        $title = "Binyue Haitang's Events";
        $logo = "fa-youtube";
        $PageID = 'Events';
        break;
        
    case 'contacts.php':
        $title = "Binyue Haitang's Contacts";
        $logo = 'fa-calendar';
        $PageID = "Any Suggestions?";
        break;
    
    case 'feast.php':
        $title = "Binyue Haitang's Feasts";
        $logo = 'fa-calendar';
        $PageID = "Feasts";
        break;
        
    case 'fruit.php':
        $title = "Binyue Haitang's Fruits";
        $logo = 'fa-calendar';
        $PageID = "Fruit";
        break;
    
    case 'chef.php':
        $title = "Binyue Haitang's Chef's special";
        $logo = 'fa-calendar';
        $PageID = "Chef's Specials";
        break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = '';
}


/* 
here we're creating a function to generate
links and keep the highlight on the current page

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


?>
