<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP CONNECT</title>
    </head>

    <body>
        <?php
            $selected_id = $_POST['contact'];
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
                $sql_query    = "SELECT contactsFirst, contactsLast, contactsEmail, contactsNumber, contactsPhoto FROM contacts WHERE contactsId = " . $selected_id; // <--- UNSAFE :{
                $result       = mysqli_query($conn, $sql_query);

                if ($result) {    
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        echo "<h1>FIRST NAME </h1>" . "<p>" . $row["contactsFirst"] . "</p>";
                        echo "<h1>LAST NAME </h1>"  . "<p>" . $row["contactsLast"]  . "</p>";
                        echo "<h1>EMAIL </h1>"      . "<p>" . $row["contactsEmail"] . "</p>";
                        echo "<h1>PHONE </h1>"      . "<p>" . $row["contactsNumber"]. "</p>";
                        echo "<h1>PHOTO </h1>"      . "<img src='Images/" . $row["contactsPhoto"] . "' alt='Picture of " . $row["contactsFirst"] . "' width='256' height='256' border='0'>";
                    mysqli_free_result($result);  
                }//end if
            }//end if
            mysqli_close($conn);

            echo '<form action="edit.php" id="editform" method="post">';
            echo '    <input type="hidden" name="id" value="' . $selected_id . '">';   
            echo '    <input type="hidden" name="fn" value="' . $row["contactsFirst"] . '">';               
            echo '    <input type="hidden" name="ln" value="' . $row["contactsLast"] . '">';   
            echo '    <input type="hidden" name="em" value="' . $row["contactsEmail"] . '">';   
            echo '    <input type="hidden" name="ph" value="' . $row["contactsNumber"] . '">';   
            echo '    <input type="hidden" name="im" value="' . $row["contactsPhoto"] . '">';  
             

            echo '    <input type="submit" value = "Edit Contact">';
            echo '</form>';  
            
            echo '<form action="delete.php" id="deletecnctform" method="post">';
            echo '    <input type="hidden" name="id" value="' . $selected_id . '">'; 
            echo '    <input type="submit" value = "Delete Contact">';
            echo '</form>'; 
            
           
            
            //echo '    <input type="button" name = "delete" value = "Delete">';
           // if($_GET){
           //     if(isset($GET['delete'])){
           //         delete();
           //     }
           // }
//
           // function delete()
           // {
           //     $delete1 =("DELETE * FROM contacts WHERE contactsId = '$seleted_id'");
           //     $result = mysqli_query($conn,$delete1) or die(mysqli_error());
//
           //     echo "record deleted";
           // }
                          
        ?>
     
        

        <form action="index.php" id="home">
            <input type="submit" value = "Back">
        </form>        
    </body>

</html>