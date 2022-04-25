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
     updateInfo($dbC, 0, "Swimming");
        ?>
        
<?php
     function  connectDB($htsname, $uname, $pswd) {

        try {
            $dbConn = new PDO("mysql:host=localhost;dbname=lenhuy_Assignment4", "lenhuy_lenhuy", "KXv4wu&dSUa");
            echo "connection successfull what doing";
            return $dbConn;
        } catch (PDOException $ex) {
            echo "Error connection not established: " . $ex->getMessage();// use the -> to acces to method
        }
}

   
        
         function updateInfo($dbC,$StuId,$inAndHo){
             $query ="UPDATE Assignment4 SET InAndHo =".$inAndHo
                     ."  WHERE Student_id=" .$StuId;// keep space before WHERE
             echo($query);
             $stmt=$dbC->prepare($query);
             $result=$stmt->execute();

             if($result){

                 echo ("<br>Update was successfull");
             }else{

                 echo ("<br>Update was successfull. Congrat!!!!");
             }


         }
         ?> 
    </body>
</html>
