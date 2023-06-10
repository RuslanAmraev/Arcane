<?php
// Замените <TOKEN> на токен вашего Telegram-бота
$token = '6122858867:AAGfM7FwibuC9IyqnnBv4bd9_rYDbkhDwVc';
// Замените <CHAT_IDS> на массив с ID чатов, в которые нужно отправить сообщение
$chat_ids = array(
    '484297830', //Ras
    '424310757', //Rus
    '2010895199', //Rauf
    '472073613', //Barys
);

// Получение данных из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Извлечение UTM-меток из URL
$utm_source = $_POST['utm_source'] ?? '';
$utm_medium = $_POST['utm_medium'] ?? '';
$utm_campaign = $_POST['utm_campaign'] ?? '';
$utm_content = $_POST['utm_content'] ?? '';
$utm_term = $_POST['utm_term'] ?? '';

// Формирование текста сообщения
$text = "Новая заявка от пользователя:\n\n";
$text .= "Имя: " . $name . "\n";
$text .= "Номер: " . $phone . "\n";
$text .= "_____UTM_____-метки:\n";
$text .= "Источник: " . $utm_source . "\n";
$text .= "Канал: " . $utm_medium . "\n";
$text .= "Кампания: " . $utm_campaign . "\n";
$text .= "Контент: " . $utm_content . "\n";
$text .= "Терм: " . $utm_term . "\n";

// Формирование URL для отправки запроса к Telegram API
$url = "https://api.telegram.org/bot" . $token . "/sendMessage";

foreach ($chat_ids as $chat_id) {
    $data = array(
        'chat_id' => $chat_id,
        'text' => $text
    );

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        // Обработка ошибки при отправке запроса
        echo "Ошибка при отправке сообщения в Telegram для чата с ID: " . $chat_id . "<br>";
    } else {
        // Успешная отправка сообщения
        echo "Сообщение успешно отправлено в Telegram для чата с ID: " . $chat_id . "<br>";
    }
}
?>
