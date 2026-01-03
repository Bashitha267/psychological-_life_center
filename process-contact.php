<?php
// Process Contact Form Submission
// This is a placeholder - implement full server-side validation and email/database integration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $firstName = htmlspecialchars(trim($_POST['first_name'] ?? ''));
    $lastName = htmlspecialchars(trim($_POST['last_name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Validate
    $errors = [];
    
    if (empty($firstName)) $errors[] = "First name is required";
    if (empty($lastName)) $errors[] = "Last name is required";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
    if (empty($subject)) $errors[] = "Subject is required";
    if (empty($message)) $errors[] = "Message is required";
    
    if (empty($errors)) {
        // Success - Store in database or send email
        
        // Example: Send email (configure mail server first)
        /*
        $to = "info@serenemind.lk";
        $emailSubject = "Contact Form: $subject";
        $emailBody = "Name: $firstName $lastName\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Phone: $phone\n\n";
        $emailBody .= "Message:\n$message";
        $headers = "From: $email";
        
        mail($to, $emailSubject, $emailBody, $headers);
        */
        
        // Example: Store in database
        /*
        require_once 'db-connection.php';
        $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $subject, $message);
        $stmt->execute();
        $stmt->close();
        */
        
        // Redirect with success message
        header("Location: contact.php?success=1");
        exit;
    } else {
        // Redirect with errors
        header("Location: contact.php?error=" . urlencode(implode(", ", $errors)));
        exit;
    }
} else {
    // Invalid request method
    header("Location: contact.php");
    exit;
}
?>
