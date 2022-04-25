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
        $dbC = connectDB($hostname, $username, $password);
        //deleteData($dbC, $ID);
       deleteData($dbC, 1)
       ?>
        
        <?php
       function connectDB($htsname, $uname, $pswd){
            
           try {

            $dbConn = new PDO($htsname, $uname, $pswd);
            echo "connection successfull!!!!";
            return $dbConn;
        } catch (PDOException $ex) {
            echo "Error connection not established: " . $ex->getMessage();// use the -> to acces to method
        }
       
        }//ENd of connecDb
        
        function deleteData($dbC,$ID){
            $query = "DELETE FROM Assignment4 WHERE Student_id =".$ID;
             
          /*  $query ="UPDATE Assignment4 SET FirstName = Le"
                    . "  WHERE Student_id= 1" ;*/
             echo($query);
            // $stmt=$dbConn->prepare($query);
            $stmt=$dbC->prepare($query);
             $result=$stmt->execute();
             if($result){
                 
                 echo ("<br>Delete was successfull");
             }else{
                 
                 echo ("<br>Delete was not successfull");
             }
            
        }
        ?>
    </body>
</html>
