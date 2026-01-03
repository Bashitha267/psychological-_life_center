<?php
// Process Internship Application
// This is a placeholder - implement full server-side validation, file upload, and database integration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));
    $university = htmlspecialchars(trim($_POST['university'] ?? ''));
    $degree = htmlspecialchars(trim($_POST['degree'] ?? ''));
    $year = intval($_POST['year'] ?? 0);
    $studentId = htmlspecialchars(trim($_POST['student_id'] ?? ''));
    $interest = htmlspecialchars(trim($_POST['interest'] ?? ''));
    $startDate = htmlspecialchars(trim($_POST['start_date'] ?? ''));
    $motivation = htmlspecialchars(trim($_POST['motivation'] ?? ''));
    
    // Validate
    $errors = [];
    
    if (empty($fullname)) $errors[] = "Full name is required";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
    if (empty($phone)) $errors[] = "Phone is required";
    if (empty($address)) $errors[] = "Address is required";
    if (empty($university)) $errors[] = "University is required";
    if (empty($degree)) $errors[] = "Degree is required";
    if ($year < 1 || $year > 4) $errors[] = "Valid year is required";
    if (empty($studentId)) $errors[] = "Student ID is required";
    if (empty($interest)) $errors[] = "Area of interest is required";
    if (empty($startDate)) $errors[] = "Start date is required";
    if (empty($motivation)) $errors[] = "Motivation is required";
    
    // Handle CV upload
    $cvPath = null;
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $allowedTypes = ['application/pdf'];
        $maxSize = 5 * 1024 * 1024; // 5MB
        
        if (!in_array($_FILES['cv']['type'], $allowedTypes)) {
            $errors[] = "CV must be a PDF file";
        }
        
        if ($_FILES['cv']['size'] > $maxSize) {
            $errors[] = "CV file size must not exceed 5MB";
        }
        
        if (empty($errors)) {
            $uploadDir = 'uploads/cv/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            
            $filename = uniqid() . '_' . basename($_FILES['cv']['name']);
            $cvPath = $uploadDir . $filename;
            
            if (!move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath)) {
                $errors[] = "Failed to upload CV";
            }
        }
    } else {
        $errors[] = "CV is required";
    }
    
    if (empty($errors)) {
        // Success - Store in database
        
        /*
        require_once 'db-connection.php';
        $stmt = $conn->prepare("INSERT INTO internship_applications (fullname, email, phone, address, university, degree, year_of_study, student_id, area_of_interest, start_date, motivation, cv_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $fullname, $email, $phone, $address, $university, $degree, $year, $studentId, $interest, $startDate, $motivation, $cvPath);
        $stmt->execute();
        $stmt->close();
        */
        
        // Send confirmation email
        /*
        $to = $email;
        $subject = "Internship Application Received - SereneMind";
        $message = "Dear $fullname,\n\nThank you for applying to our internship program...";
        $headers = "From: info@serenemind.lk";
        mail($to, $subject, $message, $headers);
        */
        
        // Redirect with success message
        header("Location: internship.php?success=1");
        exit;
    } else {
        // Redirect with errors
        header("Location: internship.php?error=" . urlencode(implode(", ", $errors)));
        exit;
    }
} else {
    // Invalid request method
    header("Location: internship.php");
    exit;
}
?>
