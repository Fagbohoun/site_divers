<?php
try
{
    $connect_db =new PDO ('mysql:host=localhost; dbname=commerciale_db', 'root', 'root');
       $connect_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOEXECEPTION $e) {
    die( "base de donnée non connectée:" .$e->getMessage() );
}

?>