<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    if (!empty($name) && !empty($email)) {
        echo json_encode([
            'status' => 'success',
            'message' => "Дякуємо, {$name}! Вашу анкету успішно прийнято."
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Будь ласка, заповніть усі обов’язкові поля.'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Некоректний тип запиту.'
    ]);
}
?>