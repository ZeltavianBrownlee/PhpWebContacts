<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP CONTACTS</title>
    </head>

    <body>
        <?php
            require "header.php";

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
                //set selected name to variable
                echo "<select name='contact' size = '3' form='cnctform'>";

                $select_first = false;
                $sql          = "SELECT contactsId, contactsFirst, contactsLast FROM contacts ORDER BY contactsLast ASC";
                $result       = mysqli_query($conn, $sql);

                if ($result) {         
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $dataname = $row["contactsFirst"] . " " . $row["contactsLast"];

                        if (! $select_first) {
                            echo "<option value =" . $row["contactsId"] . " selected>" . $dataname . "</option>";
                            $select_first = true;
                        }else{
                            echo "<option value =" . $row["contactsId"] . ">" . $dataname . "</option>";
                        }//end if      
                    }//end while

                    mysqli_free_result($result);  
                }//end if

                echo "</select>";
            }//end if
            mysqli_close($conn);
        ?>
     
        <form action="contact_info.php" id="cnctform" method="post">
            <input type="submit" value = "Go!">
        </form>

        <form action="add_contact.php" id="addcnctform" method="post">
            <input type="submit" value = "Add Contact!">
        </form>
    </body>

</html>