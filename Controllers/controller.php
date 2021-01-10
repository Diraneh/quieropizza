<?php
require('Model/model.php');


function produc()
{
    $tableproduct = new product();
    $tableproduct = $tableproduct->tableproductos();
    require('views/home.php');
}