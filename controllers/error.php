<?php

class Errors extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Generic Error ";
        $this->view->render('error/index');
        // echo "<p>Error al cargar recurso</p>";
    }
}
