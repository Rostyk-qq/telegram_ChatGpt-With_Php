<?php
require_once('serviceSendMessage.php');

$all_changes = file_get_contents("php://input");
$data = json_decode($all_changes, true);
const API_KEY = "6605716693:AAEE3jNNZHEANlXfjOwdTNYc1XHScrbFLBE";
$text = $data['message']['text'];
$CHAT_ID = $data['message']['chat']['id'];

function sendToGetResponseFromChat($data){
    global $CHAT_ID;
    $ch = curl_init('http://localhost/train_connect_openAi/index.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);

    $files = glob(__DIR__ . "/voice_messages/*");
    foreach ($files as $file){
        if (is_file($file)){
            unlink($file);
        }
    }

    $data = array(
        'chat_id' => $CHAT_ID,
        'text' => $response,
        'parse_mode' => 'html'
    );
    ActionSendMessage($data, "sendMessage", API_KEY);
}

if($text === '/start'){
    $data = array(
        'chat_id' => $CHAT_ID,
        'text' => 'Задавайте питання. Я готовий надати відповідь :)',
        'parse_mode' => 'html'
    );

    ActionSendMessage($data, "sendMessage", API_KEY);
}
else if($text){
    $data = array(
        "question" => $text
    );
    sendToGetResponseFromChat($data);
}
else{
    $data = array(
        'chat_id' => $CHAT_ID,
        'text' => 'Вибачте, неможу розпізнати текст :(',
        'parse_mode' => 'html'
    );
    ActionSendMessage($data, "sendMessage", API_KEY);
}