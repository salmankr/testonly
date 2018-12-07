


<!-- for local env 
<?php 
//$con = new mysqli("localhost","root","","contact") or die("Connection Not Established!");


?> -->

<?php

$servername = "localhost";

$username = "braingym_xam";

$password = "wifi0000";

$dbname = "braingym_contact";



// Create connection

$con = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($con->connect_error) {

    die("Connection failed: " . $con->connect_error);

}



?>