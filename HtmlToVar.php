<?php

abstract class HtmlToVar {
    
    public static function load($url){
        $html = file_get_html($url);
        return $html;
    }
    
}
?>