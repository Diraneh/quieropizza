<?php
require('Model/model.php');


function testView()
{
    require('views/Acceuil.php');
}


function produc()
{
    $tableproduct = new product();
    $tableproduct = $tableproduct->tableproductos();
    require('views/Acceuil.php');
}