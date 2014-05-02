<?php 
    require("mconfig.php"); 
    $submitted_email = ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                email, 
                password 
            FROM admin 
            WHERE 
                email = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
          
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 

        $row = $stmt->fetch(); 
        if($row){
            /*if($check_password === $row['password'])*/
                $login_ok = true;
             
        } 
 
        if($login_ok){  
            unset($row['password']); 
            $_SESSION['admin'] = $row;  
            header("Location: madmin.php"); 
            die("Redirecting to: mindex.php"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?> 