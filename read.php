<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
  color: black;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = Strval($_GET['q']);

$con = mysqli_connect('localhost','root','',);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sales");
$sql="SELECT * FROM tracker WHERE emp = '".$q."'";
//$sql="select * from tracker";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>emp</th>
<th>area</th>
<th>cust</th>
<th>visit</th>
<th>typ</th>
<th>custname</th>
<th>position</th>
<th>contact</th>
<th>payment</th>
<th>remark</th>
<th>dat</th>
<th>appointment</th>
<th>priority</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row ['emp'] . "</td>";
  echo "<td>" . $row['area'] . "</td>";
  echo "<td>" . $row['cust'] . "</td>";
  echo "<td>" . $row['visit'] . "</td>";
  echo "<td>" . $row['typ'] . "</td>";
  echo "<td>" . $row['custname'] . "</td>";
  echo "<td>" . $row['position'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
  echo "<td>" . $row['payment'] . "</td>";
  echo "<td>" . $row['remark'] . "</td>";
  echo "<td>" . $row['dat'] . "</td>";
  echo "<td>" . $row['appointment'] . "</td>";
  echo "<td>" . $row['priority'] . "</td>";

  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>