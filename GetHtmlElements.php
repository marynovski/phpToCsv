<?php


abstract class GetHtmlElements {

    public static function makeTable($url){
        $html = HtmlToVar::load($url);
        $count = 1;
        echo '<table class="html-elements-table"><tr><td>Nr</td><td>H3 Inner Text</td></tr>';
            foreach($html->find('h3.industry-name') as $element){
                echo '<tr><td>';
                echo $count;
                echo '</td><td>';
                echo $element->innertext;
                echo '</td></tr>';
                $count++;
            }
        echo '</table>';
    }
    
}
