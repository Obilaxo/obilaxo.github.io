<?php
$chat_file = 'chat.txt';

if (file_exists($chat_file)) {
    $messages = file($chat_file, FILE_IGNORE_NEW_LINES);
    foreach ($messages as $message) {
        echo "<div class='message'>$message</div>";
    }
}
?>
