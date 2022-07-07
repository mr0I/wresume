<?php


function clearInputs($input)
{
    $input = preg_replace('/ك/i' , 'ک',$input);
    $input = preg_replace('/ة/i' , 'ه',$input);
    $input = preg_replace('/ؤ/i' , 'و',$input);
    $input = preg_replace('/ي|ئ|ء/i' , 'ی',$input);

    return trim(htmlentities(addslashes($input)));
}

function getSiteUrl()
{
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
        //$_SERVER['REQUEST_URI']
    );
}