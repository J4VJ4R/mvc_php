<?php

class View
{
    function __construct()
    {
        echo "<p>base view</p>";
    }

    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }
}
