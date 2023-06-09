<?php
// Замените <TOKEN> на токен вашего Telegram-бота
$token = '6122858867:AAGfM7FwibuC9IyqnnBv4bd9_rYDbkhDwVc';
// Замените <CHAT_ID> на ID чата, в который нужно отправить сообщение. Можно указать ID пользователя или группы.
$chat_id = '424310757';

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Формирование текста сообщения
$text = "Новая заявка от пользователя:\n\n";
$text .= "Имя: " . $name . "\n";
$text .= "Номер: " . $phone . "\n";

// Формирование URL для отправки запроса к Telegram API
$url = "https://api.telegram.org/bot" . $token . "/sendMessage";
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
    echo "Ошибка при отправке сообщения в Telegram.";
} else {
    // Успешная отправка сообщения
    echo "Сообщение успешно отправлено в Telegram.";
}
?>