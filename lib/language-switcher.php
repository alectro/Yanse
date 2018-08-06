<?php

/*
    active:           This is the currently active language (exactly one language is active)
    native_name:      The native name of the language (never translated)
    translated_name:  The name of the language translated to the currently active language
    country_flag_url: The URL to a PNG image with the country flag
*/



function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo ' | <a href="'.$l['url'].'"><span>' . $l['native_name'] . '</span></a>';

        }
    }
}



?>
