<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

// Accept Post Request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the data from the request
  $data = json_decode(file_get_contents('php://input'), true);
  // Validate the data
  if (empty($data['name']) || empty($data['email']) || empty($data['phone']) || empty($data['subject']) || empty($data['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'All fields are required']);
    exit;
  }
  // Send the email
  $to = $config['contact']['to'];
  $subject = $data['subject'];

  $message = '<p><strong>Name: </strong> ' . $data['name'] . '</p>';
  $message .= '<p><strong>Email: </strong> ' . $data['email'] . '</p>';
  $message .= '<p><strong>Phone: </strong> ' . $data['phone'] . '</p>';
  $message .= '<p><strong>Message: </strong> ' . $data['message'] . '</p>';
  
  // Send the email
  $headers = 'From: ' . $data['name'] . ' <' . $data['email'] . '>';
  // set content type to html
  $headers .= "\r\n" . "MIME-Version: 1.0";
  $headers .= "\r\n" . "Content-type:text/html;charset=UTF-8";

  try {
    mail($to, $subject, $message, $headers);
    echo json_encode(['success' => 'Message Sent Successfully']);
  } catch (\Throwable $th) {
    http_response_code(500);
    echo json_encode(['error' => 'Message Failed to Send']);
  }
  exit;
}
