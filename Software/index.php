<?php
//Añadir Librerias (SQL)
require_once "models/academico.php";
require_once "models/enlaces.php";
require_once "models/crud.php";
require_once "controllers/controller.php";
//Iniciar el Controlador
$mvc = new MvcController();
//Comenzar el Template (Index)
$mvc -> pagina();
?>