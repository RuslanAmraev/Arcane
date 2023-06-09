<?php
// Замените <TOKEN> на токен вашего Telegram-бота
$token = 'AAGfM7FwibuC9IyqnnBv4bd9_rYDbkhDwVc';

// Замените <CHAT_IDS> на массив с ID чатов, в которые нужно отправить сообщение
$chat_ids = array(
    '424310757', //Rus
    '484297830' //Ras
);

// Получение данных из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Формирование текста сообщения
$text = "Новая заявка от пользователя:\n\n";
$text .= "Имя: " . $name . "\n";
$text .= "Номер: " . $phone . "\n";

// Формирование URL для отправки запроса к Telegram API
$url = "https://api.telegram.org/bot" . $token . "/sendMessage";

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query(array('text' => $text))
    )
);

foreach ($chat_ids as $chat_id) {
    $options['http']['content'] .= "&chat_id=" . urlencode($chat_id);
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        // Обработка ошибки при отправке запроса
        echo "Ошибка при отправке сообщения в Telegram для чата ID: " . $chat_id . "\n";
    } else {
        // Успешная отправка сообщения
        echo "Сообщение успешно отправлено в Telegram для чата ID: " . $chat_id . "\n";
    }
}
?>