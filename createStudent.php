<?php
    include_once "..\Rest_Server_My\config\database.php";

    $Fname=$_GET['Fname'];
    $Lname=$_GET['Lname'];
    $NameWithInitials=$_GET['NameWithInitials'];
    $NIC=$_GET['NIC'];
    $Address=$_GET['Address'];
    $Phone=$_GET['Phone'];
    $Uni=$_GET['Uni'];
    $StudentNo=$_GET['StudentNo'];
    $Faculty=$_GET['Faculty'];

    //create object of database
    $db = new database();
    $conn = $db->getConnection();

    $statement = $conn->prepare("INSERT INTO studentdata(Fname,Lname,NameWithInitials,NIC,Address,Phone,Uni,StudentNo,Faculty) VALUES (:Fname,:Lname,:NameWithInitials,:NIC,:Address,:Phone,:Uni,:StudentNo,:Faculty)");

    $statement->bindParam(":Fname",$Fname,PDO::PARAM_STR);
    $statement->bindParam(":Lname",$Lname,PDO::PARAM_STR);
    $statement->bindParam(":NameWithInitials",$NameWithInitials,PDO::PARAM_STR);
    $statement->bindParam(":NIC",$NIC,PDO::PARAM_STR);
    $statement->bindParam(":Address",$Address,PDO::PARAM_STR);
    $statement->bindParam(":Phone",$Phone,PDO::PARAM_STR);
    $statement->bindParam(":Uni",$Uni,PDO::PARAM_STR);
    $statement->bindParam(":StudentNo",$StudentNo,PDO::PARAM_STR);
    $statement->bindParam(":Faculty",$Faculty,PDO::PARAM_STR);
    try{
        $statement->execute();
    }
    catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>