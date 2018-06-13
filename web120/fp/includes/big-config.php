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
        $title = "Xing Li: Web Dev Examples";break;
        $logo = 'fa-home';
        $PageID = 'Sample Client Form';
        break;
        
    case 'flexbox.php':
        $title = "Xing Li's Flexbox Research";
        $logo = "fa-th-large";
        $PageID = "Flexbox Research";
        break;
       
    case 'galleries.php':
        $title = "Xing Li's Galleries Research";
        $logo = "fa-file-image-o";
        $PageID = "Galleries Research";
        break;
    
    case 'map.php':
        $title = "Xing Li's Google Map";
        $logo = "fa-map-o";
        $PageID = "Where in the world is Zack";
        break;
    
    case 'youtube.php':
        $title = "Xing Li's WordPress VS Joomla";
        $logo = "fa-youtube";
        $PageID = 'CMS';
        break;
        
    case 'calendar.php':
        $title = "Xing Li's Event Calendar";
        $logo = 'fa-calendar';
        $PageID = "Zack's Event Calendar";
        break;
        
    case 'parallax.php':
        $title = "Xing Li's Parallax Research";
        $logo = 'fa-window-restore';
        $PageID = "Parallax research";
        break;
    
    case 'shoppingcarts.php':
        $title = "Xing Li's Shopping Cart Research";
        $logo = 'fa-shopping-cart';
        $PageID = "Shopping Cart Research";
        break;
   
     case 'siteapp.php':
        $title = "Xing Li's Responsive Website V.S. Native Mobile APP";
        $logo = 'fa-mobile';
        $PageID = "Responsive Website V.S. Native Mobile APP Research";
        break;
        
     case 'webcam.php':
        $title = "Xing Li's two examples of web cams";
        $logo = 'fa-video-camera';
        $PageID = "Two examples of web cams";
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
