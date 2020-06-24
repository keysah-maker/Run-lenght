<?php
function encode($str)
{
    $errormsg = "$$$";
    if (!$str) {
        return '';
    }

    $output = '';
    $tmp = $letter = null;
    $cnt = 1;

    foreach (str_split($str) as $letter) {
        if ($letter === $tmp) {
            $cnt++;
        } else {
            if ($cnt > 1) {
                $output .= $cnt;
            }
            $output .= $tmp;
            $cnt = 1;
        }
        $tmp = $letter;
    }

    if ($cnt > 1) {
        $output .= $cnt;
    }
    $output .= $letter;
    else {
        print $errormsg;
    }

    return $output;
}
?>