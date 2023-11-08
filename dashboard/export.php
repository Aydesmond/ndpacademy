<?php

// $conn = mysqli_connect("localhost", "root", "", "register");

$conn = mysqli_connect('localhost', 'ndpracad_dpco', 'ndpruser123', 'ndpracad_dpco');


$filename = "NDPRAcademy User List.csv";

$fp = fopen('php://output', 'w');



$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='ndpracad_dpco' AND TABLE_NAME='users'";

$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_row($result)) {

	$header[] = $row[0];

}	



header('Content-type: application/csv');

header('Content-Disposition: attachment; filename='.$filename);

fputcsv($fp, $header);



$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)) {

	fputcsv($fp, $row);

}

exit;

?>