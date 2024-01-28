<?php
// process_process_contact.php
require_once '../models/Contact.php';

$request = file_get_contents('php://input');
$contact = new Contact();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Access form data sent via POST request
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Perform validation (add your validation logic here)
    $errors = [];

    // Check if name is empty
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    // Check if email is empty
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    }

    // Check if subject is empty
    if (empty($subject)) {
        $errors['subject'] = 'Subject is required';
    }

    // Check if message is empty
    if (empty($message)) {
        $errors['message'] = 'Message is required';
    }

    if (!empty($errors)) {
        // If there are errors, return an error response
        $response = [
            'success' => false,
            'message' => 'Please Enter all the required fields.',
            'errors' => $errors,
        ];
    } else {
        // If there are no errors, return a success response
        $contactResult = $contact->add_query([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ]);

        $response = [
            'success' => $contactResult,
            'message' => $contactResult ? 'We have received your query, will contact you shortly.' : 'Query Insert Error',
            'data' => [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            ],
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle cases where the request method is not POST
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>
