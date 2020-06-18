        <?php

            $id = $_POST["id"];   
            $fn = $_POST["fn"];               
            $ln = $_POST["ln"];   
            $em = $_POST["em"];   
            $ph = $_POST["ph"];   
            $im = $_POST["im"]; 

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
        
                $sql          = "UPDATE contacts SET contactsFirst = '" . $fn ."',";
                $sql = $sql . " contactsLast = '" . $ln ."',";
                $sql = $sql . " contactsEmail = '" . $em ."',";
                $sql = $sql . " contactsNumber = '" . $ph ."',";
                $sql = $sql . " contactsPhoto = '" . $im ."'";    
                $sql = $sql . " WHERE contactsId = " . $id ." ";

                //shows the sql statement
                //echo $sql;

                $result  = mysqli_query($conn, $sql);

                //shows message if database is changed or not
                if ($result) {   
                    //$selected_id = $_POST['contact'];
                    //wait before redirecting  
                    header('Refresh:3; url= contact.php');     
                    echo "Contact updated!";   
                   
                }else{
                    echo "oh oh";
                }//end if

                mysqli_close($conn);

               
          
                // TEMP SOLUTION TO GO BACK AFTER EDITING -- SHOULD REDIRECT TO CONTACT_INFO.PHP OR HAVE CONTACTINFO.PHP POST TO ITS SELF
               // header('Location: contact_info.php', TRUE, 301);
               // exit;
            }//end if
         
        ?>