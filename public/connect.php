<?php
class Databases
{
    public function connect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=quieropi_quieropizza_limpio;port=3308;charset=utf8', 'root', '');
            return $db;        
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }    
}