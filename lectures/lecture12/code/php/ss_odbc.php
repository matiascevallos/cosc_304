<!DOCTYPE html>
<html>
<head>
<title>Test SQL Server ODBC</title>
</head>
<body>

<?php
echo "Test Access to SQL Server using ODBC\n";

$conn=odbc_connect("ss",  "rlawrenc", "todo");	
if (!$conn)
{
	exit("Connection to the database Failed: " . $conn);
}
	
$sql="SELECT * FROM emp";
	
$resultSet=odbc_exec($conn, $sql);

if (!$resultSet)
{
	exit("Error!");
}

echo "<table><tr>";
while (odbc_fetch_row($resultSet))
{
	$eno=odbc_result($resultSet,"eno");
	$ename=odbc_result($resultSet,"ename");
	echo "<tr><td>$eno</td>";
	echo "<td>$ename</td></tr>";
}
	   
odbc_close($conn);
echo "</table>";
?>



</body>
</html>

