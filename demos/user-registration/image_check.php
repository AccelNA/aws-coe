<?php
/*
 * Get Extenstion 
 */
function getExtension($str) 
    {
            $i = strrpos($str,".");
            if (!$i) { return ""; }
            $l = strlen($str) - $i;
            $ext = substr($str,$i+1,$l);
            return $ext;
    }
    //Here you can add valid file extensions. 
    $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
?>