
<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mytutor';
	
// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if(isset($_POST['save'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $npassword = $_POST['npassword'];
    $comfirm_password = $_POST['comfirm_password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
 
    // Insert the data into the registration table 
    $sql = "INSERT INTO registration (FirstName, LastName, Email, npassword, comfirm_password, gender, country) VALUES ('$FirstName', '$LastName', '$Email', '$npassword', '$comfirm_password', '$gender', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

