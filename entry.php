<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sales";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
   $emp = $_POST['emp'];
   $area = $_POST['area'];
   $cust = $_POST['cust'];
   $visit = $_POST['visit'];
   $typ = $_POST['typ'];
   $custname = $_POST['custname'];
   $position = $_POST['position'];
   $contact = $_POST['contact'];
   $payment = $_POST['payment'];
   $remark = $_POST['remark'];
   $dat = $_POST['dat'];
   $appointment = $_POST['appointment'];
   $priority = $_POST['priority'];


$sql = "INSERT INTO tracker (`emp`, `area`, `cust`, `visit`, `typ`,
`custname`, `position`, `contact`, `payment`, `remark`, `dat`, `appointment`,
`priority`) VALUES ('$emp', '$area', '$cust', '$visit', '$typ',
'$custname', '$position', '$contact', '$payment', '$remark', '$dat',
'$appointment', '$priority')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else { 
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
