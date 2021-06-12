<?php

if(!function_exists('moldingJson')){
     function moldingJson($filename) {
             return  json_decode( file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.$filename ), true );
        }
}
