<?php
include "inc/connection.php";

/**
 * FORM VALIDATION
 * 2 Regex patterns, one for email and one for UK telephone numbers.
 * 
 * Empty errors are declared, if they continue to stay empty, the form is successful.
 * Errors are assigned under conditions specific to each field. Email/telephone must be correct format, name should be letters and whitespace only.
 * All errors are fed back to the user on submission.
 *
 *
*/


//Define variables, set to empty values
$nameErr = $cnameErr = $emailErr = $telephoneErr = $messageErr = "";
$name = $cname = $email = $telephone ="";
$message = "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?";
$success_message = "";
$emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$phonePattern = "/^(?:(?:\+?44\s?(?:\(\d{1,5}\)|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/";
$validForm = false;
//Validate inputs and handle empty submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validForm = false; //Reset form to invalid after successful submission.
    //Full name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
        //Validate the name, ensuring it only has letters, dashes, apostrophes, and whitespaces.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    //We don't have any requirements for the cname, but we sanitize and trim it anyway.
    $cname = test_input($_POST["cname"]);
    
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
        if (!preg_match($phonePattern,$telephone)) {
            $telephoneErr = "Invalid telephone format";
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
        $success_message = "Enquiry sent! We'll get back to you as soon as possible.";
        $validForm = true;
        $stmt = $dbenquiries->prepare(
            "INSERT INTO enquiries (name, cname, email, telephone, message) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $cname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $telephone);
        $stmt->bindParam(5, $message);
        $stmt->execute();
        $name = $cname = $email = $telephone = $message ="";
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
