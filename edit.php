<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP EDIT</title>
    </head>

    <body>
        <form method="post" action="update.php">
           
            <?php
                $selected_id = $_POST['id'];

                echo '    <input type="hidden" name="id" value="' . $selected_id . '">';   
                echo '    <input type="hidden" name="fn" value="' . $_POST["fn"] . '">';               
                echo '    <input type="hidden" name="ln" value="' . $_POST["ln"] . '">';   
                echo '    <input type="hidden" name="em" value="' . $_POST["em"] . '">';   
                echo '    <input type="hidden" name="ph" value="' . $_POST["ph"] . '">';   
                echo '    <input type="hidden" name="im" value="' . $_POST["im"] . '">'; 
    

                echo 'FirstName: <input type="text"  name="fn"    value = "'   . $_POST["fn"] . '"> <br><br>';
                echo 'LastName:  <input type="text"  name="ln"   value = "'    . $_POST["ln"] . '"> <br><br>';
                echo 'Email:     <input type="email" name="em" value = "'      . $_POST["em"] . '"> <br><br>';
                echo 'PHONE:     <input type="tel"   name="ph"   value = "'    . $_POST["ph"] . '"> <br><br>';
                echo 'PHOTO:     <br>' . "<img src='\\photos\\"                . $_POST["im"] . "' alt='Picture of " . $_POST["im"]  . "' width='256' height='256' border='0'> <br>";
                echo '<input type="file" name="im"> <br><br>';
                echo '<input type="submit" name="submit" value="Submit"> ';  
            ?>
        </form>
      
        <form action="index.php" id="home">
            <input type="submit" value = "Back">
        </form>    
    </body>

</html>