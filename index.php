<?php

    echo 'PHP_SELF: ' .$_SERVER['PHP_SELF'];
    echo "<br>";
    echo 'SERVER_NAME: ' .$_SERVER['SERVER_NAME'];
    echo "<br>";
    echo 'HTTP_HOST: ' .$_SERVER['HTTP_HOST'];
    echo "<br>";
    echo 'HTTP_REFERER: ' .$_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo 'HTTP_USER_AGENT: ' .$_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo 'SCRIPT_NAME: ' .$_SERVER['SCRIPT_NAME'];
    echo "<br>";

    $domain     = $_SERVER['HTTP_HOST'];
    echo $domain;

/*
    header('Content-language: en-US');
    date_default_timezone_set('Asia/Kolkata');

    session_start();
    $domain     = $_SERVER['HTTP_HOST'];
    $SessionID  = strtoupper(session_id());
    $RequestURL = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    echo $domain;
    echo "<br>";
    echo $SessionID;
    echo "<br>";
    echo $RequestURL;
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
*/
?>
