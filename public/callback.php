<?php
$phone = test_data($_POST['phone']);
$name = test_data($_POST['name']);

if (empty($phone)){
    var_dump(http_response_code(400));
} else {
    $tg_user = '-1001849848896';
    $bot_token = '5315160440:AAEqdn5jIUiKMbQILoaESDTal5cGktv9AfQ';
     
    $text = "<h3>Клиент с сайта ooos.site</h3>\n<b>Телефон:</b> $phone \n<b>Имя:</b> $name";
    
    $params = array(
        'chat_id' => $tg_user,
        'text' => $text,
        'parse_mode' => 'HTML',
    );
     
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot' . $bot_token . '/sendMessage');
    curl_setopt($curl, CURLOPT_POST, true); // отправка данных методом POST
    curl_setopt($curl, CURLOPT_TIMEOUT, 10); // максимальное время выполнения запроса
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params); // параметры запроса
    $result = curl_exec($curl); // запрос к api
    curl_close($curl);
     
    var_dump(json_decode($result));   
}

function test_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>