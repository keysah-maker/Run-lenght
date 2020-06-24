<?php

require "rle.php";

echo "\n\n===Test encode_rle===\n\n";
echo encode_rle("AAABBBBCC");
echo "\n";
//d'autres tests ici


echo "\n\n===Test decode_rle===\n\n";
echo decode_rle("3A4B2C");
echo "\n";
//d'autres tests ici

?>