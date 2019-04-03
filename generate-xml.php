<?php 

function randomGen2($min, $max, $quantity) {
  $myfile = fopen("gallery.xml", "w") or die("Unable to open file!");
  
  $randomdir = dir('gallery');
  $count = 1;
  $pattern="/(_th)/";
  while($file = $randomdir->read()) {
    $thumb =pathinfo($file, PATHINFO_BASENAME);
    if (preg_match($pattern, $thumb)) {
    $imagearray[$count] = $file;
    $count++;
    }
  }
  // echo '$imagearray[1] value: '.$imagearray[1].'<br>';
  // echo '$imagearray[1] type is: '.gettype($imagearray[1]).'<br><br>';

  $numbers = range($min, $max);
  shuffle($numbers);
  fwrite($myfile, '<?xml version="1.0"?>'."\n");
  fwrite($myfile, '<gallery>'."\n");
  for ($x=0; $x<=$quantity; $x++) {
    // echo '$numbers[$x]: '.$numbers[$x].'<br>';
    $random=$numbers[$x];
    // echo '$random: '.$random.'<br>';
    // echo '$imagearray[$numbers[$x]]: '.$imagearray[$numbers[$x]].'<br><br>';
    // echo '$imagearray[$random]: '.$imagearray[$random].'<br>';
    $filebase=$imagearray[$random];
    $thumb_file_end = array("_th.jpg");
    $filebase = str_replace($thumb_file_end, "", $filebase);
    // echo '$filebase: '.$filebase.'<br>';
    fwrite($myfile, '<media>'."\n".'<fullsize>gallery/'.$filebase.'.jpg</fullsize>'."\n".'<thumbnail>gallery/'.$filebase.'_th.jpg</thumbnail>'."\n".'</media>'."\n");
  }
  fwrite($myfile, '</gallery>');
  fclose($myfile);
  return array_slice($numbers, 0, $quantity);
}

randomGen2(1,57,29);

?>







