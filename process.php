<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["honeypot"])) {
        die("Submission rejected.");
    }

    $first_name = $_POST["first_name"];
    $first_name = htmlspecialchars($first_name);
    if (!preg_match("/^[A-Za-z-]+$/", $first_name)) {
        $errors[] = "Please enter a valid First Name.";
    }

    $last_name = $_POST["last_name"];
    $last_name = htmlspecialchars($last_name);
    if (!preg_match("/^[A-Za-z-]+$/", $last_name)) {
        $errors[] = "Please enter a valid Last Name.";
    }

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    $country = $_POST["country"];
    $country = htmlspecialchars($country);
    if (!preg_match("/^[A-Za-z\s-]+$/", $country)) {
        $errors[] = "Please enter a valid Country.";
    }

    $message = $_POST["message"];
    $message = htmlspecialchars($message);
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        $to = "support@hackerspoulette.com";
        $subject = "Contact Request";
        $message_body = "Name: $first_name $last_name\n";
        $message_body .= "Email: $email\n";
        $message_body .= "Country: $country\n";
        $message_body .= "Message:SW$message\n";
 
        if (mail($to, $subject, $message_body)) {
            echo "Your message has been sent successfully.";
        } else {
            echo "Error sending your message. Please try again later.";
        }
    } else {
        echo "Validation Errors:<br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
