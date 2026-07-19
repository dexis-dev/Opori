<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка данных формы
    $companyName = $_POST['company_name'];
    $yourName = $_POST['your_name'];
    $phoneNumber = $_POST['phone_number'];
    $requiredSupports = $_POST['required_supports'];

    // Отправка данных на Google Forms
    $googleFormsURL = "https://docs.google.com/forms/d/e/1nWCEBJwuJi05bg2AQNAohjxzkK20rxowhLf9e5FSpEA/formResponse";
    $postData = http_build_query([
        'entry.111111111' => $companyName,        // Замените на реальные идентификаторы полей
        'entry.222222222' => $yourName,
        'entry.333333333' => $phoneNumber,
        'entry.444444444' => $requiredSupports
    ]);

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => $postData,
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($googleFormsURL, false, $context);

    // Дополнительная обработка результата, если необходимо
}
?>
