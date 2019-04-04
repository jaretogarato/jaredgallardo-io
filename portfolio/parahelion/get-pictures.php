<?php

function random_pic($dir)
{
 $files = glob($dir . '/*.jpg');
 $rand_keys = array_rand($files, 3);
 return array($files[$rand_keys[0]], $files[$rand_keys[1]], $files[$rand_keys[2]]);
}

function random_pic_02($dir)
{
 $files = glob($dir . '/*.jpg');
 $rand_keys = array_rand($files, 10);
 
 //for ($x=0; $x<=10; $x++) {
  //echo "The number is: $x <br>";
  
  //array($files[$rand_keys[x]]);
  // print_r(array_keys($files[$rand_keys[$x]]));
  
  // $data[$state]['cities'][] = $city;
  // $files[$rand_values][] = $x;
  
  // echo "Loop number: $x <br>";
  // echo array($files[$rand_keys[$x]]);
  //}
  
  // foreach($rand_keys as $value){
  //   print $value."\n";
 //}
 
  //return array($files[$rand_keys[]]);
 return array($files[$rand_keys[0]], $files[$rand_keys[1]], $files[$rand_keys[2]]);
 
}

function make_xml ()
{
  //for ($x=0; $x<=10; $x++) {
  //  echo array($files[$rand_keys[$x]]); 
  //}
  echo "make_xml was called <br>";
  foreach ($rand_keys as $value) {
    echo "Value: $value<br />\n";
  } 
}

// Calling function

list($file_1,$file_2,$file_3)= random_pic_02("gallery");

//for ($x=0; $x<=10; $x++) {
//  list($file.$x)=random_pic_02("gallery");
//  echo $file.$x;
//}

echo 'Getting images:<br />';
echo $file_1 . '<br />';
echo $file_2 . '<br />';
echo $file_3 . '<br />';

make_xml();

  



// echo 'Looping:<br />';
// for ($x=0; $x<=10; $x++) {
//   echo "The number is: $x <br>";
// }



?>