<?php

function debug($variavel)
{
    echo "<pre>";
    print_r($variavel);
    echo "</pre>";
}

function debugDump($variavel)
{
    echo "<pre>";
    var_dump($variavel);
    echo "</pre>";
}