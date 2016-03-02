<?php
echo "<h1>Connect MSSql Server on Azure by FreeTDS</h1>";

// getenv("DB_USER")
// getenv("DB_PASSWD");
// getenv("DB_SERVER_HOST");

$user = 'myadmin';
$pass = '@Dmin123';
$host = 'db-komizo.database.windows.net';
$db = 'sqlserver01';
$server = 'db-komizo.database.windows.net\sqlserver01';

// generate connection string
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database"; 
$conn = odbc_connect($connection_string,$user,$pass);

if ($conn) {
    print("Connection established.");
}
else {
    print("Connection could not be established.");
}

# query the users table for all fields 
$query = "SELECT count(*) FROM SalesLT.customer";

# perform the query 
$result = odbc_exec($connect, $query); 

# fetch the data from the database 
while(odbc_fetch_row($result)) { 
    $field1 = odbc_result($result, 1); 
    print("$field1\n");
} 

# close the connection 
odbc_close($connect); 

?>
