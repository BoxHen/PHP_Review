<?php

function hit_count(){
  $handle = fopen('count.txt', 'r');
  $current = fread($handle, filesize('count.txt'));
  echo $current;
  fclose($handle);

  $current_inc = $current+1;

  $handle = fopen('count.txt', 'w');
  fwrite($handle, $current_inc);
  $current = fread($handle, filesize('count.txt'));
  echo $current;
  fclose($handle);
}
 ?>
