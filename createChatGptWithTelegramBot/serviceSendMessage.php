<?php

function ActionSendMessage($data, $method, $api){
    $ch = curl_init("https://api.telegram.org/bot" . $api . "/$method?" .  http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);

    curl_exec($ch);
    curl_close($ch);
}