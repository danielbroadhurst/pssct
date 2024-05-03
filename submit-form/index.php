<?php

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
  $to = 'djdanielbroadhurst@gmail.com';
  $subject = $data['subject'];
  // Create a table which includes the name, email, phone, subject and message
  $message = '<table>';
  $message .= '<tr><td>Name</td><td>' . $data['name'] . '</td></tr>';
  $message .= '<tr><td>Email</td><td>' . $data['email'] . '</td></tr>';
  $message .= '<tr><td>Phone</td><td>' . $data['phone'] . '</td></tr>';
  $message .= '<tr><td>Subject</td><td>' . $data['subject'] . '</td></tr>';
  $message .= '<tr><td>Message</td><td>' . $data['message'] . '</td></tr>';
  $message .= '</table>';
  // Send the email
  $headers = 'From: ' . $data['name'] . ' <' . $data['email'] . '>';
  if (mail($to, $subject, $message, $headers)) {
    echo json_encode(['success' => 'Message Sent Successfully']);
  } else {
    http_response_code(500);
    echo json_encode(['error' => 'Message Failed to Send']);
  }
  exit;
}
