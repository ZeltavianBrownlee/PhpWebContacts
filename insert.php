<?php
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
    $sql_query = "INSERT INTO contacts (contactsFirst, contactsLast, contactsEmail,contactsAddress, contactsNumber, contactsPhoto) VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[address]','$_POST[number]', '$_POST[photo]')";
    
    //echo $sql_query; (show sql statement)
    echo "1 record added";
    $result  = mysqli_query($conn, $sql_query);

    mysqli_close($conn);
}
header('Refresh:3; url= contact.php');
?>