<?php 

// shitty random function
//for ($x=0; $x<=30; $x++) {
//  $random = mt_rand(1, $count - 1); 
  // echo '<img src="gallery/'.$imagearray[$random].'" alt="" />';
//  echo $imagearray[$random].'<br>';
//}



// piecing them together
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
  for ($x=0; $x<=$quantity; $x++) {
    // echo '$numbers[$x]: '.$numbers[$x].'<br>';
    $random=$numbers[$x];
    // echo '$random type is: '.gettype($random).'<br>';
    // echo '$random: '.$random.'<br>';
    // echo '$imagearray[$numbers[$x]]: '.$imagearray[$numbers[$x]].'<br><br>';
    echo '$imagearray[$random]: '.$imagearray[$random].'<br>';
  }
  return array_slice($numbers, 0, $quantity);
}

// print_r(randomGen2(0,50,20)); //generates 20 unique random numbers
randomGen2(1,58,20); //generates 20 unique random numbers

//for ($x=0; $x<=20; $x++) {
//  $random=$numbers[$x];
//  echo $imagearray[$random].'<br>';
//  echo 'Random= '.$random;
//}
?>








