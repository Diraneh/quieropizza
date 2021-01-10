<?php
require_once('public/connect.php');


class product extends Databases{

    public function tableproductos(){
        $product = $this->connect()->prepare('SELECT * FROM productos');
        $product->execute();
        $result = $product->fetchALL(PDO::FETCH_ASSOC);
        return $result;
     }


    }