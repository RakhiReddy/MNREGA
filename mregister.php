<?php 
    require("mconfig.php");
    if(!empty($_POST)) 
    { 
        // Checking for all fields 
        if(empty($_POST['firstname'])) 
        { die("Please enter firstname."); } 
        if(empty($_POST['lastname'])) 
        { die("Please enter lastname."); } 
        if(empty($_POST['address'])) 
        { die("Please enter address."); }
        if(empty($_POST['village'])) 
        { die("Please enter Village Name."); } 
         if(empty($_POST['card'])) 
        { die("Please enter Aadhar Card No."); } 
         
        //Checking for registered Aadhar Card No.
        $query = " 
            SELECT 
                1 
            FROM workers 
            WHERE 
                card = :card 
        "; 
        $query_params = array( 
            ':card' => $_POST['card'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This Aadhar Card is already registered"); } 
          
        // Adding Row to Database
        $query = " 
            INSERT INTO workers ( 
                firstname, 
                lastname, 
                address, 
                village,
                card 
            ) VALUES ( 
                :firstname, 
                :lastname, 
                :address, 
                :village,
                :card 
            ) 
        "; 
          
        
        $query_params = array( 
            ':firstname' => $_POST['firstname'], 
            ':lastname' => $_POST['lastname'], 
            ':address' => $_POST['address'], 
            ':village' => $_POST['village'], 
            ':card' => $_POST['card'] 
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        
        header("Location: msucess.php"); 
        die("Redirecting to msucess.php"); 
    } 
?>