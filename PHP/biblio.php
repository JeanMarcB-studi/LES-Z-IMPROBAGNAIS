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

//SHOW IMAGES FOR GALERY
function imagesGalery($dir){
$imgs = scandir ("./IMG/$dir");
$li = '';
  foreach ($imgs as $img){
    if (!is_dir($img) && ($img !='POSTER.jpg')){
      $li.= "\t <div class='col-12 col-sm-6 col-xl-3 p-1 myStickers myInnerImg'> \n";
      $li.= "\t\t <a href='IMG/$dir/$img' target='_blank' rel='noopener noreferrer'> \n";
      $li.= "\t\t\t <img src='IMG/$dir/$img' class='w-100' alt='photo spectacle théâtre Jean-Marc Boutaud'> \n";
      $li.= "\t\t </a> \n";
      $li.= "\t </div> \n";
    }
  }
  return($li);
}
