<?php
require_once '../models/Projects.php';

$form = new Projects();
$request = file_get_contents('php://input');

try {
    $data = json_decode($request, true);

    if (isset($data['data'])) {
        $projectData = $data['data'][0]; // Assuming it's an array; adjust if needed
        $form->add_project($projectData);
        http_response_code(200);
        $msg = "Project Added";
        echo json_encode(['success' => $msg]);

    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON payload']);
        $msg = "Payload Error";
        echo json_encode(['error' => $msg]);
    }
} catch (Exception $ex) {
    var_dump($ex->getMessage());
    die;
    $msg = "Some Error Occurred!";
    http_response_code(400);
    echo json_encode(['error' => $msg]);
}
?>
