<?php
  
  $conn = "";
   
  try {
      $servername = "localhost:3306";
      $dbname = "admin";
      $username = "root";
      $password = "";
     
      $conn = new PDO(
          "mysql:host=$servername; dbname=admin",
          $username, $password
      );
        
     $conn->setAttribute(PDO::ATTR_ERRMODE,
                      PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  };
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM name");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['adminname'] == $adminname) && 
            ($user['password'] == $password)) {
                header("Location: adminpage.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
  
?>