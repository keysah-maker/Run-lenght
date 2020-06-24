<?php

public static function decode($str)
{
   $decode = '';
   $errormsg = "$$$";

   for ($i = 0, $I = strlen($str); $i < $I; $i += 2) {
        if ($i + 1 < $I && ord($str[$i]) > 0) {
               $decode .= str_repeat($str[$i+1], ord($str[$i]));
        } else {
               $decode .= $str[$i+1];
        }
    }
    return $decode;
}
?>