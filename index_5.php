<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            margin-top: 0;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            color: white;
        }
        .success {
            background-color: #28a745;
        }
        .error {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Форма обратной связи</h2>
        <form action="index_5.php" method="post" id="feedbackForm">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Ваш Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Отправить">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);

            // Валидация данных
            if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Успешная отправка
                echo "<div class='message success' id='feedbackMessage'>Ваше сообщение успешно отправлено.<br>Имя: $name<br>Email: $email<br>Сообщение: $message</div>";
            } else {
                // Ошибка в данных
                echo "<div class='message error' id='feedbackMessage'>Ошибка при отправке сообщения. Пожалуйста, проверьте введенные данные.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
