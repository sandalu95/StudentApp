<?php 
    // include to connect with DB
   include_once "..\RestServer\config\database.php";

   $StudentNo=$_GET['StudentNo'];

   var_dump($StudentNo);

    $db = new database();
    $conn = $db->getConnection();

    // write the query
    $statement = $conn->prepare("SELECT Fname,Lname,NameWithInitials,NIC,Address,Phone,Uni,Faculty,Image FROM studentdata WHERE StudentNo like :StudentNo");
    $statement->bindParam(":StudentNo",$StudentNo,PDO::PARAM_STR);
    $statement->execute();

    $student=array();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){

        extract($row);//Assign the values "Fname", "Lname" and "NameWithInitials" to the variables $Fname, $Lname and $NameWithInitials:
        $student=array(
            "Fname" => $Fname,
            "Lname" => $Lname,
            "NameWithInitials" => $NameWithInitials,
            "NIC" => $NIC,
            "Address" => $Address,
            "Phone" => $Phone,
            "Uni" => $Uni,
            "Faculty" => $Faculty,
            "Image" => $Image
        );
    }

    // encode the details in JSON format
    echo json_encode($student);

?>