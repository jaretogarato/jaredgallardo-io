<?php 

$imagesDir = 'gallery';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];

foreach($randomImage as $value){
   print $value."\n";
}

$arr = array(1,2,3,4,5,6,7,8,9); 
foreach($arr as $key=>$value)
{
    unset($arr[$key + 1]);
    echo $value . PHP_EOL;
} 
foreach($images as $key=>$value)
{
    unset($images[$key + 1]);
    echo $value . PHP_EOL;
} 

?>