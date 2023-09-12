<?php
$text = $_POST['question'];

require __DIR__ . '/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAI('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');
$result = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => $text,
    'temperature' => 0.2,
    'max_tokens' => 1024,
    'top_p' => 0.5,
    'frequency_penalty' => 0.5,
    'presence_penalty' => 0.5,
]);

$response = json_decode($result, true);

if (isset($response['choices'][0]['text'])) {
    echo $response['choices'][0]['text'];
} else {
    echo 'Помилка: неможливо отримати текстову відповідь від OpenAI.';
}


