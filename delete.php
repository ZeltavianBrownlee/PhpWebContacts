<?php
   
$selected_id = $_POST['id'];
$servername = "localhost";#"astamps78515.ipagemysql.com";
$username   = "root";#"testuser";
$password   = "";#"Tu123456!";
$dbname     = "loginsystemtut";#"andrew_stamps";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    $sql_query = "DELETE FROM contacts  WHERE contactsId = " . $selected_id ."";
    //echo $sql_query; 
    echo "Record deleted";
    $result  = mysqli_query($conn, $sql_query);

    mysqli_close($conn);
}
header('Refresh:3; url= contact.php');
?>