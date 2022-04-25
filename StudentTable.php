<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        try {
  $dbConn = new PDO("mysql:host=localhost;dbname=lenhuy_Assignment4", "lenhuy_lenhuy", "KXv4wu&dSUa");
            echo "connection successfull what doing";
        } catch (PDOException $ex) {
            echo "Error connection not established: " . $ex->getMessage();// use the -> to acces to method
        }
        
        
        
        
        ?>
        
        
        
    </body>
</html>
