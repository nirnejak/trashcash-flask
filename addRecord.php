<?php
	$contactNo = $_REQUEST['contactNo'];
	//$conn = mysqli_connect('localhost:3306','boot','rmyRgSYtTQx^','trashhca_trashhcashhphp');
	//$conn = mysqli_query($conn,"INSERT INTO `user_record`(`contactNo`) VALUES(".$contactNo.")");
    
    
    $conn = new mysqli('localhost:3306', 'trashhca_boot', 'rmyRgSYtTQx^','trashhca_trashhcashhphp');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `user_record` (`contactNo`) VALUES($contactNo)";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p class=\"text-success\">Thank you for Subscribing for Newsletter</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>