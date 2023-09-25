<?php
include "inc/connection.php";
//Define variables, set to empty values
$nameErr = $cnameErr = $emailErr = $telephoneErr = $messageErr = "";
$name = $cname = $email = $telephone = $message = "";
$success_message = "";
$emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

//Validate inputs and handle empty submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Full name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
        echo $name;
        //Validate the name, ensuring it only has letters, dashes, apostrophes, and whitespaces.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    //Company Name
    $cname = test_input($_POST["cname"]);
    //Validate the name, ensuring it only has letters, dashes, apostrophes, and whitespaces.
    if (!preg_match("/^[a-zA-Z-' ]*$/", $cname)) {
        $cnameErr = "Only letters and white space allowed";
    }

    //Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        //Validate the email, making sure it is well-formed
        if (!preg_match($emailPattern,$email)) {
            $emailErr = "Invalid email format";
        }
    }

    //Telephone
    if (empty($_POST["telephone"])) {
        $telephoneErr = "Telephone is required";
    } else {
        $telephone = test_input($_POST["telephone"]);
        if (strlen($telephone) > 11) {
            $telephoneErr = "Maximum 11 characters";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "A message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    // If there are no errors, ASSIGN a success message that we call later.
    if (
        empty($nameErr) &&
        empty($cnameErr) &&
        empty($emailErr) &&
        empty($telephoneErr) &&
        empty($messageErr)
    ) {
        $success_message = "Form submitted successfully";

        $stmt = $db->prepare(
            "INSERT INTO user_queries (name, cname, email, telephone, message) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $cname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $telephone);
        $stmt->bindParam(5, $message);
        $stmt->execute();
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
