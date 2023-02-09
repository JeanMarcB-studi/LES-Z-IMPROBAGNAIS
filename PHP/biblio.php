<?php

// CONSTANT
define('PATH_CAROUSEL','IMG/carroussel');


//SHOW IMAGES FOR CAROUSEL
function imagesCarousel(){
  $imgs = scandir ('./'.PATH_CAROUSEL);
  $li = '';
    foreach ($imgs as $img){
      if (!is_dir($img)){
        //echo "image : $img"."<br>";
        if ($li ===''){
          $li = "<div class='carousel-item active'>\n";
        } else
        {
          $li.= "<div class='carousel-item'>\n";
        }
        $li.= "\t<img src='".PATH_CAROUSEL."/$img' class='d-block w-100' alt='photo spectacle théâtre Jean-Marc Boutaud'>\n";
        $li.= "</div>\n";

        //echo "<xmp>".$li."</xmp><br>"; 
      }
    }
    return($li);
}

