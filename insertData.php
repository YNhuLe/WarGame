

<?php
require 'connnetion.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>INSERT DATA </title>
    </head>
    <body>
        
        
   
      //  $StudentArray=array(911652865,"NhuY","Le","Listening to music","Mississauga",
         //   909341908, "Trafalgar","WEb development");
        
  
        <?php
        $dbC = connectDB($hostname, $username, $password);
        $array1=array(0,"John","Lim","Running","NY",999,"Mississauga","math");
        insertData($dbC,$array1);

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
        
        function insertData($dbC,$array1){
             $query ="INSERT INTO Assignment4(Student_id,FirstName,LastName,InAndHo,City,PhoneNo,Campus,Course) Values(?,?,?,?,?,?,?,?)";
            
             echo($query);
            // $stmt=$dbConn->prepare($query);
            $stmt=$dbC->prepare($query);
            $result=$stmt->execute($array1);
             if($result){
                 
                 echo ("<br>Insert was successfull");
             }else{
                 
                 echo ("<br>Insert was not successfull");
             }
            
        }
        ?>
    </body>
</html>
