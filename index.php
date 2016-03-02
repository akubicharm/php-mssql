<?php


echo "<h1>Connect MSSql Server on Azure by FreeTDS</h1>"


// get environment variables
$user = 'myadmin'; //getenv("DB_USER");
$pass = '@Dmin123'; // getenv("DB_PASSWD");
$host = 'db-komizo.database.windows.net';  //getenv("DB_SERVER_HOST");
$db = 'sqlserver01';
$server = '$host' + '\' $db;

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
$query = "SELECT count(*) FROM SalesLT.customer;

# perform the query 
$result = odbc_exec($connect, $query); 

# fetch the data from the database 
while(odbc_fetch_row($result)) { 
    $field1 = odbc_result($result, 1); 
    $field2 = odbc_result($result, 2); 
    print("$field1 $field2\n"); 
} 

# close the connection 
odbc_close($connect); 

?>
