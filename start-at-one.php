<?php

// start the array at [1] instead of [0]
function start_at_one($array){
  array_unshift($array,'');
  unset($array[0]);
  return $array;
}
