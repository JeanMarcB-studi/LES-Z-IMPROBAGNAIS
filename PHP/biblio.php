<?php

declare (strict_types = 1); // oblige à respecter type/ funct

// CONSTANT
const BR = '<br>';
const PATH_CAROUSEL = './IMG/carroussel/';
const PATH_POSTERS = './IMG/posters/';
const MOIS = ["ERR","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];

// CONVERT 'YYYY-MM-DD' into French Date
function cvDateFr(string $dateEN): string
{
  $t1 = strpos($dateEN, "-");
  if ($t1)
  {
    $t2 = strpos($dateEN, "-", $t1 + 1);
    $t3 = strlen($dateEN);
    $d = (int)substr($dateEN, $t2 + 1, $t3 -$t2+1);
    $m = (int)substr($dateEN, $t1 + 1, $t2 - $t1);
    $a = substr($dateEN, 0, $t1);
    $dateFR = "$d ".MOIS[$m]." $a";
    return $dateFR;
  }
  return '';
}


//SHOW IMAGES FOR CAROUSEL
function imagesCarousel(){
  $imgs = scandir (PATH_CAROUSEL);
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
        $li.= "\t<img src='".PATH_CAROUSEL."$img' class='d-block w-100' alt='photo spectacle théâtre Jean-Marc Boutaud'>\n";
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
      $li.= "\t <div class='col-12 col-sm-6 col-xl-4 p-1 myStickers myInnerImg'> \n";
      $li.= "\t\t <a href='IMG/$dir/$img' target='_blank' rel='noopener noreferrer'> \n";
      $li.= "\t\t\t <img src='IMG/$dir/$img' class='w-100' alt='photo spectacle théâtre Jean-Marc Boutaud'> \n";
      $li.= "\t\t </a> \n";
      $li.= "\t </div> \n";
    }
  }
  return($li);
}

//SHOW POSTERS
function imagesPosters(){
  $imgs = scandir (PATH_POSTERS);
  sort($imgs);
  
  $li = '';

  foreach ($imgs as $img){
    if (!is_dir($img)){
      $t = strpos($img, '.');
      // echo "t: $t ".BR;
      if ($t){
        // -------- nouvelle affiche -----------
        $li .= "
        <article class='container-md myWidth my-0'>
          <h2 class ='h1'>Nouveau, à l'affiche :</h2>
        </article>
        ";

        $myPoster = PATH_POSTERS.$img;
        $myDate = cvDateFr(substr($img , 0, $t));
        $li .= "
        <article class='container-md my-5 w-75 text-md-center'>
          <h2 class='myYellow'>$myDate</h2>
          <h3>Aubagne - Cercle de l'Harmonie</h3>
          <div class='container-md my-4 myWidthSmall'>
            <img src='$myPoster' alt='Affiche du prochain spectacle' class ='w-100' srcset=''>
          </div>
        </article>
        <br>
        ";
      }
    };
  }
  return($li);
}
