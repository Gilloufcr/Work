<?php
if(isset($_POST['btnsave'])
{
    $directoryName = $_POST['numdoss'];
    $path = 'c:/' . $directoryName;
    if(!is_dir($directoryName)){
    mkdir($path);
    echo "Dossier Client Créé dans le Cloud";
    }
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "demo");
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    
    // Escape user inputs for security
    $first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
    $last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
    $email = $mysqli->real_escape_string($_REQUEST['email']);
    
    // Attempt insert query execution
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    if($mysqli->query($sql) === true){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
}

elif(isset($_POST['btnsearch'])
{

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "demo");
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    
    // Escape user inputs for security
    $first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
    $last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
    $email = $mysqli->real_escape_string($_REQUEST['email']);
    
    // Attempt insert query execution
    $sql = "SELECT * FROM persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    if($mysqli->query($sql) === true){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
}

elif(isset($_POST['btnupdate'])
{

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "demo");
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    
    // Escape user inputs for security
    $first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
    $last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
    $email = $mysqli->real_escape_string($_REQUEST['email']);
    
    // Attempt insert query execution
    $sql = "IUPDATE persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    if($mysqli->query($sql) === true){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
}
?>