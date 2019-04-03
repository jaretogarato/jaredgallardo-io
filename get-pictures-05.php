<?php 

function randomGen2($min, $max, $quantity) {
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
  echo '<?xml version="1.0"?>'."\n";
  echo '<gallery>'."\n";
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
    echo '<media><fullsize>'.$filebase.'.jpg</fullsize><thumbnail>'.$filebase.'._th.jpg</thumbnail></media>';
  }
  echo '</gallery>'."\n";
  return array_slice($numbers, 0, $quantity);
}

// print_r(randomGen2(0,50,20)); //generates 20 unique random numbers
randomGen2(1,58,30); //generates unique random numbers

//for ($x=0; $x<=20; $x++) {
//  $random=$numbers[$x];
//  echo $imagearray[$random].'<br>';
//  echo 'Random= '.$random;
//}
?>








