<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP CONNECT</title>
    </head>

    <body>
    
        <form action = "insert.php" method = "post">            
        
            <div>First Name: <input type = "text" name = "firstName" placeholder ="First Name"> </div>      
            <div>Last Name: <input type = "text" name = "lastName" placeholder ="Last Name"></div>
            <div>Email: <input type = "text" name = "email" placeholder ="Email"></div>
            <div>Address: <input type = "text" name = "address" placeholder ="Address"></div>
            <div>Phone Number: <input type = "text" name = "number" placeholder ="Number"></div>
            <div>Photo <input type = "file" name = "photo" placeholder ="Photo" id="fileToUpload"></div>
           
            <input type="submit" name="submit" value="Submit">
      </form>  
     

        <form action="index.php" id="home">
            <input type="submit" value = "Back">
        </form>    
    </body>
</html>