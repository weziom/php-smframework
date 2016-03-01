<?php

/**
 * Created by Lee Cook.
 * User: Dev
 * Date: 01/03/2016
 * Time: 21:00
 */

function GetAppName() {
    echo APP_NAME;
}

function GetAppAuthor() {
    echo APP_AUTHOR;
}

function cleanInput($input) {
    $search = array(
        '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );

    $output = preg_replace($search, '', $input);
    return $output;
}