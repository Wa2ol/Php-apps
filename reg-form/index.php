<?php
// Define variables to store user inputs and error messages
$name = $email = $confirmation = "";
$nameErr = $emailErr = "";

// Function to sanitize and validate input data
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the name field
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        // Check if the name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate and sanitize the email field
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        // Check if the email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // If there are no errors, display a confirmation message
    if (empty($nameErr) && empty($emailErr)) {
        $confirmation = "Thank you for submitting the form, $name! Your email address is: $email";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Register</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <p><?php echo $confirmation; ?></p>
</body>

</html>