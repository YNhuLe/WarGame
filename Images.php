<!DOCTYPE html>
<?php
require 'connnetion.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $dbC = dbConnectDB($hostname,$username, $password );
        images($dbC);
        
        ?>
        <?php
        echo ("<h1>DB Connection Demo</h1>");
        function dbConnectDB($htsname, $uname, $pswd){
        try {
            $dbConn = new PDO("mysql:host=localhost;dbname=lenhuy_Assignment4", "lenhuy_lenhuy", "KXv4wu&dSUa");
            echo "connection successfull what doing";
        return $dbConn;
            } catch (PDOException $ex) {
            echo "Error connection not established: " . $ex->getMessage();// use the -> to acces to method
        }
        echo("try and catch");}
        
              
              function images($dbConn){

            $q1="SELECT A.fileName, B.name FROM image A, holiday B WHERE A.holidayId = B.id";
                $stmt=$dbConn->prepare($q1);
                $result=$stmt->execute();

      echo($result);


      if($result){

          while($row=$stmt->fetch()){
              echo("<br>");

              echo ("<img src = $row[fileName] width=100 height=100><br>");
              echo ("<br> name is ".$row[name]);
        }
       
          }
      }
        ?>
    </body>
</html>
